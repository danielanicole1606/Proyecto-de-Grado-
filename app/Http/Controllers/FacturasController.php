<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturasRequest;
use App\Http\Requests\UpdateFacturasRequest;
use App\Repositories\FacturasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Clientes;
use App\Models\GuiasTransporte;
use App\Models\Productos;
use App\Models\FacturaDetalles;
use Flash;
use Response;
use DB; 
use PDF;

class FacturasController extends AppBaseController
{
    /** @var  FacturasRepository */
    private $facturasRepository;

    public function __construct(FacturasRepository $facturasRepo)
    {
        $this->facturasRepository = $facturasRepo;
    }

    /**
     * Display a listing of the Facturas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $facturas = $this->facturasRepository->all();
        $facturas=DB::select("SELECT f.fac_id,
                             f.fac_descuento,
                             f.fac_iva, 
                             SUM(fd.det_cant*fd.det_valu) AS subt,
                             em.emp_razon_social,
                             cl.cli_nom_rasocial,
                             gt.cg_numero_guia,
                             f.fac_numero,
                             f.fac_fecha
                             FROM facturas f
                             JOIN facturas_detalle fd ON f.fac_id=fd.fac_id
                             JOIN empresa em ON f.emp_id=em.emp_id
                             JOIN clientes cl ON f.cli_id=cl.cli_id
                             JOIN guias_transporte gt ON f.cg_id=gt.cg_id
                             GROUP BY f.fac_id
                             ");

        return view('facturas.index')
            ->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new Facturas.
     *
     * @return Response
     */
    public function create()
    {
        
        $empresa=Empresa::pluck('emp_razon_social','emp_id');
        $clientes=Clientes::pluck('cli_nom_rasocial','cli_id');
        $guias=GuiasTransporte::pluck('cg_numero_guia','cg_id');
        $aux_fac=DB::select("SELECT * FROM facturas ORDER BY fac_numero DESC LIMIT 1");
        $productos=Productos::pluck('pro_descripcion','pro_id');

        if(empty($aux_fac)){
             // $facNo='001-001-000000001';
            $facNo=1;
        }else{
           $facNo=($aux_fac[0]->fac_numero)+1;
        }
        return view('facturas.create')
        ->with('empresa',$empresa)
        ->with('clientes',$clientes)
        ->with('guias',$guias)
        ->with('productos',$productos)
        ->with('facNo',$facNo);
    }

    /**
     * Store a newly created Facturas in storage.
     *
     * @param CreateFacturasRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturasRequest $request)
    {
        $input = $request->all(); //transformar a objeto de arreglo
        $input['fac_fecha']=date('Y-m-d'); //Incremento campos

        $facturas = $this->facturasRepository->create($input);//guarda la factura

        //guardar el detalle de la factura
        $Detalle=new FacturaDetalles;
        $Detalle->fac_id=$facturas->fac_id;
        $Detalle->pro_id=$input['pro_id'];
        $Detalle->det_cant=$input['det_cant'];
        $Detalle->det_valu=$input['det_valu'];
        $Detalle->save();

        Flash::success('Facturas saved successfully.');

        return redirect(route('facturas.edit',$facturas->fac_id));
    }

    /**
     * Display the specified Facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
       
        $factura=DB::select("SELECT f.fac_id,
                             f.fac_descuento,
                             f.fac_iva, 
                             SUM(fd.det_cant*fd.det_valu) AS subt,
                             em.emp_razon_social,
                             em.emp_direccion,
                             em.emp_telefono,
                             cl.cli_nom_rasocial,
                             cl.cli_ced_ruc,
                             cl.cli_direccion,
                             cl.cli_telefono,
                             gt.cg_numero_guia,
                             f.fac_numero,
                             f.fac_fecha
                             FROM facturas f
                             JOIN facturas_detalle fd ON f.fac_id=fd.fac_id
                             JOIN empresa em ON f.emp_id=em.emp_id
                             JOIN clientes cl ON f.cli_id=cl.cli_id
                             JOIN guias_transporte gt ON f.cg_id=gt.cg_id
                             WHERE f.fac_id=$id
                             GROUP BY f.fac_id ");

        $detalle=DB::select("SELECT * FROM facturas_detalle fd 
            JOIN productos pr ON fd.pro_id=pr.pro_id
            WHERE fd.fac_id=$id");
        // $facturas = $this->facturasRepository->find($id);
         $pdf = app('dompdf.wrapper');
        $pdf->loadView('facturas.show',['factura'=>$factura[0],'detalle'=>$detalle ]);

        return $pdf->stream();

        // return view('facturas.show')->with('facturas', $facturas);
    }

    /**
     * Show the form for editing the specified Facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturas = $this->facturasRepository->find($id);
        $empresa=Empresa::pluck('emp_razon_social','emp_id');
        $clientes=Clientes::pluck('cli_nom_rasocial','cli_id');
        $guias=GuiasTransporte::pluck('cg_numero_guia','cg_id');
        $productos=Productos::pluck('pro_descripcion','pro_id');
        $facNo=$facturas->facNo;

        $facturaDetalles=DB::select("SELECT * FROM facturas_detalle fd 
                                      JOIN productos pr ON fd.pro_id=pr.pro_id 
                                      WHERE fd.fac_id=$id");


        return view('facturas.edit')
        ->with('facturas', $facturas)
        ->with('empresa',$empresa)
        ->with('clientes',$clientes)
        ->with('guias',$guias)
        ->with('productos',$productos)
        ->with('facNo',$facNo)
        ->with('facturaDetalles',$facturaDetalles);
    }

    /**
     * Update the specified Facturas in storage.
     *
     * @param int $id
     * @param UpdateFacturasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturasRequest $request)
    {
        $input=$request->all();
        $auxfacturas = $this->facturasRepository->find($id);
        //actualizo el encabezado
        if(isset($input['fac_iva']) ){
            $input['fac_iva']=1; //1->calcula iva  0->no calcula iva

        }else{
            $input['fac_iva']=0;
        }
        $facturas = $this->facturasRepository->update($input, $id);
        //inserto el nuevo detalle si tengo los valores cantidad y valor unitario
        if($input['det_cant']!=null && $input['det_valu']!=null){

        $Detalle=new FacturaDetalles;
        $Detalle->fac_id=$id;
        $Detalle->pro_id=$input['pro_id'];
        $Detalle->det_cant=$input['det_cant'];
        $Detalle->det_valu=$input['det_valu'];
        $Detalle->save();

        return redirect(route('facturas.edit',$id));
    }
     return redirect(route('facturas.index'));
    }

    /**
     * Remove the specified Facturas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        $this->facturasRepository->delete($id);

        Flash::success('Facturas deleted successfully.');

        return redirect(route('facturas.index'));
    }
}

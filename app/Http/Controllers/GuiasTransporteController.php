<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGuiasTransporteRequest;
use App\Http\Requests\UpdateGuiasTransporteRequest;
use App\Repositories\GuiasTransporteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Trailers;
use App\Models\TiposProducto;
use App\User;
use Flash;
use Response;
use Auth;
use DB;

class GuiasTransporteController extends AppBaseController
{
    /** @var  GuiasTransporteRepository */
    private $guiasTransporteRepository;

    public function __construct(GuiasTransporteRepository $guiasTransporteRepo)
    {
        $this->guiasTransporteRepository = $guiasTransporteRepo;
    }

    /**
     * Display a listing of the GuiasTransporte.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $guiasTransportes =DB::select("SELECT gt.cg_id,
                            cl.cli_nom_rasocial,
                            p.name,
                            tr.tra_placa,
                            tpd.tip_descripcion,
                            gt.cg_fecha,
                            gt.cg_numero_guia,
                            gt.cg_origen,
                            gt.cg_destino,
                            gt.cg_observaciones
                            FROM guias_transporte gt
                            JOIN clientes cl ON gt.cli_id=cl.cli_id
                            JOIN personas p ON gt.chofer_id=p.per_id
                            JOIN trailers tr ON gt.tra_id=tr.tra_id
                            JOIN tipos_producto tpd ON gt.tip_id=tpd.tip_id
                            GROUP BY gt.cg_id");

        return view('guias_transportes.index')
            ->with('guiasTransportes', $guiasTransportes);
    }

    /**
     * Show the form for creating a new GuiasTransporte.
     *
     * @return Response
     */
    public function create()
    {
        
        $clientes=Clientes::pluck('cli_nom_rasocial','cli_id');
        $choferes=User::pluck('name','per_id');
        $trailers=Trailers::pluck('tra_placa','tra_id');
        $aux_cg=DB::select("SELECT * FROM guias_transporte ORDER BY cg_numero_guia DESC LIMIT 1");
        $tiproductos=TiposProducto::pluck('tip_descripcion','tip_id');
        if(empty($aux_cg)){
             // $facNo='001-001-000000001';
            $cgNo=1;
        }else{
           $cgNo=($aux_cg[0]->cg_numero_guia)+1;
        }
       

        return view('guias_transportes.create')
        ->with('clientes',$clientes)
        ->with('choferes',$choferes)
        ->with('trailers',$trailers)
        ->with('tiproductos',$tiproductos)
        ->with('cgNo',$cgNo);

    }

    /**
     * Store a newly created GuiasTransporte in storage.
     *
     * @param CreateGuiasTransporteRequest $request
     *
     * @return Response
     */
    public function store(CreateGuiasTransporteRequest $request)
    {
        $input = $request->all();
                // $input['per_id']=Auth::user()->per_id;

        $guiasTransporte = $this->guiasTransporteRepository->create($input);

        Flash::success('Guias Transporte saved successfully.');

        return redirect(route('guiasTransportes.index'));
    }

    /**
     * Display the specified GuiasTransporte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $guiasTransporte = $this->guiasTransporteRepository->find($id);

        if (empty($guiasTransporte)) {
            Flash::error('Guias Transporte not found');

            return redirect(route('guiasTransportes.index'));
        }

        return view('guias_transportes.show')->with('guiasTransporte', $guiasTransporte);
    }

    /**
     * Show the form for editing the specified GuiasTransporte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $guiasTransporte = $this->guiasTransporteRepository->find($id);
        $clientes=Clientes::pluck('cli_nom_rasocial','cli_id');
        $choferes=User::pluck('name','per_id');
        $trailers=Trailers::pluck('tra_placa','tra_id');
        $tiproductos=TiposProducto::pluck('tip_descripcion','tip_id');
        $cgNo=$guiasTransporte->cgNo;

        if (empty($guiasTransporte)) {
            Flash::error('Guias Transporte not found');

            return redirect(route('guiasTransportes.index'));
        }

        return view('guias_transportes.edit')
        ->with('guiasTransporte', $guiasTransporte)
        ->with('clientes',$clientes)
        ->with('choferes',$choferes)
        ->with('trailers',$trailers)
        ->with('tiproductos',$tiproductos)
        ->with('cgNo',$cgNo);
    }   

    /**
     * Update the specified GuiasTransporte in storage.
     *
     * @param int $id
     * @param UpdateGuiasTransporteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGuiasTransporteRequest $request)
    {
        $guiasTransporte = $this->guiasTransporteRepository->find($id);

        if (empty($guiasTransporte)) {
            Flash::error('Guias Transporte not found');

            return redirect(route('guiasTransportes.index'));
        }

        $guiasTransporte = $this->guiasTransporteRepository->update($request->all(), $id);

        Flash::success('Guias Transporte updated successfully.');

        return redirect(route('guiasTransportes.index'));
    }

    /**
     * Remove the specified GuiasTransporte from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $guiasTransporte = $this->guiasTransporteRepository->find($id);

        if (empty($guiasTransporte)) {
            Flash::error('Guias Transporte not found');

            return redirect(route('guiasTransportes.index'));
        }

        $this->guiasTransporteRepository->delete($id);

        Flash::success('Guias Transporte deleted successfully.');

        return redirect(route('guiasTransportes.index'));
    }
}

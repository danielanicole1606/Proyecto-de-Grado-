<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTiposProductoRequest;
use App\Http\Requests\UpdateTiposProductoRequest;
use App\Repositories\TiposProductoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TiposProductoController extends AppBaseController
{
    /** @var  TiposProductoRepository */
    private $tiposProductoRepository;

    public function __construct(TiposProductoRepository $tiposProductoRepo)
    {
        $this->tiposProductoRepository = $tiposProductoRepo;
    }

    /**
     * Display a listing of the TiposProducto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tiposProductos = $this->tiposProductoRepository->all();

        return view('tipos_productos.index')
            ->with('tiposProductos', $tiposProductos);
    }

    /**
     * Show the form for creating a new TiposProducto.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipos_productos.create');
    }

    /**
     * Store a newly created TiposProducto in storage.
     *
     * @param CreateTiposProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateTiposProductoRequest $request)
    {
        $input = $request->all();

        $tiposProducto = $this->tiposProductoRepository->create($input);

        Flash::success('Tipos Producto saved successfully.');

        return redirect(route('tiposProductos.index'));
    }

    /**
     * Display the specified TiposProducto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tiposProducto = $this->tiposProductoRepository->find($id);

        if (empty($tiposProducto)) {
            Flash::error('Tipos Producto not found');

            return redirect(route('tiposProductos.index'));
        }

        return view('tipos_productos.show')->with('tiposProducto', $tiposProducto);
    }

    /**
     * Show the form for editing the specified TiposProducto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tiposProducto = $this->tiposProductoRepository->find($id);

        if (empty($tiposProducto)) {
            Flash::error('Tipos Producto not found');

            return redirect(route('tiposProductos.index'));
        }

        return view('tipos_productos.edit')->with('tiposProducto', $tiposProducto);
    }

    /**
     * Update the specified TiposProducto in storage.
     *
     * @param int $id
     * @param UpdateTiposProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTiposProductoRequest $request)
    {
        $tiposProducto = $this->tiposProductoRepository->find($id);

        if (empty($tiposProducto)) {
            Flash::error('Tipos Producto not found');

            return redirect(route('tiposProductos.index'));
        }

        $tiposProducto = $this->tiposProductoRepository->update($request->all(), $id);

        Flash::success('Tipos Producto updated successfully.');

        return redirect(route('tiposProductos.index'));
    }

    /**
     * Remove the specified TiposProducto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tiposProducto = $this->tiposProductoRepository->find($id);

        if (empty($tiposProducto)) {
            Flash::error('Tipos Producto not found');

            return redirect(route('tiposProductos.index'));
        }

        $this->tiposProductoRepository->delete($id);

        Flash::success('Tipos Producto deleted successfully.');

        return redirect(route('tiposProductos.index'));
    }
}

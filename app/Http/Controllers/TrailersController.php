<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrailersRequest;
use App\Http\Requests\UpdateTrailersRequest;
use App\Repositories\TrailersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TrailersController extends AppBaseController
{
    /** @var  TrailersRepository */
    private $trailersRepository;

    public function __construct(TrailersRepository $trailersRepo)
    {
        $this->trailersRepository = $trailersRepo;
    }

    /**
     * Display a listing of the Trailers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trailers = $this->trailersRepository->all();

        return view('trailers.index')
            ->with('trailers', $trailers);
    }

    /**
     * Show the form for creating a new Trailers.
     *
     * @return Response
     */
    public function create()
    {
        return view('trailers.create');
    }

    /**
     * Store a newly created Trailers in storage.
     *
     * @param CreateTrailersRequest $request
     *
     * @return Response
     */
    public function store(CreateTrailersRequest $request)
    {
        $input = $request->all();

        $trailers = $this->trailersRepository->create($input);

        Flash::success('Trailers saved successfully.');

        return redirect(route('trailers.index'));
    }

    /**
     * Display the specified Trailers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trailers = $this->trailersRepository->find($id);

        if (empty($trailers)) {
            Flash::error('Trailers not found');

            return redirect(route('trailers.index'));
        }

        return view('trailers.show')->with('trailers', $trailers);
    }

    /**
     * Show the form for editing the specified Trailers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trailers = $this->trailersRepository->find($id);

        if (empty($trailers)) {
            Flash::error('Trailers not found');

            return redirect(route('trailers.index'));
        }

        return view('trailers.edit')->with('trailers', $trailers);
    }

    /**
     * Update the specified Trailers in storage.
     *
     * @param int $id
     * @param UpdateTrailersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrailersRequest $request)
    {
        $trailers = $this->trailersRepository->find($id);

        if (empty($trailers)) {
            Flash::error('Trailers not found');

            return redirect(route('trailers.index'));
        }

        $trailers = $this->trailersRepository->update($request->all(), $id);

        Flash::success('Trailers updated successfully.');

        return redirect(route('trailers.index'));
    }

    /**
     * Remove the specified Trailers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trailers = $this->trailersRepository->find($id);

        if (empty($trailers)) {
            Flash::error('Trailers not found');

            return redirect(route('trailers.index'));
        }

        $this->trailersRepository->delete($id);

        Flash::success('Trailers deleted successfully.');

        return redirect(route('trailers.index'));
    }
}

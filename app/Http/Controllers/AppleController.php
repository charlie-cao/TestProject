<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppleRequest;
use App\Http\Requests\UpdateAppleRequest;
use App\Repositories\AppleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AppleController extends AppBaseController
{
    /** @var  AppleRepository */
    private $appleRepository;

    public function __construct(AppleRepository $appleRepo)
    {
        $this->appleRepository = $appleRepo;
    }

    /**
     * Display a listing of the Apple.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->appleRepository->pushCriteria(new RequestCriteria($request));
        $apples = $this->appleRepository->all();

        return view('apples.index')
            ->with('apples', $apples);
    }

    /**
     * Show the form for creating a new Apple.
     *
     * @return Response
     */
    public function create()
    {
        return view('apples.create');
    }

    /**
     * Store a newly created Apple in storage.
     *
     * @param CreateAppleRequest $request
     *
     * @return Response
     */
    public function store(CreateAppleRequest $request)
    {
        $input = $request->all();

        $apple = $this->appleRepository->create($input);

        Flash::success('Apple saved successfully.');

        return redirect(route('apples.index'));
    }

    /**
     * Display the specified Apple.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $apple = $this->appleRepository->findWithoutFail($id);

        if (empty($apple)) {
            Flash::error('Apple not found');

            return redirect(route('apples.index'));
        }

        return view('apples.show')->with('apple', $apple);
    }

    /**
     * Show the form for editing the specified Apple.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $apple = $this->appleRepository->findWithoutFail($id);

        if (empty($apple)) {
            Flash::error('Apple not found');

            return redirect(route('apples.index'));
        }

        return view('apples.edit')->with('apple', $apple);
    }

    /**
     * Update the specified Apple in storage.
     *
     * @param  int              $id
     * @param UpdateAppleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAppleRequest $request)
    {
        $apple = $this->appleRepository->findWithoutFail($id);

        if (empty($apple)) {
            Flash::error('Apple not found');

            return redirect(route('apples.index'));
        }

        $apple = $this->appleRepository->update($request->all(), $id);

        Flash::success('Apple updated successfully.');

        return redirect(route('apples.index'));
    }

    /**
     * Remove the specified Apple from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $apple = $this->appleRepository->findWithoutFail($id);

        if (empty($apple)) {
            Flash::error('Apple not found');

            return redirect(route('apples.index'));
        }

        $this->appleRepository->delete($id);

        Flash::success('Apple deleted successfully.');

        return redirect(route('apples.index'));
    }
}

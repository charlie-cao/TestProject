<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use App\Repositories\MusicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MusicController extends AppBaseController
{
    /** @var  MusicRepository */
    private $musicRepository;

    public function __construct(MusicRepository $musicRepo)
    {
        $this->musicRepository = $musicRepo;
    }

    /**
     * Display a listing of the Music.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->musicRepository->pushCriteria(new RequestCriteria($request));
        $musics = $this->musicRepository->all();

        return view('musics.index')
            ->with('musics', $musics);
    }

    /**
     * Show the form for creating a new Music.
     *
     * @return Response
     */
    public function create()
    {
        return view('musics.create');
    }

    /**
     * Store a newly created Music in storage.
     *
     * @param CreateMusicRequest $request
     *
     * @return Response
     */
    public function store(CreateMusicRequest $request)
    {
        $input = $request->all();

        $music = $this->musicRepository->create($input);

        Flash::success('Music saved successfully.');

        return redirect(route('musics.index'));
    }

    /**
     * Display the specified Music.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $music = $this->musicRepository->findWithoutFail($id);

        if (empty($music)) {
            Flash::error('Music not found');

            return redirect(route('musics.index'));
        }

        return view('musics.show')->with('music', $music);
    }

    /**
     * Show the form for editing the specified Music.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $music = $this->musicRepository->findWithoutFail($id);

        if (empty($music)) {
            Flash::error('Music not found');

            return redirect(route('musics.index'));
        }

        return view('musics.edit')->with('music', $music);
    }

    /**
     * Update the specified Music in storage.
     *
     * @param  int              $id
     * @param UpdateMusicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMusicRequest $request)
    {
        $music = $this->musicRepository->findWithoutFail($id);

        if (empty($music)) {
            Flash::error('Music not found');

            return redirect(route('musics.index'));
        }

        $music = $this->musicRepository->update($request->all(), $id);

        Flash::success('Music updated successfully.');

        return redirect(route('musics.index'));
    }

    /**
     * Remove the specified Music from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $music = $this->musicRepository->findWithoutFail($id);

        if (empty($music)) {
            Flash::error('Music not found');

            return redirect(route('musics.index'));
        }

        $this->musicRepository->delete($id);

        Flash::success('Music deleted successfully.');

        return redirect(route('musics.index'));
    }
}

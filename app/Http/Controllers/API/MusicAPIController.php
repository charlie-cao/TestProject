<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMusicAPIRequest;
use App\Http\Requests\API\UpdateMusicAPIRequest;
use App\Models\Music;
use App\Repositories\MusicRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MusicController
 * @package App\Http\Controllers\API
 */

class MusicAPIController extends AppBaseController
{
    /** @var  MusicRepository */
    private $musicRepository;

    public function __construct(MusicRepository $musicRepo)
    {
        $this->musicRepository = $musicRepo;
    }

    /**
     * Display a listing of the Music.
     * GET|HEAD /musics
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->musicRepository->pushCriteria(new RequestCriteria($request));
        $this->musicRepository->pushCriteria(new LimitOffsetCriteria($request));
        $musics = $this->musicRepository->all();

        return $this->sendResponse($musics->toArray(), 'Musics retrieved successfully');
    }

    /**
     * Store a newly created Music in storage.
     * POST /musics
     *
     * @param CreateMusicAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMusicAPIRequest $request)
    {
        $input = $request->all();

        $musics = $this->musicRepository->create($input);

        return $this->sendResponse($musics->toArray(), 'Music saved successfully');
    }

    /**
     * Display the specified Music.
     * GET|HEAD /musics/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Music $music */
        $music = $this->musicRepository->findWithoutFail($id);

        if (empty($music)) {
            return $this->sendError('Music not found');
        }

        return $this->sendResponse($music->toArray(), 'Music retrieved successfully');
    }

    /**
     * Update the specified Music in storage.
     * PUT/PATCH /musics/{id}
     *
     * @param  int $id
     * @param UpdateMusicAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMusicAPIRequest $request)
    {
        $input = $request->all();

        /** @var Music $music */
        $music = $this->musicRepository->findWithoutFail($id);

        if (empty($music)) {
            return $this->sendError('Music not found');
        }

        $music = $this->musicRepository->update($input, $id);

        return $this->sendResponse($music->toArray(), 'Music updated successfully');
    }

    /**
     * Remove the specified Music from storage.
     * DELETE /musics/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Music $music */
        $music = $this->musicRepository->findWithoutFail($id);

        if (empty($music)) {
            return $this->sendError('Music not found');
        }

        $music->delete();

        return $this->sendResponse($id, 'Music deleted successfully');
    }
}

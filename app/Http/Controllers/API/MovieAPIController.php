<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMovieAPIRequest;
use App\Http\Requests\API\UpdateMovieAPIRequest;
use App\Models\Movie;
use App\Repositories\MovieRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MovieController
 * @package App\Http\Controllers\API
 */

class MovieAPIController extends AppBaseController
{
    /** @var  MovieRepository */
    private $movieRepository;

    public function __construct(MovieRepository $movieRepo)
    {
        $this->movieRepository = $movieRepo;
    }

    /**
     * Display a listing of the Movie.
     * GET|HEAD /movies
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->movieRepository->pushCriteria(new RequestCriteria($request));
        $this->movieRepository->pushCriteria(new LimitOffsetCriteria($request));
        $movies = $this->movieRepository->all();

        return $this->sendResponse($movies->toArray(), 'Movies retrieved successfully');
    }

    /**
     * Store a newly created Movie in storage.
     * POST /movies
     *
     * @param CreateMovieAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMovieAPIRequest $request)
    {
        $input = $request->all();

        $movies = $this->movieRepository->create($input);

        return $this->sendResponse($movies->toArray(), 'Movie saved successfully');
    }

    /**
     * Display the specified Movie.
     * GET|HEAD /movies/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Movie $movie */
        $movie = $this->movieRepository->findWithoutFail($id);

        if (empty($movie)) {
            return $this->sendError('Movie not found');
        }

        return $this->sendResponse($movie->toArray(), 'Movie retrieved successfully');
    }

    /**
     * Update the specified Movie in storage.
     * PUT/PATCH /movies/{id}
     *
     * @param  int $id
     * @param UpdateMovieAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovieAPIRequest $request)
    {
        $input = $request->all();

        /** @var Movie $movie */
        $movie = $this->movieRepository->findWithoutFail($id);

        if (empty($movie)) {
            return $this->sendError('Movie not found');
        }

        $movie = $this->movieRepository->update($input, $id);

        return $this->sendResponse($movie->toArray(), 'Movie updated successfully');
    }

    /**
     * Remove the specified Movie from storage.
     * DELETE /movies/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Movie $movie */
        $movie = $this->movieRepository->findWithoutFail($id);

        if (empty($movie)) {
            return $this->sendError('Movie not found');
        }

        $movie->delete();

        return $this->sendResponse($id, 'Movie deleted successfully');
    }
}

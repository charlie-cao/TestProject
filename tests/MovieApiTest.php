<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieApiTest extends TestCase
{
    use MakeMovieTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMovie()
    {
        $movie = $this->fakeMovieData();
        $this->json('POST', '/api/v1/movies', $movie);

        $this->assertApiResponse($movie);
    }

    /**
     * @test
     */
    public function testReadMovie()
    {
        $movie = $this->makeMovie();
        $this->json('GET', '/api/v1/movies/'.$movie->id);

        $this->assertApiResponse($movie->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMovie()
    {
        $movie = $this->makeMovie();
        $editedMovie = $this->fakeMovieData();

        $this->json('PUT', '/api/v1/movies/'.$movie->id, $editedMovie);

        $this->assertApiResponse($editedMovie);
    }

    /**
     * @test
     */
    public function testDeleteMovie()
    {
        $movie = $this->makeMovie();
        $this->json('DELETE', '/api/v1/movies/'.$movie->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/movies/'.$movie->id);

        $this->assertResponseStatus(404);
    }
}

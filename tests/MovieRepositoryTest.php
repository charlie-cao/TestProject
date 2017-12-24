<?php

use App\Models\Movie;
use App\Repositories\MovieRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieRepositoryTest extends TestCase
{
    use MakeMovieTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MovieRepository
     */
    protected $movieRepo;

    public function setUp()
    {
        parent::setUp();
        $this->movieRepo = App::make(MovieRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMovie()
    {
        $movie = $this->fakeMovieData();
        $createdMovie = $this->movieRepo->create($movie);
        $createdMovie = $createdMovie->toArray();
        $this->assertArrayHasKey('id', $createdMovie);
        $this->assertNotNull($createdMovie['id'], 'Created Movie must have id specified');
        $this->assertNotNull(Movie::find($createdMovie['id']), 'Movie with given id must be in DB');
        $this->assertModelData($movie, $createdMovie);
    }

    /**
     * @test read
     */
    public function testReadMovie()
    {
        $movie = $this->makeMovie();
        $dbMovie = $this->movieRepo->find($movie->id);
        $dbMovie = $dbMovie->toArray();
        $this->assertModelData($movie->toArray(), $dbMovie);
    }

    /**
     * @test update
     */
    public function testUpdateMovie()
    {
        $movie = $this->makeMovie();
        $fakeMovie = $this->fakeMovieData();
        $updatedMovie = $this->movieRepo->update($fakeMovie, $movie->id);
        $this->assertModelData($fakeMovie, $updatedMovie->toArray());
        $dbMovie = $this->movieRepo->find($movie->id);
        $this->assertModelData($fakeMovie, $dbMovie->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMovie()
    {
        $movie = $this->makeMovie();
        $resp = $this->movieRepo->delete($movie->id);
        $this->assertTrue($resp);
        $this->assertNull(Movie::find($movie->id), 'Movie should not exist in DB');
    }
}

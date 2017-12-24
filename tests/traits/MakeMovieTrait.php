<?php

use Faker\Factory as Faker;
use App\Models\Movie;
use App\Repositories\MovieRepository;

trait MakeMovieTrait
{
    /**
     * Create fake instance of Movie and save it in database
     *
     * @param array $movieFields
     * @return Movie
     */
    public function makeMovie($movieFields = [])
    {
        /** @var MovieRepository $movieRepo */
        $movieRepo = App::make(MovieRepository::class);
        $theme = $this->fakeMovieData($movieFields);
        return $movieRepo->create($theme);
    }

    /**
     * Get fake instance of Movie
     *
     * @param array $movieFields
     * @return Movie
     */
    public function fakeMovie($movieFields = [])
    {
        return new Movie($this->fakeMovieData($movieFields));
    }

    /**
     * Get fake data of Movie
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMovieData($movieFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'url' => $fake->word,
            'author' => $fake->word,
            'memo' => $fake->text,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $movieFields);
    }
}

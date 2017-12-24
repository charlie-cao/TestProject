<?php

use Faker\Factory as Faker;
use App\Models\Music;
use App\Repositories\MusicRepository;

trait MakeMusicTrait
{
    /**
     * Create fake instance of Music and save it in database
     *
     * @param array $musicFields
     * @return Music
     */
    public function makeMusic($musicFields = [])
    {
        /** @var MusicRepository $musicRepo */
        $musicRepo = App::make(MusicRepository::class);
        $theme = $this->fakeMusicData($musicFields);
        return $musicRepo->create($theme);
    }

    /**
     * Get fake instance of Music
     *
     * @param array $musicFields
     * @return Music
     */
    public function fakeMusic($musicFields = [])
    {
        return new Music($this->fakeMusicData($musicFields));
    }

    /**
     * Get fake data of Music
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMusicData($musicFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'desc' => $fake->text,
            'author' => $fake->word,
            'url' => $fake->word,
            'size' => $fake->randomDigitNotNull,
            'creator' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $musicFields);
    }
}

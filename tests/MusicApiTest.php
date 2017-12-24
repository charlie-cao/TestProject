<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MusicApiTest extends TestCase
{
    use MakeMusicTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMusic()
    {
        $music = $this->fakeMusicData();
        $this->json('POST', '/api/v1/musics', $music);

        $this->assertApiResponse($music);
    }

    /**
     * @test
     */
    public function testReadMusic()
    {
        $music = $this->makeMusic();
        $this->json('GET', '/api/v1/musics/'.$music->id);

        $this->assertApiResponse($music->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMusic()
    {
        $music = $this->makeMusic();
        $editedMusic = $this->fakeMusicData();

        $this->json('PUT', '/api/v1/musics/'.$music->id, $editedMusic);

        $this->assertApiResponse($editedMusic);
    }

    /**
     * @test
     */
    public function testDeleteMusic()
    {
        $music = $this->makeMusic();
        $this->json('DELETE', '/api/v1/musics/'.$music->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/musics/'.$music->id);

        $this->assertResponseStatus(404);
    }
}

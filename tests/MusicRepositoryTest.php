<?php

use App\Models\Music;
use App\Repositories\MusicRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MusicRepositoryTest extends TestCase
{
    use MakeMusicTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MusicRepository
     */
    protected $musicRepo;

    public function setUp()
    {
        parent::setUp();
        $this->musicRepo = App::make(MusicRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMusic()
    {
        $music = $this->fakeMusicData();
        $createdMusic = $this->musicRepo->create($music);
        $createdMusic = $createdMusic->toArray();
        $this->assertArrayHasKey('id', $createdMusic);
        $this->assertNotNull($createdMusic['id'], 'Created Music must have id specified');
        $this->assertNotNull(Music::find($createdMusic['id']), 'Music with given id must be in DB');
        $this->assertModelData($music, $createdMusic);
    }

    /**
     * @test read
     */
    public function testReadMusic()
    {
        $music = $this->makeMusic();
        $dbMusic = $this->musicRepo->find($music->id);
        $dbMusic = $dbMusic->toArray();
        $this->assertModelData($music->toArray(), $dbMusic);
    }

    /**
     * @test update
     */
    public function testUpdateMusic()
    {
        $music = $this->makeMusic();
        $fakeMusic = $this->fakeMusicData();
        $updatedMusic = $this->musicRepo->update($fakeMusic, $music->id);
        $this->assertModelData($fakeMusic, $updatedMusic->toArray());
        $dbMusic = $this->musicRepo->find($music->id);
        $this->assertModelData($fakeMusic, $dbMusic->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMusic()
    {
        $music = $this->makeMusic();
        $resp = $this->musicRepo->delete($music->id);
        $this->assertTrue($resp);
        $this->assertNull(Music::find($music->id), 'Music should not exist in DB');
    }
}

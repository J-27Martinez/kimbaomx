<?php

namespace Tests\Feature;

use App\GalleryArchive;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GalleryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_galery_records()
    {
        $archive = GalleryArchive::factory()->count(8)->create()->first();

        $this->get('/')
            ->assertSuccessful();
    }
}

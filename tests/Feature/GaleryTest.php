<?php

namespace Tests\Feature;

use App\GaleryArchive;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GaleryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_galery_records()
    {
        $archive = GaleryArchive::factory()->count(8)->create()->first();

        $this->get('/')
            ->assertSuccessful();
    }
}

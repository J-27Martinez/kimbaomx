<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GaleryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_guest_view_galery_records()
    {
        factory(GaleryArchive::class)->times(8)->create();

        eval(\Psy\Sh());
    }
}

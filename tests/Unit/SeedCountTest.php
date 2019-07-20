<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SeedCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSeedCount()
    {
        $userCount = \App\User::count();

        $this->assertTrue($userCount === 50);
    }
}

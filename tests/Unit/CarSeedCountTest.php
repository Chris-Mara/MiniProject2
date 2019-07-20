<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarSeedCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarSeedCount()
    {
        $carCount = \App\Car::count();

        $this->assertTrue($carCount === 50);
    }
}

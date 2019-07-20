<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarDeleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarDelete()
    {
        $this->assertDatabaseHas('cars', array('id' => 5));

        $car = \App\Car::find(5);
        $car->delete();

        $this->assertDatabaseMissing('cars', array('id' => 5));
    }
}

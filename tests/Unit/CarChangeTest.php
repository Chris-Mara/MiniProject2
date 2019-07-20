<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class CarChangeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarChange()
    {
        $car = \App\Car::find(1);
        $car->year = 2000;
        $car->save();


        $this->assertDatabaseHas('cars', array('year' => 2000, 'id' => 1));
    }
}

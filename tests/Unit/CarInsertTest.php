<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarInsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarInsert()
    {
        $car = factory(\App\Car::class)->create([
            'make' => 'subaru',
            'model' => 'sedan',
            'year' => 1111,
        ]);

        $this->assertDatabaseHas('cars', array('make' => 'subaru', 'model' => 'sedan', 'year' => 1111,));
    }
}

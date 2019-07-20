<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserInsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserInsert()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'TEST',
            'email' => 'TEST@TEST.TEST',
            'password' => 'TESTPASS',
        ]);

        $this->assertDatabaseHas('users', array('name' => 'TEST', 'email' => 'TEST@TEST.TEST', 'password' => 'TESTPASS'));

    }
}

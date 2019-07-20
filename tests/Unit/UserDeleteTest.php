<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserDeleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserDelete()
    {
        $this->assertDatabaseHas('users', array('id' => 5));

        $user = \App\User::find(5);
        $user->delete();

        $this->assertDatabaseMissing('users', array('id' => 5));
    }
}

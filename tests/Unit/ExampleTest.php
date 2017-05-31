<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

    	$first = factory(User::class)->create();
    	$second = factory(User::class)->create([
    		'created_at' => \Carbon\Carbon::now()->subMonth()
    		]);
  

    	$this->assertCount(2);

    }
  }

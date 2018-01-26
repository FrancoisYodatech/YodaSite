<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class contactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFormContact()
    {
      $this->visit('/contact/create')
          ->type('Someone', 'name')
          ->type('someone@somewhere.com', 'email')
          ->type('A message', 'message')
          ->press('Send')
          ->see('Your message has been recorded')
          ->seeInDatabase('contacts', [
              'name' => 'Someone',
              'email' => 'someone@somewhere.com',
              'message' => 'A message'
          ]);
    }
}

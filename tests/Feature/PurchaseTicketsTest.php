<?php
namespace Tests\Feature;

use Tests\TestCase;

use yoda\Concert;
use yoda\Billing\FakePaymentGateway;
use yoda\Billing; 

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PurchaseTicketsTest extends TestCase
{
  // use DatabaseMigrations;

    /** @test  */

  function customer_can_purchase_concert_ticket()
  {
    $paymentGateway = new FakePaymentGateway;

    $concert = factory(Concert::class)->create(['ticketPrice' => 150]);

    $this->json('POST', "/concerts/{$concert->id}/orders", [
      'email' => 'francois.caillat@free.fr',
      'ticketQuantity' => 2,
      'paymentToken' => $paymentGateway->getValidTestToken(),
    ]);

    $this->assertResponseStatus(201);

    $this->assertEquals(300, $paymentGateway->totalCharges());

    $order = $concert->orders()->where('email', 'francois.caillat@free.fr')->first();
    $this->assertNotNull($order);
    $this->assertEquals(2, $order->tickets->count());


  }
}

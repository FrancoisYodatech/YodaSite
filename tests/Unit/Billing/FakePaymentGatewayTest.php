<?php
// namespace tests\Unit\Billing;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class FakePaymentGateway extends TestCase
{

  /** @test  */

  function charges_with_valid_paymanet_token_are_successful()
  {
        $paymentGateway = new FakePaymentGateway;

        $paymentGateway->charges(150, $paymentGateway->getValidTestToken());

        $this->assertEquals(150, $paymentGateway->totalCharges());
  }
}

 <?php

namespace yoda\Billing;

class FakePaymentGateway
{
  private $charges;

  public function _consrtuct()
  {
    $this->charges = collect();
  }

  public function getValidateTestToken()
  {
    return "valid token";
  }


  public function charge($amount, $token)
  {
    $this->charges[] = $amount;
  }

  public function totalCharges()
  {
    return $this->charges->sum();
  }
}

<?php


namespace App\Orders;


use App\Billing\PaymentGatewayContact;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGatewayContact $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }
    public function all(){
        $this->paymentGateway->setDiscount(500);

        return [
            'name' => 'Victor',
            'address' => '123 Coder\'s Tape Street'
        ];
    }
}
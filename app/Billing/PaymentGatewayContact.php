<?php

namespace App\Billing;

interface PaymentGatewayContact
{
    public function setDiscount($amount);

    public function charge($amount);
}
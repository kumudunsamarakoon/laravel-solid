<?php


namespace App\Libraries;


class PaymentHelper
{
    public function initializePayment($type)
    {
        switch ($type) {
            case 'credit':
                return new CreditCardPayment;
                break;
            case 'paypal':
                return new PaypalPayment;
                break;
        }
    }
}

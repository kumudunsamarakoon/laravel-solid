<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\PaymentHelper;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $paymentFactory = new PaymentHelper();
        $paymentMethod = $paymentFactory->initializePayment($request->type);
        $paymentMethod->pay();
    }
}

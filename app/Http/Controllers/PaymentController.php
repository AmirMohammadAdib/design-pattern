<?php

namespace App\Http\Controllers;

use App\Services\Payment\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function goToPay(){
        $amount = 10.00;
        $paymentDetails = [
            'card_number' => '4111111111111111',
            'expiry_date' => '12/24',
            'cvv' => '123',
        ];

        $paymentService = Payment::getInstance();
        $response = $paymentService->paymentProccess($amount, $paymentDetails);

        return response()->json($response);
    }
}

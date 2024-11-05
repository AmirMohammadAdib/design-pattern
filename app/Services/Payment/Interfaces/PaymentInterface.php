<?php 

namespace App\Services\Payment\Interfaces;

interface PaymentInterface {
    public function paymentProccess(float $amount, array $paymentDetail);
}
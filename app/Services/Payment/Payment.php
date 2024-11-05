<?php 

namespace App\Services\Payment;
use App\Services\Payment\Interfaces\PaymentInterface;

class Payment implements PaymentInterface {
    private static $instance = null;

    private function __construct(){

    }

    public static function getInstance(): Payment {
        if(self::$instance === null){
            self::$instance = new Payment();
        }

        return self::$instance;
    }


    public function paymentProccess(float $amount, array $paymentDetail) {
        // code

        return [
            'success' => true,
            'message' => 'payment successfull {$amount}',
        ];
    }
}
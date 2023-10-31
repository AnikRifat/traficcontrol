<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use PayMoney\Api\Amount;
use PayMoney\Api\Payer;
use PayMoney\Api\Payment;
use PayMoney\Api\RedirectUrls;
use PayMoney\Api\Transaction;


class PaymentController extends Controller
{
    public function pay(Request $request)
    {

        $data = $request->all();
        $payer = new Payer();
        $payer->setPaymentMethod('PayMoney');
        $amountIns = new Amount();
        $amountIns->setTotal($data['grand_total'])->setCurrency($currency_code = Currency::select('code')->find($data['currency_id'])->code);

        $trans = new Transaction();
        $trans->setAmount($amountIns);

        $urls = new RedirectUrls();
        $urls->setReturnUrl(url('/admin/reports')->alert('Paid !', 'success'))
            ->setCancelUrl(url('/admin/reports')->alert('Canceled !', 'warning'));

        $payment = new Payment();
        $payment->setCredentials([
            'client_id' => env('PAYMONEY_CLIENTID'),
            'client_secret' => env('PAYMONEY_CLIENTSECRET')
        ])->setRedirectUrls($urls)
            ->setPayer($payer)
            ->setTransaction($trans);

        try {
            $payment->create();
            $url = $payment->getApprovedUrl();
            return redirect($url);
        } catch (Exception $ex) {
            print $ex;
            exit;
            return redirect()->back()->alert('Payment Unsuccessfull !', 'warning');
        }
    }
}

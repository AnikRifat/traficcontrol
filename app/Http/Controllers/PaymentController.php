<?php

namespace App\Http\Controllers;

use App\Offence;
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
        $amountIns->setTotal($data['total'])->setCurrency('BIF');

        $trans = new Transaction();
        $trans->setAmount($amountIns);

        $urls = new RedirectUrls();
        $urls->setSuccessUrl(url('/admin/payment/success'))
            ->setCancelUrl(url('/admin/payment/cancel'));

        $payment = new Payment();
        $payment->setCredentials([
            'client_id' => 'SoRgWJsxB2CCvNioIDRjp6P9ARP5lU',
            'client_secret' => 'nvQVAWqKP41bVWWkkhpj8we6vncR5ijanHnNV8OTNScWhwK8qXQ951kstxxUzHnaY5yYWLzMxm9RGxUQxoYRD9bNRdc5PXFROYbH'
        ])->setRedirectUrls($urls)
            ->setPayer($payer)
            ->setTransaction($trans);
        // dd($payment);
        try {
            // dd($payment->create());
            $payment->create();


            $url = $payment->getApprovedUrl();
            $offence = Offence::find($data['offence']);
            $offence->update(['paid_status' => 1]);
            return redirect($url);
        } catch (Exception $ex) {
            print $ex;
            exit;
            return redirect()->back()->with(['message' => "Payment Unsuccuessfull !", 'alert-type' => 'warning']);
        }
    }

    public function cancel()
    {
        return redirect()->route('voyager.reports.index')->with(['message' => "Payment Canceled !", 'alert-type' => 'warning']);
    }
    public function success()
    {
        return redirect()->route('voyager.reports.index')->with(['message' => "Payment Succuessfull !", 'alert-type' => 'success']);

    }
}

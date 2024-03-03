<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PayController extends Controller
{
    public function stk(){
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '100';    
        $PartyA = '254719356271';
        $PartyB = '174379';
        $PhoneNumber = '254719356271';
        $CallBackURL = url('https://mydomain.com/pat');
        $AccountReference = 'Monyoro Testing';
        $TransactionDesc = '';
        $Remarks = 'Remarks';
        

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,   
            $CallBackURL,    
            $AccountReference,  
            $TransactionDesc,
            $Remarks
        );
        dd($stkPushSimulation);
    }
}

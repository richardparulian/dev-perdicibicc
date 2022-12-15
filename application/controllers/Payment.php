<?php


class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');

        $this->API = 'https://api-sandbox.doku.com';
        $this->clientId = 'BRN-0237-1667974786843';
        $this->secretKey = 'SK-xpBH5ZnW42WYdi1ytQHu';
        $this->load->model('M_Global');
    }


    public function index()
    {
    }

    public function checkout()
    {
        $targetPath = '/checkout/v1/payment';
        $dats = date("H:i:s");
        $requestId = $dats; // Change to UUID or anything that can generate unique value
        $dateTime = gmdate("Y-m-d H:i:s");
        $isoDateTime = date(DATE_ISO8601, strtotime($dateTime));
        $dateTimeFinal = substr($isoDateTime, 0, 19) . "Z";

        $data =  [
            "order" => [
                "amount" => 20000,
                "invoice_number" => $requestId
            ],
            "payment" => [
                "payment_due_date" => 60
            ],
            "customer" => [
                "name" => "unad",
                "email" => "qwe@gmail.com",
            ],
        ];

        $digestValue = base64_encode(hash('sha256', json_encode($data), true));

        $componentSignature = "Client-Id:" . $this->clientId . "\n" .
            "Request-Id:" . $requestId . "\n" .
            "Request-Timestamp:" . $dateTimeFinal . "\n" .
            "Request-Target:" . $targetPath . "\n" .
            "Digest:" . $digestValue;



        $signature = base64_encode(hash_hmac('sha256', $componentSignature, $this->secretKey, true));

        /* Endpoint */
        $url = $this->API . $targetPath;

        $data_string  = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Client-Id:' . $this->clientId,
            'Request-Id:' . $requestId,
            'Request-Timestamp:' . $dateTimeFinal,
            'Signature:' . "HMACSHA256=" . $signature,
        ));

        // Set response json
        $responseJson = curl_exec($ch);
        //$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $info = curl_getinfo($ch);
        print_r($responseJson);
        curl_close($ch);

        //echo $httpCode;
    }

    public function success()
    {


        $this->load->library('email');

        $notificationHeader = getallheaders();
        $notificationBody = file_get_contents('php://input');
        $notificationPath = '/payment/success'; // Adjust according to your notification path
        $secretKey = $this->secretKey; // Adjust according to your secret key

        $digest = base64_encode(hash('sha256', $notificationBody, true));
        $rawSignature = "Client-Id:" . $notificationHeader['Client-Id'] . "\n"
            . "Request-Id:" . $notificationHeader['Request-Id'] . "\n"
            . "Request-Timestamp:" . $notificationHeader['Request-Timestamp'] . "\n"
            . "Request-Target:" . $notificationPath . "\n"
            . "Digest:" . $digest;

        $signature = base64_encode(hash_hmac('sha256', $rawSignature, $secretKey, true));
        $finalSignature = 'HMACSHA256=' . $signature;

        // $data = array(

        //     "PayloadT" => "1"

        //     );

        // $this->M_Global->insert($data,"SuccessPayment");


        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'perdicibicc.com',
            'smtp_user' => 'no-reply@perdicibicc.com',
            'smtp_pass'   => 'CGGAPPAdmin02',
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);



        $this->email->initialize($config);

        $this->email->from('no-reply@perdicibicc.com', 'BICC');
        $this->email->to('ceritadansuara@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        // echo $this->email->print_debugger();

        if ($finalSignature == $headers['Signature']) {
        } else {

            return response('Invalid Signature', 400)->header('Content-Type', 'text/plain');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Showcase extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //Doku
        $this->API = 'https://api.doku.com';
        $this->clientId = 'BRN-0292-1659341516669';
        $this->secretKey = 'SK-ZJeEsJd7OuVRIaot3buW';

        //WA
        $this->channelId = '3414';
        $this->appId = 'xppyj-i3pikzicm8nrqg0';
        $this->secretKeyWa = 'ab0e3e7569cd6725fc88805515995484';
    }


    public function index()
    {
        $data['title']          = "Perdici BICC";
        $data['testimonial']    = $this->M_Custom->testimonial();

        sleep(1);

        $this->load->view('show-case-page/landing-page', $data);
        $this->load->view('components/footer', $data);
    }

    public function detail_program()
    {
        $data['title']          = "See Detail";
        $data['testimonial']    = $this->M_Custom->testimonial();

        sleep(1);

        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view('components/sidebar', $data);
        $this->load->view('show-case-page/detail-page', $data);
        $this->load->view('components/footer', $data);
    }

    public function terms()
    {
        $data['title']          = "Terms";
        $data['testimonial']    = $this->M_Custom->testimonial();

        sleep(1);

        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view('components/sidebar', $data);
        $this->load->view('show-case-page/terms-page', $data);
        $this->load->view('components/footer', $data);
    }

    public function confirm_terms()
    {
        $this->form_validation->set_rules('terms', 'Terms', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errorTerms', form_error('terms'));
            $this->session->set_flashdata('valueTerms', set_value('terms'));

            redirect($this->agent->referrer());
        } else {
            redirect(base_url('registration'));
        }
    }

    public function registration_program()
    {
        $data['title']          = "Registration";
        $data['getOccupation']  = $this->M_Global->get_result("Occupation")->result_array();
        $data['getYears']       = array_replace_recursive(array_combine(range(date("Y"), 1980), range(date("Y"), 1980)));
        $data['getQuota']       = $this->M_Global->globalquery("SELECT * FROM Schedule WHERE Year = '2023' ")->result_array();
        $data['testimonial']    = $this->M_Custom->testimonial();

        sleep(1);

        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view('components/sidebar', $data);
        $this->load->view('show-case-page/registration-page', $data);
        $this->load->view('components/footer', $data);
    }

    public function action_registration()
    {
        $uploadImage            = $_FILES['image']['name'];
        $uploadFile             = $_FILES['letter']['name'];

        $this->form_validation->set_rules('fullName', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('mobilePhone', 'Mobile Phone', 'required|trim');
        $this->form_validation->set_rules('hospitalName', 'Hospital Name', 'required|trim');
        $this->form_validation->set_rules('roomDepartment', 'Room Department', 'required|trim');
        $this->form_validation->set_rules('occupation', 'Occupation', 'required|trim');
        $this->form_validation->set_rules('universityGeneral', 'University Name', 'required|trim');
        $this->form_validation->set_rules('graduationGeneral', 'Year of Graduation', 'required');
        $this->form_validation->set_rules('typeSpecialist', 'Type of Specialist', 'required|trim');
        $this->form_validation->set_rules('universitySpecialist', 'University Name', 'required|trim');
        $this->form_validation->set_rules('graduationSpecialist', 'Year of Graduation', 'required');
        $this->form_validation->set_rules('fullAddress', 'Full Address', 'required|trim');
        $this->form_validation->set_rules('schedule', 'Timetable', 'required');

        if (empty($uploadImage) && empty($uploadFile)) {
            $this->form_validation->set_rules('image', 'Profile Photo', 'required');
            $this->form_validation->set_rules('letter', 'Employment Letter', 'required');
        }

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errorFullName', form_error('fullName', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorEmail', form_error('email', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorMobilePhone', form_error('mobilePhone', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorHospitalName', form_error('hospitalName', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorRoomDepartment', form_error('roomDepartment', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorOccupation', form_error('occupation', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorUniversityGeneral', form_error('universityGeneral', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorGraduationGeneral', form_error('graduationGeneral', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorTypeSpecialist', form_error('typeSpecialist', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorUniversitySpecialist', form_error('universitySpecialist', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorGraduationSpecialist', form_error('graduationSpecialist', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorFullAddress', form_error('fullAddress', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorSchedule', form_error('schedule', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorPhotoProfile', form_error('image', '<small class="text-danger">', '</small>'));
            $this->session->set_flashdata('errorEmploymentLetter', form_error('letter', '<small class="text-danger">', '</small>'));

            // set value
            $this->session->set_flashdata('valueFullName', set_value('fullName'));
            $this->session->set_flashdata('valueEmail', set_value('email'));
            $this->session->set_flashdata('valueMobilePhone', set_value('mobilePhone'));
            $this->session->set_flashdata('valueHospitalName', set_value('hospitalName'));
            $this->session->set_flashdata('valueRoomDepartment', set_value('roomDepartment'));
            $this->session->set_flashdata('valueOccupation', set_value('occupation'));
            $this->session->set_flashdata('valueUniversityGeneral', set_value('universityGeneral'));
            $this->session->set_flashdata('valueGraduationGeneral', set_value('graduationGeneral'));
            $this->session->set_flashdata('valueTypeSpecialist', set_value('typeSpecialist'));
            $this->session->set_flashdata('valueUniversitySpecialist', set_value('universitySpecialist'));
            $this->session->set_flashdata('valueFullAddress', set_value('fullAddress'));
            $this->session->set_flashdata('valueSchedule', set_value('schedule'));
            $this->session->set_flashdata('valueImage', set_value('image', 'image'));

            redirect($this->agent->referrer());
        } else {
            $fullName               = $this->input->post("fullName", true);
            $email                  = $this->input->post("email", true);
            $mobilePhone            = $this->input->post("mobilePhone", true);
            $hospitalName           = $this->input->post("hospitalName", true);
            $roomDepartment         = $this->input->post("roomDepartment", true);
            $occupation             = $this->input->post("occupation", true);
            $universityGeneral      = $this->input->post("universityGeneral", true);
            $graduationGeneral      = $this->input->post("graduationGeneral", true);
            $typeSpecialist         = $this->input->post("typeSpecialist", true);
            $universitySpecialist   = $this->input->post("universitySpecialist", true);
            $graduationSpecialist   = $this->input->post("graduationSpecialist", true);
            $fullAddress            = $this->input->post("fullAddress", true);
            $month                  = $this->input->post("schedule", true);

            //Terlebih dahulu kita trim dl
            $mobilePhone = trim($mobilePhone);
            //bersihkan dari karakter yang tidak perlu
            $mobilePhone = strip_tags($mobilePhone);
            // Berishkan dari spasi
            $mobilePhone = str_replace(" ", "", $mobilePhone);
            // bersihkan dari bentuk seperti  (022) 66677788
            $mobilePhone = str_replace("(", "", $mobilePhone);
            // bersihkan dari format yang ada titik seperti 0811.222.333.4
            $mobilePhone = str_replace(".", "", $mobilePhone);

            //cek apakah mengandung karakter + dan 0-9
            if (!preg_match('/[^+0-9]/', trim($mobilePhone))) {
                // cek apakah no hp karakter 1-3 adalah +62
                if (substr(trim($mobilePhone), 0, 3) == '+62') {
                    $mobilePhone = trim($mobilePhone);
                }
                // cek apakah no hp karakter 1 adalah 0
                elseif (substr($mobilePhone, 0, 1) == '0') {
                    $mobilePhone = '+62' . substr($mobilePhone, 1);
                }

                // cek apakah no hp karakter 1 adalah +
                elseif (substr($mobilePhone, 0, 1) == '+') {
                    $mobilePhone = '' . substr($mobilePhone, 1);
                }
            }

            // profile photo
            $config['upload_path']          = 'assets/dist/img/profile';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 5120;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                $error      = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data       = array('upload_data' => $this->upload->data());
                $newImage   = $data['upload_data']['file_name'];
            }

            // file employment letter
            $config['upload_path']          = 'assets/website/images/banner-slider';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 5120;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('letter')) {
                $error      = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data       = array('upload_data' => $this->upload->data());
                $newFile    = $data['upload_data']['file_name'];
            }


            $biodata = [
                "FullName"              => $fullName,
                "Email"                 => $email,
                "Phone"                 => $mobilePhone,
                "HospitalName"          => $hospitalName,
                "RoomDept"              => $roomDepartment,
                "OccupationID"          => $occupation,
                "UniversityGeneral"     => $universityGeneral,
                "GraduationGeneral"     => $graduationGeneral,
                "TypeSpecialist"        => $typeSpecialist,
                "UniversitySpecialist"  => $universitySpecialist,
                "GraduationSpecialist"  => $graduationSpecialist,
                "Address"               => $fullAddress,
                "ProfilePhoto"          => $newImage,
                "EmploymentLetter"      => $newFile,
            ];
            $createBiodata  = $this->M_Global->insert_with_id($biodata, 'User');

            $cekQuota       = $this->M_Global->globalquery("SELECT * FROM Schedule WHERE Month = '$month' AND Year = '2023' ")->result_array()[0];
            $tambahQuota    = $cekQuota['Quota'] + 1;

            $timeTable = [
                'Quota'     => $tambahQuota,
                'Year'      => "2023"
            ];
            $this->M_Global->update_data("Month = '$month' ", $timeTable, "Schedule");

            $dataPivot = [
                "UserID"        => $createBiodata,
                "ScheduleID"    => $cekQuota['ScheduleID']
            ];
            $this->M_Global->insert($dataPivot, "SchedulePivot");

            $dtime = date("Y-m-d H:i:s");

            $dataPayment = [
                "UserID"        => $createBiodata,
                "PaymentNumber" => $this->M_Global->payment_number(),
                "Total"         => 10000,
                "PaymentDate"   => $dtime,
                "StatusPayment" => 1
            ];
            $paymentId      = $this->M_Global->insert_with_id($dataPayment, "Payment");

            $this->confirmation($paymentId);
        }
    }

    private function confirmation($paymentId)
    {
        $dataPeserta    = $this->M_Global->globalquery("SELECT * FROM Payment 
            LEFT JOIN User ON Payment.UserID = User.UserID
            WHERE PaymentID = '$paymentId' ")->result_array()[0];

        $targetPath     = '/checkout/v1/payment';
        $dateNow        = date("H:i:s");
        $requestId      = $dataPeserta['PaymentNumber'];
        $dateTime       = gmdate("Y-m-d H:i:s");
        $isoDateTime    = date(DATE_ISO8601, strtotime($dateTime));
        $dateTimeFinal  = substr($isoDateTime, 0, 19) . "Z";

        $data =  [
            "order" => [
                "amount"            => 10000,
                "invoice_number"    => $requestId
            ],
            "payment" => [
                "payment_due_date"  => 60
            ],
            "customer" => [
                "name"              => $dataPeserta['FullName'],
                "email"             => $dataPeserta['Email'],
            ],
        ];
        $digestValue        = base64_encode(hash('sha256', json_encode($data), true));

        $componentSignature = "Client-Id:" . $this->clientId . "\n" .
            "Request-Id:" . $requestId . "\n" .
            "Request-Timestamp:" . $dateTimeFinal . "\n" .
            "Request-Target:" . $targetPath . "\n" .
            "Digest:" . $digestValue;

        $signature          = base64_encode(hash_hmac('sha256', $componentSignature, $this->secretKey, true));

        // Endpoint
        $url                = $this->API . $targetPath;
        $data_string        = json_encode($data);
        $ch                 = curl_init($url);

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
        $responseJson       = curl_exec($ch);
        $httpCode           = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $info               = curl_getinfo($ch);
        $getD               = json_decode($responseJson, true);

        if ($httpCode == 200) {
            $finalUrl           = $getD['response']['payment']['url'];
            $paymentID          = $getD['response']['order']['invoice_number'];

            $data['title']      = "Payment Confirmation";
            $data['finalDes']   = $finalUrl;
            $data['paymentId']  = $paymentID;

            sleep(1);

            $this->session->set_flashdata("message", "");

            $this->load->view('components/header', $data);
            $this->load->view('show-case-page/confirmation-page', $data);
            $this->load->view('components/footer', $data);
        } else {
            redirect(base_url('registration'));
        }
    }


    public function success()
    {

        $notificationHeader = getallheaders();
        $notificationBody   = file_get_contents('php://input');
        $arrRequestInput    = json_decode($notificationBody, true);

        $notificationPath   = '/showcase/success'; // Adjust according to your notification path
        $secretKey          = $this->secretKey; // Adjust according to your secret key
        $digest             = base64_encode(hash('sha256', $notificationBody, true));

        $rawSignature       = "Client-Id:" . $notificationHeader['Client-Id'] . "\n"
            . "Request-Id:" . $notificationHeader['Request-Id'] . "\n"
            . "Request-Timestamp:" . $notificationHeader['Request-Timestamp'] . "\n"
            . "Request-Target:" . $notificationPath . "\n"
            . "Digest:" . $digest;

        $signature          = base64_encode(hash_hmac('sha256', $rawSignature, $secretKey, true));
        $finalSignature     = 'HMACSHA256=' . $signature;
        $payNum             = $arrRequestInput['order']['invoice_number'];

        $this->M_Global->update("Payment", "StatusPayment = '2' WHERE PaymentNumber = '$payNum' ");

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 32; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $cekEmail = $this->M_Global->globalquery("SELECT * FROM Payment
        left join User on Payment.UserID = User.UserID
        WHERE PaymentNumber = '$payNum' ")->result_array()[0];


        $UserId = $cekEmail['UserID'];
        $email = $cekEmail['Email'];
        $fullname = $cekEmail['FullName'];
        $phone = $cekEmail['Phone'];
        $hospital = $cekEmail['HospitalName'];
        $paynumber = $cekEmail['PaymentNumber'];
        $token = $randomString;

        $this->M_Global->update("User", "Token = '$randomString' WHERE UserID = '$UserId' ");
        $this->offer($email, $fullname, $phone, $paynumber, $hospital, $token);
        $this->offer_admin($email, $fullname, $phone, $paynumber, $hospital, $token);
        $this->sendWazzap($email, $fullname, $phone, $paynumber, $hospital, $token, $UserId);
        $this->sendWazzapAdmin($email, $fullname, $phone, $paynumber, $hospital, $token, $UserId);
    }

    public function sendWazzap($email, $fullname, $phone, $paynumber, $hospital, $token, $UserId)
    {

        $cekMonth = $this->M_Global->globalquery("SELECT * FROM SchedulePivot
         left join Schedule on SchedulePivot.ScheduleID = Schedule.ScheduleID
         WHERE UserID = '$UserId' ")->result_array()[0];

        $url = 'https://multichannel.qiscus.com/whatsapp/v1/' . $this->appId . '/' . $this->channelId . '/messages';
        $year = date('Y');
        $data = [
            "to" => $phone,
            "type" => "template",
            "template" => [
                "namespace" => "698b5b4a_7ab2_4e31_957e_1aecacb06fe8",
                "name" => "update_payment_final",
                "language" => [
                    "policy" => "deterministic",
                    "code" => "id"
                ],
                "components" => [
                    [
                        "type" => "body",
                        "parameters" => [
                            [
                                "type" =>  "text",
                                "text" => $fullname
                            ],
                            [
                                "type" =>  "text",
                                "text" => "BICC - " . $cekMonth['Month'] . " - " . $cekMonth['Year']
                            ]

                        ],

                    ]
                ]
            ]
        ];

        $data_string  = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Qiscus-App-Id:' . $this->appId,
            'Qiscus-Secret-Key:' . $this->secretKeyWa,
        ));

        // Set response json
        $responseJson = curl_exec($ch);
        //$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $info = curl_getinfo($ch);
        print_r($responseJson);
        curl_close($ch);
    }


    public function sendWazzapAdmin($email, $fullname, $phone, $paynumber, $hospital, $token, $UserId)
    {

        $cekMonth = $this->M_Global->globalquery("SELECT * FROM SchedulePivot
        left join Schedule on SchedulePivot.ScheduleID = Schedule.ScheduleID
        WHERE UserID = '$UserId' ")->result_array()[0];

        $url = 'https://multichannel.qiscus.com/whatsapp/v1/' . $this->appId . '/' . $this->channelId . '/messages';
        $year = date('Y');
        $data = [
            "to" => "6282189803633",
            "type" => "template",
            "template" => [
                "namespace" => "698b5b4a_7ab2_4e31_957e_1aecacb06fe8",
                "name" => "update_payment_final",
                "language" => [
                    "policy" => "deterministic",
                    "code" => "id"
                ],
                "components" => [
                    [
                        "type" => "body",
                        "parameters" => [
                            [
                                "type" =>  "text",
                                "text" => $fullname
                            ],
                            [
                                "type" =>  "text",
                                "text" => "BICC - " . $cekMonth['Month'] . " - " . $cekMonth['Year']
                            ]

                        ],

                    ]
                ]
            ]
        ];

        $data_string  = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Qiscus-App-Id:' . $this->appId,
            'Qiscus-Secret-Key:' . $this->secretKeyWa,
        ));

        // Set response json
        $responseJson = curl_exec($ch);
        //$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $info = curl_getinfo($ch);
        print_r($responseJson);
        curl_close($ch);
    }

    public function offer($email, $fullname, $phone, $paynumber, $hospital, $token)
    {
        $data['title'] = "Perdici BICC";
        $this->load->view('components/header', $data);
        $data = array(
            'Email'                 => $email,
            'FullName'              => $fullname,
            'Phone'                 => $phone,
            'PaymentNumber'         => $paynumber,
            'Hospital'              => $hospital,
            'Token'                 => $token
        );

        $message = $this->load->view('show-case-page/offer', $data, true);
        $this->_sendemail($email, $message);
    }

    public function offer_admin($email, $fullname, $phone, $paynumber, $hospital, $token)
    {
        $data['title'] = "Perdici BICC";
        $this->load->view('components/header', $data);
        $data = array(
            'Email'                 => $email,
            'FullName'              => $fullname,
            'Phone'                 => $phone,
            'PaymentNumber'         => $paynumber,
            'Hospital'              => $hospital,
            'Token'                 => $token
        );

        $message = $this->load->view('show-case-page/offer', $data, true);

        $emailAdmin = 'infoperdici@yahoo.co.id';
        $this->_sendemailAdmin($emailAdmin, $message);
    }

    public function _sendemailAdmin($emailAdmin, $message)
    {
        $this->load->library('email');

        $config = [
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'perdicibicc.com',
            'smtp_user'     => 'no-reply@perdicibicc.com',
            'smtp_pass'     => 'CGGAPPAdmin02',
            'smtp_crypto'   => 'ssl',
            'smtp_port'     => 465,
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        ];
        $this->load->library('email', $config);

        $this->email->initialize($config);
        $this->email->from('no-reply@perdicibicc.com', 'BICC');
        $this->email->to($emailAdmin);
        $this->email->subject('Invoice BICC');
        $this->email->message($message);
        $this->email->send();
    }

    public function _sendemail($email, $message)
    {
        $this->load->library('email');

        $config = [
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'perdicibicc.com',
            'smtp_user'     => 'no-reply@perdicibicc.com',
            'smtp_pass'     => 'CGGAPPAdmin02',
            'smtp_crypto'   => 'ssl',
            'smtp_port'     => 465,
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        ];
        $this->load->library('email', $config);

        $this->email->initialize($config);
        $this->email->from('no-reply@perdicibicc.com', 'BICC');
        $this->email->to($email);
        $this->email->subject('Invoice BICC');
        $this->email->message($message);
        $this->email->send();
    }

    public function paymentStatusCheck()
    {
        $paymentID          = $this->input->post("id");
        $checkPaymentStatus = $this->M_Global->getmultiparam("Payment", "PaymentNumber = '$paymentID'")->row_array();
        $statusPayment      = $checkPaymentStatus['StatusPayment'];

        echo json_encode($statusPayment);
    }

    public function payment_success()
    {
        $data['title']  = "Payment Success";
        $segment        = $this->uri->segment(2);
        $decode         = base64_decode($segment);
        $urlDecode      = urldecode($decode);
        $paymentNumber  = $urlDecode;

        $data['getPayment'] = $this->M_Global->getmultiparam("Payment", "PaymentNumber = '$paymentNumber' ")->row_array();
        $userID             = $data['getPayment']['UserID'];
        $data['getUser']    = $this->M_Global->getmultiparam("User", "UserID = '$userID'")->row_array();

        $this->load->view('show-case-page/payment-success-page', $data);
    }
}

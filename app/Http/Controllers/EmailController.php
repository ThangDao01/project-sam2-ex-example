<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    //cài thằng này: composer require swiftmailer/swiftmailer
    public function ThankYouMail(Request $request)
    {
        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung');
        Mail::send('tool.mail', $data, function ($message) {
            $message->to('thangdao202@gmail.com', 'Đào Thắng')->subject
            ('Laravel HTML Testing Mail');
            $message->from('ek.englishforkid@gmail.com', 'EK');
        });
        return "Okie";
    }

    public function CheckingMail($salt, $email, $name)
    {
        $data = array('code_check' => $salt, 'name' => $name, 'email' => $email);
        Mail::send('tool.checking-mail', $data, function ($message) use ($name, $email) {
            $message->to($email, $name)->subject
            ('New EK Account Email Verification');
            $message->from('ek.englishforkid@gmail.com', 'E&K - Nơi dành cho trẻ bắt đầu học tiếng Anh');
        });
        return "Okie";
    }
}

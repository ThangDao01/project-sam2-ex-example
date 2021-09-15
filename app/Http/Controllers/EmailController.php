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

    public function ThankYouMail($email,$name)
    {
        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung');
        Mail::send('tool.mail', $data, function ($message) use ($name, $email) {
            $message->to($email,$name)->subject
            ('E&K - Cảm ơn đã sử dụng dịch vụ của chúng tôi');
            $message->from('ek.englishforkid@gmail.com', 'EK');
        });
        return true;
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

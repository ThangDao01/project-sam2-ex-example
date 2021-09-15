<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use App\Models\Article;
use App\Models\Config;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    static function getkeywordPage()
    {

        return trim(Config::all()->first()->pluck('keywordPage'),
            '["]');
    }
    static function getArticle(){
        $articles = Article::all();
        return $articles;
    }

    public function userLoginForm()
    {
        return view('user.login');
    }


    public function processLogin(Request $request)
    {
        $email = $request->get('Email');
        $password = $request->get('password');
        $salt = DB::table('accounts')->where('Email', $email)->value('Salt');
        $PasswordHash = DB::table('accounts')->where('Email', $email)->value('PasswordHash');
        if (Hash::check($password.$salt, $PasswordHash)) {
            // The passwords match...
            if (Session::has("account")){
                Session::pull("account");
            }
            $dataAccount = DB::table('accounts')->where('Email', $email)->first();
            Session::put("account",$dataAccount);
            $this->Visitors();
            return redirect('/');
        } else {
            Session::flash('message', 'Tài khoản hoặc mật khẩu không hợp lệ');
            Session::flash('type-message', 'error');
            return redirect('/login');
        }
    }
    public function userRegisterForm()
    {
        return view('user.register');
    }

    function incrementalHash()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $result = '';
        for ($i = 0; $i < 5; $i++)
            $result .= $characters[mt_rand(0, 61)];
        return $result;
    }

    public function UserRegister(AccountRequest $request)
    {
        $email = $request->get('Email');
        $accountCheck = DB::table('accounts')->where('Email', $email)->first();
        if ($accountCheck) {
            Session::flash('message', 'Invalid email try another email');
            Session::flash('type-message', 'danger');
            return redirect('/register');
        }
        $salt= $this->incrementalHash();
        $request->validated();
        $account = new Account();
        $account->Email = $email;
        $account->FirstName = $request->get('FirstName');
        $account->LastName = $request->get('LastName');
        $account->PhoneNumber = $request->get('PhoneNumber');
        $account->Salt = $salt;
        $account->Age = $request->get('Age');
        $account->Role = 2;
        $account->PasswordHash = Hash::make($request->get('password') . $account->Salt,[
            'rounds' => 12,
        ]);
        $account->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $account->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
//        return $account;
        $send_mail = new EmailController();
        $send_mail->ThankYouMail($email, $account->LastName);
        $account->save();
        Session::flash('message', 'Account successfully created Please Login to continue');
        Session::flash('type-message', 'success');
        return redirect('/login');
    }

}

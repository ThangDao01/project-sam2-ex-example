<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Config;
use App\Models\Course;
use App\Models\DataSupport;
use App\Models\FeedBack;
use App\Models\Lesson;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\String_;
use PhpParser\Node\Expr\Array_;
use voku\helper\ASCII;

class MainAdminController extends Controller
{
    //
    public function countUser()
    {
        return DB::table('accounts')->count();
    }

    public function countDataSupport()
    {
        return DB::table('data_supports')->count();
    }

    public function countCourse()
    {
        return DB::table('courses')->count();
    }

    public function countLesson()
    {
        return DB::table('lessons')->count();
    }
    public function getVote()
    {
        $vote = FeedBack::all()->pluck('Vote')->toArray();
        if ($vote){
            return round(array_sum($vote)/sizeof($vote),1);
        }
        return 0;
    }
    public function countVote()
    {
        $vote = FeedBack::all()->pluck('Vote')->toArray();
        return sizeof($vote);
    }
    public function countVisitors(){
        $visitor = Config::all()->first()->value('Visitors');
        return $visitor;
    }
    public function TestMail(){
        $send_mail = new EmailController();
        $send_mail->ThankYouMail('hackersupper04@gmail.com', 'Đào Thắng');
        return 1;

    }

    public function listLesson()
    {
        return Lesson::all();
    }

    public function listKey()
    {
        return DB::table('data_supports')
            ->select('key')
            ->distinct()->get();
    }
    public function listMaterial(){
        return Material::all();
    }

    public function testLinhTinh()
    {
        $vote = [20,20,18,20,20];
        $totalVote= array_sum($vote)/sizeof($vote);
        return $totalVote;

//        return view('material-template.matrix');
    }
}

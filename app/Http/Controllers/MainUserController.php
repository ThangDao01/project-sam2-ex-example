<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Article;
use App\Models\Course;
use App\Models\DataSupport;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainUserController extends Controller
{
    //
    public function getSeed(){
        $list = Account::all();
        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $date2=Carbon::now('Asia/Ho_Chi_Minh');
        return view('tool.seeder',[
            'list' => $list,
            'date' =>$date
        ]);
    }
    public function getCourse(){
        $obj = Course::all();
        return view('user.banggia',[
            'listCourse' => $obj
        ]);
    }
    public function getLessonByCourse($id)
    {
//        return $id;
//        return Lesson::all()->where('courseId', $id);
        return view('material.lesson-view', ['listLesson' => Lesson::all()->where('courseId', $id)]);
    }

    public function articleDetail($url){
//        $description = DB::table('articles')->where('url', $url)->first();
        $description = new Article();
        $description->title= 'abc';
        $description->Detail='      <section class="monkey-bg-white new-wrapper">
        <div class="title style-title monkey-fz-30 monkey-f-bold">
        Ph&aacute;t &acirc;m chuẩn Anh Mỹ ngay từ đầu c&ugrave;ng E&K
        </div>
        <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
        <ul class="list-inline">
        <li class="list-inline-item">06/01/2018</li>
        <li class="list-inline-item ml-4">
        <span> 4009 </span> Lượt xem
        </li>
        </ul>
        <div class="button-share mb-3 d-desktop">
        </div>
        </div>
        <div class="new-body">
        <div class="mb-3">
        <p style="text-align: justify;"><span style="line-height:2;"><strong>Một trong những vấn đề lớn nhất trẻ em Việt Nam gặp phải khi học tiếng Anh ch&iacute;nh l&agrave; việc ph&aacute;t &acirc;m sai do kh&ocirc;ng c&oacute; m&ocirc;i trường r&egrave;n luyện tiếng Anh chuẩn. Với E&K, b&eacute; sẽ ph&aacute;t &acirc;m chuẩn ngay từ khi bắt đầu học với c&aacute;c audio do ch&iacute;nh người bản xứ đọc.</strong></span></p>
        </div>
        <h1><span style="font-size:20px;"><strong>Những vấn đề trẻ gặp khi ph&aacute;t &acirc;m kh&ocirc;ng chuẩn&nbsp;</strong></span></h1>

        <p style="text-align: justify;"><span style="line-height:2;">Với m&ocirc;i trường học tập ng&ocirc;n ngữ tại Việt Nam hiện nay, kh&ocirc;ng phải trường lớp n&agrave;o cũng c&oacute; gi&aacute;o vi&ecirc;n người bản xứ, v&agrave; kh&ocirc;ng phải ba mẹ n&agrave;o cũng đủ điều kiện để cho con học những trường như vậy. Do đ&oacute;, phần lớn c&aacute;c b&eacute; kh&ocirc;ng được học ph&aacute;t &acirc;m chuẩn, dễ bị lai tạp. Dần dần, điều n&agrave;y h&igrave;nh th&agrave;nh th&oacute;i quen rất kh&oacute; sửa.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Việc b&eacute; kh&ocirc;ng ph&aacute;t &acirc;m chuẩn c&oacute; thể ảnh hưởng đến kỹ năng nghe, viết tiếng Anh của b&eacute; sau n&agrave;y. V&iacute; dụ: khi b&eacute; ph&aacute;t &acirc;m chuẩn từ &ldquo;Pen" (c&aacute;i b&uacute;t) th&agrave;nh &ldquo;Ben" (T&ecirc;n người), khi nghe trong 1 đoạn hội thoại b&eacute; c&oacute; thể kh&ocirc;ng biết hoặc kh&ocirc;ng hiểu từ đ&oacute;. Hoặc khi b&eacute; viết từ c&oacute; thể viết sai &ldquo;pen" th&agrave;nh &ldquo;ben".&nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">B&ecirc;n cạnh đ&oacute;, việc ph&aacute;t &acirc;m kh&ocirc;ng chuẩn sẽ khiến b&eacute; trở n&ecirc;n tự ti khi giao tiếp với bạn b&egrave; quốc tế hoặc c&aacute;c bạn n&oacute;i tiếng Anh chuẩn. Điều n&agrave;y c&oacute; thể l&agrave; trở ngại ph&aacute;t triển bản th&acirc;n của trẻ sau n&agrave;y. Ch&iacute;nh v&igrave; vậy, việc r&egrave;n luyện cho c&aacute;c b&eacute; ph&aacute;t &acirc;m tiếng Anh chuẩn ngay từ nhỏ l&agrave; v&ocirc; c&ugrave;ng quan trọng.</span></p>

        <h1 style="text-align: justify;"><strong><span style="font-size:20px;">Ph&aacute;t &acirc;m chuẩn bản xứ ngay từ đầu c&ugrave;ng E&K</span></strong></h1>

        <p style="text-align: justify;"><span style="line-height:2;">Hiểu được tầm quan trọng của việc ph&aacute;t &acirc;m tiếng Anh chuẩn ngay từ nhỏ của trẻ, ngay từ những ng&agrave;y đầu x&acirc;y dựng chương tr&igrave;nh, đội ngũ E&K đ&atilde; lu&ocirc;n ch&uacute; trọng đầu tư v&agrave;o c&aacute;c audio ph&aacute;t &acirc;m. 100% audio của ứng dụng n&agrave;y đều do người bản xứ đọc v&agrave; được c&aacute;c chuy&ecirc;n gia ng&ocirc;n ngữ h&agrave;ng đầu Hoa Kỳ kiểm duyệt chất lượng.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Giọng đọc trong ứng dụng rất đa dạng từ giọng nam, nữ, giọng người gi&agrave;, trẻ em&hellip; gi&uacute;p trẻ c&oacute; thể nghe v&agrave; hiểu từ đ&oacute; ở c&aacute;c giọng, c&aacute;c ho&agrave;n cảnh kh&aacute;c nhau. Những giọng đọc bản xứ n&agrave;y tạo m&ocirc;i trường &ldquo;tắm ng&ocirc;n ngữ&rdquo; chuẩn thường xuy&ecirc;n cho trẻ. C&aacute;c audio ph&aacute;t &acirc;m chuẩn từ E&K l&agrave; "đầu v&agrave;o" cần thiết v&agrave; quan trọng để trẻ c&oacute; "đầu ra" ph&aacute;t &acirc;m chuẩn, ngữ điệu tự nhi&ecirc;n như trẻ bản xứ.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Kh&ocirc;ng cần bố mẹ biết tiếng Anh, cũng kh&ocirc;ng cần sống trong một m&ocirc;i trường to&agrave;n những người n&oacute;i tiếng Anh, với E&K, trẻ ho&agrave;n to&agrave;n c&oacute; thể ph&aacute;t &acirc;m chuẩn bản xứ chỉ với 15 ph&uacute;t chơi m&agrave; học mỗi ng&agrave;y. </strong></em></span></p>

        <p><span style="line-height:2;"><em><strong>Ch&uacute;c ba mẹ v&agrave; b&eacute; c&oacute; những ph&uacute;t gi&acirc;y học tập c&ugrave;ng E&K thật vui vẻ v&agrave; hiệu quả!</strong></em></span></p>

        <p class="clearfix">
        </p>
        </div>

        </section>';
        return view('user.article',[
            'description' =>$description
        ]);
    }

    public function whatIsThis($id)
    {
        $main = DataSupport::find($id);
        $idKey = DataSupport::where('key', $main->key)->get();
        $min = DataSupport::where('key', $main->key)->first()->id;
        $max = $min + sizeof($idKey) - 1;
        $data1ID = rand($min, $max);
        $data2ID = rand($min, $max);
//tạo 2 id random không trùng
        do {
            $data1ID = rand($min, $max);
        } while ($data1ID == $id);
        do {
            $data2ID = rand($min, $max);
        } while ($data2ID == $id || $data2ID == $data1ID);

// tạo 2 dữ liệu mẫu
        $data1 = DataSupport::find($data1ID);
        $data2 = DataSupport::find($data2ID);

// random không trùng đáp án ABC
        $lc1 = rand(1, 3);
        $lc2 = rand(1, 3);
        $lc3 = rand(1, 3);
        do {
            $lc2 = rand(1, 3);
        } while ($lc1 == $lc2);
        do {
            $lc3 = rand(1, 3);
        } while ($lc3 == $lc1 || $lc3 == $lc2);
        $listData[$lc1] = $main;
        $listData[$lc2] = $data1;
        $listData[$lc3] = $data2;

        $listDataM = array($listData[1], $listData[2], $listData[3]);
//        return $listData;
        return view('material-template.what-is-this', [
            'list' => $listDataM,
            'main' => $main
        ]);
    }
    public function listening($id)
    {
        $main = DataSupport::find($id);

        return view('material-template.listening', [
            'main' => $main
        ]);
    }
    public function video($id)
    {
        $main = DataSupport::find($id);
        return view('material-template.video', [
            'main' => $main
        ]);
    }

    public function whereIsThe($id)
    {
        $main = DataSupport::find($id);
        $idKey = DataSupport::where('key', $main->key)->get();
        $min = DataSupport::where('key', $main->key)->first()->id;
        $max = $min + sizeof($idKey) - 1;
        $data1ID = rand($min, $max);
        $data2ID = rand($min, $max);
//tạo 2 id random không trùng
        do {
            $data1ID = rand($min, $max);
        } while ($data1ID == $id);
        do {
            $data2ID = rand($min, $max);
        } while ($data2ID == $id || $data2ID == $data1ID);
// tạo 2 dữ liệu mẫu
        $data1 = DataSupport::find($data1ID);
        $data2 = DataSupport::find($data2ID);

// random không trùng đáp án ABC
        $lc1 = rand(1, 3);
        $lc2 = rand(1, 3);
        $lc3 = rand(1, 3);
        do {
            $lc2 = rand(1, 3);
        } while ($lc1 == $lc2);
        do {
            $lc3 = rand(1, 3);
        } while ($lc3 == $lc1 || $lc3 == $lc2);

        $listData[$lc1] = $main;
        $listData[$lc2] = $data1;
        $listData[$lc3] = $data2;

        $listDataM = array($listData[1], $listData[2], $listData[3]);
//        return $listData;
        return view('material-template.where-is-the', [
            'list' => $listDataM,
            'main' => $main
        ]);
    }


    public function getMaterialView($id,$lc){
        $lesson = Lesson::all()->where('id',$id);
        $lesson->listMaterialId = 1;
        $main = DataSupport::find($lesson->listMaterialId);
        switch ($lc){
            case 1:
                return $this->whereIsThe($main->id);
                break;
            case 2:
                return $this->whatIsThis($main->id);
                break;
            case 3:
                return $this->video($main->id);
                break;
            case 4:
                return $this->listening($main->id);
                break;
            default:
                return 'null';
        }
    }

}

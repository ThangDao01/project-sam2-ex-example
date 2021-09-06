<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('data_supports')->insert([
            [
                'url' => 'phat-am-chuan-anh-my-ngay-tu-dau-cung-monkey-junior',
                'categories' => 'loiich',
                'title' => 'Phát âm chuẩn Anh Mỹ ngay từ đầu cùng E&K',
                'Detail' => '        <section class="monkey-bg-white new-wrapper">
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

        </section>
',
                'Author' => 'hòa',
                'created_at' => '2021-09-06 16:26:04',
                'updated_at' => '2021-09-06 16:26:04'
            ],
            [
                'url' => '',
                'categories' => 'loiich',
                'title' => 'Học lượng từ vựng khổng lồ ngay tại nhà cùng E&K',
                'Detail' => '        <section class="monkey-bg-white new-wrapper">
        <div class="title style-title monkey-fz-30 monkey-f-bold">
        Học lượng từ vựng khổng lồ ngay tại nh&agrave; c&ugrave;ng E&amp;K
        </div>
        <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
        <ul class="list-inline">
        <li class="list-inline-item">06/01/2018</li>
        <li class="list-inline-item ml-4">
        <span> 9976 </span> Lượt xem
        </li>
        </ul>
        </div>
        <div class="new-body">
        <div class="mb-3">
        <p style="text-align: justify;"><span style="line-height:2;"><strong>Với nền tảng l&agrave; kho từ vựng v&agrave; mẫu c&acirc;u khổng lồ, E&amp;K tự tin khẳng định gi&uacute;p trẻ t&iacute;ch lũy v&agrave; tư duy trực diện hơn 3,000 từ vựng, 6,000 mẫu c&acirc;u thuộc nhiều chủ đề tiếng Anh trong giai đoạn đầu tiếp x&uacute;c, tạo nền tảng vững v&agrave;ng để trẻ c&oacute; thể học l&ecirc;n c&aacute;c tr&igrave;nh độ cao hơn của ng&ocirc;n ngữ n&agrave;y. B&ecirc;n cạnh đ&oacute;, E&amp;K c&oacute; thể học linh hoạt mọi l&uacute;c, mọi nơi.</strong></span></p>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" style="width: 100%;">
        <tbody>
        <tr>
        <td style="text-align: center;"><strong>Nội dung ch&iacute;nh</strong></td>
        </tr>
        <tr>
        <td><a href="#phan-1-loiich">1. T&iacute;ch luỹ kho từ vựng v&agrave; mẫu c&acirc;u tiếng Anh đồ sộ với nhiều chủ đề&amp;nbsp;</a></td>
        </tr>
        <tr>
        <td><a href="#phan-2-loiich">2.&amp;nbsp;R&egrave;n kỹ năng tư duy trực diện ngay từ nhỏ&amp;nbsp;</a></td>
        </tr>
        <tr>
        <td><a href="#phan-3-loiich">3.&amp;nbsp;Linh hoạt học tập mọi l&uacute;c, mọi nơi</a></td>
        </tr>
        </tbody>
        </table>
        </div>

        <p style="text-align: justify;"><a id="phan-1-loiich" name="phan-1-loiich"><strong><span style="font-size:20px;">T&iacute;ch luỹ kho từ vựng v&agrave; mẫu c&acirc;u tiếng Anh đồ sộ</span></strong></a></p>

        <p style="text-align: justify;"><span style="line-height:2;">E&amp;K được x&acirc;y dựng với kho từ vựng khổng lồ hơn 18.000 từ vựng phổ biến, 40.000 c&acirc;u cho cả 6 ng&ocirc;n ngữ. Trong đ&oacute;, ri&ecirc;ng ng&ocirc;n ngữ tiếng Anh (Anh - Mỹ)&amp;nbsp;c&oacute; hơn 3.000 từ vựng v&agrave; 6.000 mẫu c&acirc;u thuộc 48 chủ đề trong cuộc sống. Nhờ đ&oacute;, trẻ sẽ t&iacute;ch luỹ được vốn từ đồ sộ, x&acirc;y dựng một nền tảng vững chắc để trẻ &aacute;p dụng v&agrave;o cuộc sống hoặc học s&acirc;u hơn về ng&ocirc;n ngữ sau n&agrave;y.&amp;nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">C&aacute;c từ vựng trong E&amp;K đ&atilde; được nghi&ecirc;n cứu để lặp lại c&oacute; hệ thống v&agrave; khoa học trong c&aacute;c b&agrave;i học của E&amp;K, do đ&oacute;, ba mẹ ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m cho b&eacute; học mỗi b&agrave;i 1 lần m&agrave; kh&ocirc;ng sợ con học c&aacute;c b&agrave;i sau qu&ecirc;n b&agrave;i trước.</span></p>

        <h1 style="text-align: justify;"><a id="phan-2-loiich" name="phan-2-loiich"><strong><span style="font-size:20px;">R&egrave;n kỹ năng tư duy trực diện ngay từ nhỏ&amp;nbsp;</span></strong></a></h1>

        <p style="text-align: justify;"><span style="line-height:2;">Nhiều ba mẹ đ&atilde; nhắn tin tới Bộ phận Chăm s&oacute;c Kh&aacute;ch h&agrave;ng của Monkey thắc mắc: &ldquo;Tại sao E&amp;K kh&ocirc;ng c&oacute; phần dịch sang tiếng Việt, liệu b&eacute; học tiếng Anh suốt như vậy c&oacute; hiểu được kh&ocirc;ng?&rdquo; Về c&acirc;u hỏi n&agrave;y, ba mẹ c&oacute; thể ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m v&igrave; E&amp;K định nghĩa c&aacute;c từ vựng bằng h&igrave;nh ảnh, &acirc;m thanh v&agrave; video nhờ đ&oacute;, b&eacute; c&oacute; thể ho&agrave;n to&agrave;n hiểu nghĩa trực tiếp c&aacute;c từ m&agrave; kh&ocirc;ng cần phải dịch sang một ng&ocirc;n ngữ kh&aacute;c như tiếng Việt. Việc tư duy trực diện n&agrave;y sẽ gi&uacute;p trẻ sử dụng ng&ocirc;n ngữ thuần thục v&agrave; nhanh hơn, kh&ocirc;ng gặp nhiều trở ngại như rất nhiều người Việt Nam khi học tiếng Anh v&igrave; tiếp cận muộn, bị tư duy tiếng mẹ đẻ chi phối nhiều.</span></p>

        <h1 style="text-align: justify;"><a id="phan-3-loiich" name="phan-3-loiich"><strong><span style="font-size:20px;">Linh hoạt học tập mọi l&uacute;c, mọi nơi</span></strong></a></h1>

        <p style="text-align: justify;"><span style="line-height:2;">Một trong những lợi &iacute;ch học E&amp;K l&agrave; b&eacute; c&oacute; thể học mọi l&uacute;c, mọi nơi trong mọi thời điểm v&igrave; ứng dụng học tập n&agrave;y c&oacute; thể sử dụng linh hoạt tr&ecirc;n c&aacute;c thiết bị di động như điện thoại th&ocirc;ng minh (smartphone), m&aacute;y t&iacute;nh bảng (tablet/ iPad) hay m&aacute;y t&iacute;nh x&aacute;ch tay (laptop). B&ecirc;n cạnh đ&oacute;, ba mẹ chỉ cần tải b&agrave;i học về v&agrave; tắt mạng để b&eacute; học ở chế độ ngoại tuyến (offline), th&iacute;ch hợp cho những khu vực kh&ocirc;ng c&oacute; mạng hoặc mạng k&eacute;m, kh&ocirc;ng ổn định.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Học c&ugrave;ng E&amp;K, ba mẹ kh&ocirc;ng cần mất một khoản tiền lớn để con tới c&aacute;c trung t&acirc;m tiếng Anh. B&eacute; chỉ cần một thiết bị th&ocirc;ng minh v&agrave; sự đồng h&agrave;nh của ba mẹ tại nh&agrave; l&agrave; c&oacute; thể được tiếp cận với kho từ vựng v&agrave; mẫu c&acirc;u đồ sộ từ E&amp;K.&amp;nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Điều quan trọng nhất m&agrave; c&aacute;c chuy&ecirc;n gia E&amp;K lu&ocirc;n muốn nhắc ba mẹ:</strong></em> Ở giai đoạn n&agrave;y, sự đồng h&agrave;nh của ba mẹ l&agrave; v&ocirc; c&ugrave;ng quan trọng. Ba mẹ h&atilde;y d&agrave;nh thời gian đọc kỹ Hướng dẫn học E&amp;K, sắp xếp để d&agrave;nh thời gian ngồi học c&ugrave;ng con, trao đổi v&agrave; khuyến kh&iacute;ch con tương t&aacute;c với b&agrave;i học để con đạt được lợi &iacute;ch tốt nhất khi học E&amp;K ba mẹ nh&eacute;!</span></p>

        <p style="text-align: justify;"><strong><span style="line-height:2;">Ch&uacute;c ba mẹ v&agrave; c&aacute;c b&eacute; c&oacute; những khoảng thời gian học E&amp;K thật vui v&agrave; hiệu quả. Cảm ơn ba mẹ đ&atilde; c&ugrave;ng Monkey bồi dưỡng những bạn nhỏ hiểu biết v&agrave; hạnh ph&uacute;c! </span></strong></p>

        <p>&amp;nbsp;</p>
        </div>
        </section>
',
                'Author' => 'hòa',
                'created_at' => '2021-09-06 16:49:53',
                'updated_at' => '2021-09-06 16:49:53'
            ],
            [
                'url' => '',
                'categories' => 'loiich',
                'title' => 'Lộ trình học bài bản của E&K giúp tối ưu thời gian học và giúp bé học hiệu quả hơn',
                'Detail' => '        <section class="monkey-bg-white new-wrapper">
        <div class="title style-title monkey-fz-30 monkey-f-bold">
        Lộ tr&igrave;nh học b&agrave;i bản của E&amp;K gi&uacute;p tối ưu thời gian học v&agrave; gi&uacute;p b&eacute; học hiệu quả hơn
        </div>
        <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
        <ul class="list-inline">
        <li class="list-inline-item">03/08/2018</li>
        <li class="list-inline-item ml-4">
        <span> 4003 </span> Lượt xem
        </li>
        </ul>
        </div>
        <div class="new-body">
        <div class="mb-3">
        <p style="text-align: justify;"><strong><span style="line-height:2;">C&aacute;c chuy&ecirc;n gia của E&amp;K đ&atilde; nghi&ecirc;n cứu về sự ghi nhớ của n&atilde;o bộ trẻ để x&acirc;y dựng một chương tr&igrave;nh học b&agrave;i bản với lộ tr&igrave;nh học r&otilde; r&agrave;ng, nhờ đ&oacute; trẻ học tập, ghi nhớ c&aacute;c từ vựng v&agrave; mẫu c&acirc;u hiệu quả hơn trong khoảng thời gian tối ưu nhất.</span></strong></p>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" style="width: 100%;">
        <tbody>
        <tr>
        <td style="text-align: center;"><span style="line-height:2;"><strong>Nội dung ch&iacute;nh</strong></span></td>
        </tr>
        <tr>
        <td style="text-align: justify;"><a href="#phan-1-tri-nho"><span style="line-height:2;">1.&amp;nbsp;Đặc điểm tr&iacute; nhớ của trẻ nhỏ&amp;nbsp;</span></a></td>
        </tr>
        <tr>
        <td style="text-align: justify;"><a href="#Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học"><span style="line-height:2;">2.&amp;nbsp;Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học</span></a></td>
        </tr>
        </tbody>
        </table>

        <h1><a id="phan-1-tri-nho" name="phan-1-tri-nho"><span style="font-size:20px;"><strong>Đặc điểm tr&iacute; nhớ của trẻ nhỏ</strong></span></a></h1>

        <p><span style="line-height:2;">Đặc điểm tr&iacute; nhớ của trẻ nhỏ rất kh&aacute;c so với người trưởng th&agrave;nh. Những điều ch&uacute;ng ta cho l&agrave; rất đơn giản c&oacute; thể l&agrave; những thứ rất kh&oacute; đối với trẻ, v&agrave; ngược lại. Sau một qu&aacute; tr&igrave;nh d&agrave;i nghi&ecirc;n cứu v&agrave; quan s&aacute;t, c&aacute;c nh&agrave; gi&aacute;o dục đ&atilde; chỉ ra rằng: Đối với trẻ nhỏ, thứ kh&oacute; học nhất kh&ocirc;ng phải l&agrave; những thứ phức tạp, s&acirc;u sắc hay cao si&ecirc;u, m&agrave; l&agrave; thứ kh&ocirc;ng mang lại hứng th&uacute; khi học. Thứ dễ học nhất kh&ocirc;ng phải l&agrave; những thứ người lớn cho l&agrave; đơn giản, m&agrave; l&agrave; những thứ đem lại niềm vui v&agrave; hứng th&uacute; cho trẻ.<br>
        Nguy&ecirc;n tắc quan trọng nhất trong việc dạy cho con trẻ, đặc biệt giai đoạn 0-6 tuổi, l&agrave; cần ưu ti&ecirc;n sự hứng th&uacute; của trẻ. Sự hứng th&uacute; của trẻ giống như một ch&igrave;a kh&oacute;a vạn năng, sẽ gi&uacute;p trẻ mở mọi c&aacute;nh cửa dẫn đến tri thức. Một khi đ&atilde; th&iacute;ch, đối với trẻ, mọi thứ đều dễ như nhau.</span></p>
        </div>

        <p style="text-align: justify;"><span style="line-height:2;">Vậy khi trẻ đ&atilde; hứng th&uacute;, điều g&igrave; sẽ khiến trẻ ghi nhớ tốt b&agrave;i học? Đ&oacute; ch&iacute;nh l&agrave; việc lặp đi lặp lại. Ghi nhớ l&agrave; một qu&aacute; tr&igrave;nh kh&ocirc;ng ngừng củng cố của n&atilde;o bộ; số lần lặp lại c&agrave;ng nhiều, thời gian ghi nhớ c&agrave;ng d&agrave;i l&acirc;u. Đặc biệt, kh&aacute;c với n&atilde;o bộ người lớn, năng lực đặc biệt của trẻ em từ 0-6 tuổi l&agrave; &ldquo;tr&iacute; nhớ m&aacute;y m&oacute;c&rdquo; hay &ldquo;tr&iacute; nhớ nguy&ecirc;n mảng&rdquo;. Ba mẹ c&oacute; thể lo &ldquo;con đ&atilde; biết g&igrave; đ&acirc;u, con kh&ocirc;ng hiểu th&igrave; học thế n&agrave;o&rdquo;. Nhưng thực ra, ở độ tuổi n&agrave;y, trẻ kh&ocirc;ng ghi nhớ tr&ecirc;n cơ sở hiểu nghĩa, hiểu mối li&ecirc;n hệ, ph&acirc;n chia nội dung b&agrave;i học theo logic như người lớn, thay v&agrave;o đ&oacute;, chỉ cần cho trẻ tiếp x&uacute;c với một số lần nhất định, trẻ sẽ kh&ocirc;ng chủ định m&agrave; ghi nhớ nội dung được học. &ldquo;Ghi nhớ m&aacute;y m&oacute;c&rdquo; thậm ch&iacute; chiếm ưu thế cho đến cả những năm đầu ti&ecirc;n khi con v&agrave;o cấp 1.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Tuy nhi&ecirc;n, cần nhớ rằng, hiệu quả của việc ghi nhớ c&ograve;n phụ thuộc v&agrave;o nhiều yếu tố như mức độ tập trung của trẻ khi tiếp x&uacute;c hay hứng th&uacute; của trẻ như đ&atilde; ph&acirc;n t&iacute;ch ở phần tr&ecirc;n. Việc nhắc lại l&agrave; cần thiết để gi&uacute;p trẻ ghi nhớ, nhưng sự nhắc lại đ&oacute; sẽ th&agrave;nh phản t&aacute;c dụng nếu khiến cho trẻ kh&ocirc;ng hứng th&uacute;.</span></p>

        <h1 style="text-align: justify;"><a id="Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học" name="Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học"><span style="font-size:20px;"><strong>Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học</strong></span></a></h1>

        <p style="text-align: justify;"><span style="line-height:2;">Tr&ecirc;n cơ sở những nghi&ecirc;n cứu về đặc điểm t&acirc;m l&yacute; v&agrave; đặc điểm tr&iacute; nhớ của trẻ nhỏ, cũng như với mong muốn gi&uacute;p đa số ba mẹ c&oacute; thể &aacute;p dụng theo một c&aacute;ch dễ d&agrave;ng, E&amp;K được c&aacute;c chuy&ecirc;n gia về gi&aacute;o dục sớm x&acirc;y dựng c&aacute;c b&agrave;i học nhằm đảm bảo &iacute;t nhất hai yếu tố sau để giải quyết vấn đề n&agrave;y:&amp;nbsp;<br>
        - Thứ nhất, c&aacute;c b&agrave;i học c&oacute; t&iacute;nh kế thừa: C&aacute;c b&agrave;i sau sẽ c&oacute; sự lặp lại nội dung ở b&agrave;i học trước. Mấu chốt sự kh&aacute;c biệt của việc n&agrave;y so với việc y&ecirc;u cầu trẻ học lại b&agrave;i đ&atilde; học l&agrave;: c&aacute;c chuy&ecirc;n gia đ&atilde; c&acirc;n nhắc v&agrave; t&iacute;nh to&aacute;n để tần suất lặp lại vừa đủ, trải đều ở nhiều b&agrave;i học kh&aacute;c nhau.<br>
        - Thứ hai, việc lặp lại c&oacute; t&iacute;nh ph&aacute;t triển: Tức l&agrave; thay v&igrave; &ldquo;sao ch&eacute;p&rdquo; ho&agrave;n to&agrave;n h&igrave;nh ảnh, c&aacute;ch thể hiện từ vựng của b&agrave;i trước sang b&agrave;i sau, c&aacute;c từ n&agrave;y sẽ được minh họa bằng h&igrave;nh ảnh, video kh&aacute;c, thậm ch&iacute; l&agrave; kiểu chữ, m&agrave;u chữ kh&aacute;c, ngữ cảnh v&agrave; c&acirc;u v&iacute; dụ kh&aacute;c, giọng đọc kh&aacute;c.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Hai yếu tố n&agrave;y sẽ đảm bảo trẻ c&oacute; khả năng ghi nhớ c&aacute;c từ vựng, đồng thời giữ được hứng th&uacute;, niềm h&aacute;o hức trong mỗi lần học. Nh&igrave;n xa hơn, việc mang từ vựng đặt v&agrave;o nhiều ngữ cảnh, c&aacute;ch thể hiện, giọng đọc&hellip; khiến trẻ nhận diện được từ vựng tốt hơn trong cuộc sống sau n&agrave;y. Trẻ học từ vựng trong E&amp;K, nhưng khi trẻ gặp từ đ&oacute; trong E&amp;K Stories,E&amp;K Math, trong s&aacute;ch truyện m&agrave; mẹ mua cho b&eacute;, hay tr&ecirc;n c&aacute;c bảng biển ngo&agrave;i đường phố&hellip; n&atilde;o bộ b&eacute; cũng sẽ nhận ra được.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Với cấu tr&uacute;c b&agrave;i học v&agrave; lộ tr&igrave;nh đ&atilde; được c&aacute;c chuy&ecirc;n gia vạch sẵn, E&amp;K gi&uacute;p việc học từ vựng của trẻ trở n&ecirc;n đầy hứng th&uacute; v&agrave; hiệu quả hơn rất nhiều. Học hiệu quả, trẻ chỉ cần học mỗi ng&agrave;y 15 ph&uacute;t c&ugrave;ng E&amp;K v&agrave; sự đồng h&agrave;nh của bố mẹ sau một thời gian, kho từ vững t&iacute;ch luỹ được của trẻ sẽ khiến ch&iacute;nh bố mẹ cũng ngạc nhi&ecirc;n đấy.&amp;nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Ở giai đoạn Cửa sổ v&agrave;ng, sự đồng h&agrave;nh của ba mẹ l&agrave; v&ocirc; c&ugrave;ng quan trọng. Ba mẹ h&atilde;y d&agrave;nh thời gian đọc kĩ Hướng dẫn học E&amp;K, sắp xếp để d&agrave;nh thời gian ngồi học c&ugrave;ng con, trao đổi v&agrave; khuyến kh&iacute;ch con tương t&aacute;c với b&agrave;i học để con đạt được lợi &iacute;ch tốt nhất khi học E&amp;K ba mẹ nh&eacute;!&amp;nbsp;</span></p>

        <p style="text-align: justify;"><em><strong><span style="line-height:2;">Ch&uacute;c ba mẹ v&agrave; c&aacute;c b&eacute; c&oacute; những khoảng thời gian học E&amp;K thật vui v&agrave; hiệu quả. Cảm ơn ba mẹ đ&atilde; c&ugrave;ng E&amp;K bồi dưỡng những bạn nhỏ hiểu biết v&agrave; hạnh ph&uacute;c!&amp;nbsp;</span></strong></em><br>
        &amp;nbsp;</p>

        <p class="clearfix">
        </p>
        </div>
        </section>
',
                'Author' => 'hòa',
                'created_at' => '2021-09-01 06:36:11',
                'updated_at' => '2021-09-01 06:36:11'
            ],
            [
                'url' => '',
                'categories' => 'loiich',
                'title' => 'Chương trình học của E&K hỗ trợ phát triển 2 bán cầu não của trẻ trong giai đoạn vàng',
                'Detail' => '        <section class="monkey-bg-white new-wrapper">
        <div class="title style-title monkey-fz-30 monkey-f-bold">
        Chương tr&igrave;nh học của E&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn v&agrave;ng
        </div>
        <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
        <ul class="list-inline">
        <li class="list-inline-item">03/04/2020</li>
        <li class="list-inline-item ml-4">
        <span> 2635 </span> Lượt xem
        </li>
        </ul>
        </div>
        <div class="new-body">
        <div class="mb-3">
        <p style="text-align: justify;"><strong><span style="line-height:2;">E&amp;K được c&aacute;c chuy&ecirc;n gia x&acirc;y dựng với nhiều hoạt động kh&aacute;c nhau k&iacute;ch th&iacute;ch sự ph&aacute;t triển hai b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội".</span></strong><br>
        &amp;nbsp;</p>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" style="width: 100%;">
        <tbody>
        <tr>
        <td style="text-align: center;"><strong><span style="line-height:2;">Nội dung ch&iacute;nh</span></strong></td>
        </tr>
        <tr>
        <td style="text-align: justify;"><a href="#Tối ưu giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ&amp;nbsp;"><span style="line-height:2;">1.&amp;nbsp;Giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ</span></a></td>
        </tr>
        <tr>
        <td style="text-align: justify;"><a href="#Chương tr&igrave;nh học củaE&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội&amp;quot;"><span style="line-height:2;">2.&amp;nbsp;Chương tr&igrave;nh học của E&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội"</span></a></td>
        </tr>
        </tbody>
        </table>
        </div>

        <h1 style="text-align: justify;"><a id="Tối ưu giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ&amp;nbsp;" name="Tối ưu giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ&amp;nbsp;"><span style="font-size:20px;"><strong>Tối ưu giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ&amp;nbsp;</strong></span></a></h1>

        <p style="text-align: justify;"><span style="line-height:2;">Theo c&aacute;c nghi&ecirc;n cứu khoa học, giai đoạn 6 năm đầu đời của trẻ đ&oacute;ng vai tr&ograve; rất quan trọng trong việc ph&aacute;t triển tr&iacute; n&atilde;o, h&igrave;nh th&agrave;nh t&iacute;nh c&aacute;ch, nh&acirc;n sinh quan. Đến năm 3 tuổi n&atilde;o bộ của trẻ đ&atilde; bằng 85% so với n&atilde;o người lớn v&agrave; sau 6 tuổi, n&atilde;o bộ của trẻ đ&atilde; ph&aacute;t triển ho&agrave;n to&agrave;n 100% như n&atilde;o bộ của một người trưởng th&agrave;nh. Giai đoạn từ 0-6 tuổi l&agrave; giai đoạn v&agrave;ng để tạo th&agrave;nh nhiều kết nối thần kinh tr&ecirc;n n&atilde;o bộ nhất v&agrave; đ&acirc;y được coi l&agrave; &ldquo;cửa sổ cơ hội&rdquo; của trẻ.&amp;nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">&ldquo;Cửa sổ cơ hội&rdquo; (tiếng Anh: Window of Opportunity) l&agrave; cụm từ m&agrave; c&aacute;c chuy&ecirc;n gia nghi&ecirc;n cứu về n&atilde;o bộ - h&agrave;nh vi - sự ph&aacute;t triển của trẻ sử dụng để chỉ một giai đoạn ph&aacute;t triển mạnh mẽ trong những năm đầu đời của c&aacute;c trẻ. Ở giai đoạn n&agrave;y, trẻ tỏ ra rất th&ocirc;ng minh, lĩnh hội nhanh nhiều loại kiến thức. Thậm ch&iacute; người ta cho rằng, ở giai đoạn &ldquo;Cửa sổ cơ hội&rdquo;, mỗi đứa trẻ l&agrave; một thi&ecirc;n t&agrave;i. Hiện nay c&oacute; nhiều người đang t&igrave;m c&aacute;ch ph&aacute;t huy tối đa khả năng trong giai đoạn &ldquo;Cửa sổ cơ hội&rdquo; của trẻ để tạo n&ecirc;n những &ldquo;thần đồng&rdquo;. Tuy nhi&ecirc;n, những cố gắng n&agrave;y chưa mang lại kết quả như mong muốn.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Ba mẹ ng&agrave;y nay c&oacute; thể đ&atilde; nhận thức được điều n&agrave;y, nhưng kh&ocirc;ng phải ai cũng biết c&aacute;ch hoặc c&oacute; đủ điều kiện để gi&uacute;p con tận dụng được giai đoạn v&agrave;ng ấy. Hiểu được điều đ&oacute;,E&amp;K ra đời với những chương tr&igrave;nh học v&agrave; phương ph&aacute;p khoa học, b&agrave;i bản nhất, gi&uacute;p c&aacute;c ba mẹ, ngay cả c&aacute;c ba mẹ kh&ocirc;ng biết tiếng Anh, chưa c&oacute; nhiều kiến thức về ng&ocirc;n ngữ v&agrave; về gi&aacute;o dục sớm cũng c&oacute; thể dễ d&agrave;ng đồng h&agrave;nh v&agrave; gi&uacute;p con bắt đầu học tiếng Anh.&amp;nbsp;</span></p>

        <h1 style="text-align: justify;"><a id="Chương tr&igrave;nh học củaE&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội&amp;quot;" name="Chương tr&igrave;nh học củaE&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội&amp;quot;"><span style="font-size:20px;"><strong>Chương tr&igrave;nh học của E&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội"</strong></span></a></h1>

        <p style="text-align: justify;"><span style="line-height:2;">E&amp;K l&agrave; ứng dụng ti&ecirc;n phong &aacute;p dụng c&aacute;c phương ph&aacute;p Gi&aacute;o dục sớm được c&ocirc;ng nhận tr&ecirc;n thế giới v&agrave;o dạy học cho trẻ nhỏ tại Việt Nam. Ứng dụng kết hợp c&aacute;c phương ph&aacute;p: phương ph&aacute;p k&iacute;ch th&iacute;ch n&atilde;o phải v&agrave; chụp h&igrave;nh nguy&ecirc;n từ Glenn Doman, phương ph&aacute;p Phonics k&iacute;ch th&iacute;ch tối đa tư duy v&agrave; tiềm năng của n&atilde;o tr&aacute;i, phương ph&aacute;p đa gi&aacute;c quan Robert C. Titzer v&agrave; phương ph&aacute;p học th&ocirc;ng qua tr&ograve; chơi game-based learning.&amp;nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Th&ocirc;ng qua những b&agrave;i học được thiết kế &aacute;p dụng phương ph&aacute;p gi&aacute;o dục sớm trongE&amp;K, trẻ được ph&aacute;t triển n&atilde;o bộ tối ưu, dễ d&agrave;ng học tập v&agrave; tiếp thu, r&egrave;n luyện tư duy trực diện v&agrave; phản xạ bằng tiếng Anh cũng như c&aacute;c ng&ocirc;n ngữ kh&aacute;c, x&oacute;a đi khoảng c&aacute;ch ngoại ngữ v&agrave; tiếng mẹ đẻ. Với chi ph&iacute; chỉ gần 2.000/ng&agrave;y (499.000 đồng/12 th&aacute;ng), ba mẹ đ&atilde; c&oacute; thể mang cả thế giới ng&ocirc;n ngữ đến với con.&amp;nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">B&ecirc;n cạnh đ&oacute;,E&amp;K c&ograve;n gi&uacute;p trẻ x&acirc;y dựng nền tảng v&ocirc; c&ugrave;ng vững chắc trong việc học tiếng Anh n&oacute;i ri&ecirc;ng v&agrave; ng&ocirc;n ngữ n&oacute;i chung, để trẻ sẵn s&agrave;ng ho&agrave;n thiện c&aacute;c kỹ năng cao hơn, to&agrave;n diện hơn với ứng dụng tiếp theo của E&amp;K l&agrave; E&amp;K Stories.</span></p>

        <p style="text-align: justify;"><span style="line-height:2;">Một điều quan trọng m&agrave; c&aacute;c chuy&ecirc;n giaE&amp;Klu&ocirc;n muốn nhắc ba mẹ: Ở giai đoạn n&agrave;y, sự đồng h&agrave;nh của ba mẹ l&agrave; v&ocirc; c&ugrave;ng quan trọng. Ba mẹ h&atilde;y d&agrave;nh thời gian đọc kỹ Hướng dẫn học E&amp;K (gắn link), sắp xếp để d&agrave;nh thời gian ngồi học c&ugrave;ng con, trao đổi v&agrave; khuyến kh&iacute;ch con tương t&aacute;c với b&agrave;i học để con đạt được lợi &iacute;ch tốt nhất khi học E&amp;K ba mẹ nh&eacute;!&amp;nbsp;</span></p>

        <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Ch&uacute;c ba mẹ v&agrave; c&aacute;c b&eacute; c&oacute; những khoảng thời gian họcE&amp;K thật vui v&agrave; hiệu quả. Cảm ơn ba mẹ đ&atilde; c&ugrave;ng E&amp;K bồi dưỡng những bạn nhỏ hiểu biết v&agrave; hạnh ph&uacute;c!&amp;nbsp;</strong></em></span></p>
        </div>
        </section>
',
                'Author' => 'hòa',
                'created_at' => '2021-09-01 06:36:11',
                'updated_at' => '2021-09-01 06:36:11'
            ],
        ]);

    }
}

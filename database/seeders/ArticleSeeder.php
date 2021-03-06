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
        \Illuminate\Support\Facades\DB::table('articles')->insert([
            [
                'url' => 'phat-am-chuan-anh-my-ngay-tu-dau-cung-E&K',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631035690/zg0i6yimrkqg3pc9qdrl.png',
                'categories' => 'loi-ich',
                'title' => 'Phát âm chuẩn Anh Mỹ ngay từ đầu cùng E&K',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="title style-title monkey-fz-30 monkey-f-bold">
                                    Ph&aacute;t &acirc;m chuẩn Anh Mỹ ngay từ đầu c&ugrave;ng E&K
                                </div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 4009 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align: justify;"><span style="line-height:2;"><strong>Một trong những vấn đề lớn nhất trẻ em Việt Nam gặp phải khi học tiếng Anh ch&iacute;nh l&agrave; việc ph&aacute;t &acirc;m sai do kh&ocirc;ng c&oacute; m&ocirc;i trường r&egrave;n luyện tiếng Anh chuẩn. Với E&K, b&eacute; sẽ ph&aacute;t &acirc;m chuẩn ngay từ khi bắt đầu học với c&aacute;c audio do ch&iacute;nh người bản xứ đọc.</strong></span></p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631035690/zg0i6yimrkqg3pc9qdrl.png" style="width:100%" /></p></div>

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

                            </section>',
                'Author' => 'hòa',
                'created_at' => '2021-09-06 16:26:04',
                'updated_at' => '2021-09-06 16:26:04'
            ],
            [
                'url' => 'hoc-luong-tu-vung-khong-lo-ngay-tai-nha-cung-E&K',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631035947/uzazpnd4hat7xu8csnkq.png',
                'categories' => 'loi-ich',
                'title' => 'Học lượng từ vựng khổng lồ ngay tại nhà cùng E&K',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="title style-title monkey-fz-30 monkey-f-bold">
                                    Học lượng từ vựng khổng lồ ngay tại nh&agrave; c&ugrave;ng E&amp;K
                                </div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 9976 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align: justify;"><span style="line-height:2;"><strong>Với nền tảng l&agrave; kho từ vựng v&agrave; mẫu c&acirc;u khổng lồ, E&amp;K tự tin khẳng định gi&uacute;p trẻ t&iacute;ch lũy v&agrave; tư duy trực diện hơn 3,000 từ vựng, 6,000 mẫu c&acirc;u thuộc nhiều chủ đề tiếng Anh trong giai đoạn đầu tiếp x&uacute;c, tạo nền tảng vững v&agrave;ng để trẻ c&oacute; thể học l&ecirc;n c&aacute;c tr&igrave;nh độ cao hơn của ng&ocirc;n ngữ n&agrave;y. B&ecirc;n cạnh đ&oacute;, E&amp;K c&oacute; thể học linh hoạt mọi l&uacute;c, mọi nơi.</strong></span></p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631035947/uzazpnd4hat7xu8csnkq.png" style="width:100%" /></p></div>

                                    <p style="text-align: justify;"><a id="phan-1-loiich" name="phan-1-loiich"><strong><span style="font-size:20px;">T&iacute;ch luỹ kho từ vựng v&agrave; mẫu c&acirc;u tiếng Anh đồ sộ</span></strong></a></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">E&amp;K được x&acirc;y dựng với kho từ vựng khổng lồ hơn 18.000 từ vựng phổ biến, 40.000 c&acirc;u cho cả 6 ng&ocirc;n ngữ. Trong đ&oacute;, ri&ecirc;ng ng&ocirc;n ngữ tiếng Anh (Anh - Mỹ)c&oacute; hơn 3.000 từ vựng v&agrave; 6.000 mẫu c&acirc;u thuộc 48 chủ đề trong cuộc sống. Nhờ đ&oacute;, trẻ sẽ t&iacute;ch luỹ được vốn từ đồ sộ, x&acirc;y dựng một nền tảng vững chắc để trẻ &aacute;p dụng v&agrave;o cuộc sống hoặc học s&acirc;u hơn về ng&ocirc;n ngữ sau n&agrave;y.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">C&aacute;c từ vựng trong E&amp;K đ&atilde; được nghi&ecirc;n cứu để lặp lại c&oacute; hệ thống v&agrave; khoa học trong c&aacute;c b&agrave;i học của E&amp;K, do đ&oacute;, ba mẹ ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m cho b&eacute; học mỗi b&agrave;i 1 lần m&agrave; kh&ocirc;ng sợ con học c&aacute;c b&agrave;i sau qu&ecirc;n b&agrave;i trước.</span></p>

                                    <h1 style="text-align: justify;"><a id="phan-2-loiich" name="phan-2-loiich"><strong><span style="font-size:20px;">R&egrave;n kỹ năng tư duy trực diện ngay từ nhỏ</span></strong></a></h1>

                                    <p style="text-align: justify;"><span style="line-height:2;">Nhiều ba mẹ đ&atilde; nhắn tin tới Bộ phận Chăm s&oacute;c Kh&aacute;ch h&agrave;ng của Monkey thắc mắc: &ldquo;Tại sao E&amp;K kh&ocirc;ng c&oacute; phần dịch sang tiếng Việt, liệu b&eacute; học tiếng Anh suốt như vậy c&oacute; hiểu được kh&ocirc;ng?&rdquo; Về c&acirc;u hỏi n&agrave;y, ba mẹ c&oacute; thể ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m v&igrave; E&amp;K định nghĩa c&aacute;c từ vựng bằng h&igrave;nh ảnh, &acirc;m thanh v&agrave; video nhờ đ&oacute;, b&eacute; c&oacute; thể ho&agrave;n to&agrave;n hiểu nghĩa trực tiếp c&aacute;c từ m&agrave; kh&ocirc;ng cần phải dịch sang một ng&ocirc;n ngữ kh&aacute;c như tiếng Việt. Việc tư duy trực diện n&agrave;y sẽ gi&uacute;p trẻ sử dụng ng&ocirc;n ngữ thuần thục v&agrave; nhanh hơn, kh&ocirc;ng gặp nhiều trở ngại như rất nhiều người Việt Nam khi học tiếng Anh v&igrave; tiếp cận muộn, bị tư duy tiếng mẹ đẻ chi phối nhiều.</span></p>

                                    <h1 style="text-align: justify;"><a id="phan-3-loiich" name="phan-3-loiich"><strong><span style="font-size:20px;">Linh hoạt học tập mọi l&uacute;c, mọi nơi</span></strong></a></h1>

                                    <p style="text-align: justify;"><span style="line-height:2;">Một trong những lợi &iacute;ch học E&amp;K l&agrave; b&eacute; c&oacute; thể học mọi l&uacute;c, mọi nơi trong mọi thời điểm v&igrave; ứng dụng học tập n&agrave;y c&oacute; thể sử dụng linh hoạt tr&ecirc;n c&aacute;c thiết bị di động như điện thoại th&ocirc;ng minh (smartphone), m&aacute;y t&iacute;nh bảng (tablet/ iPad) hay m&aacute;y t&iacute;nh x&aacute;ch tay (laptop). B&ecirc;n cạnh đ&oacute;, ba mẹ chỉ cần tải b&agrave;i học về v&agrave; tắt mạng để b&eacute; học ở chế độ ngoại tuyến (offline), th&iacute;ch hợp cho những khu vực kh&ocirc;ng c&oacute; mạng hoặc mạng k&eacute;m, kh&ocirc;ng ổn định.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Học c&ugrave;ng E&amp;K, ba mẹ kh&ocirc;ng cần mất một khoản tiền lớn để con tới c&aacute;c trung t&acirc;m tiếng Anh. B&eacute; chỉ cần một thiết bị th&ocirc;ng minh v&agrave; sự đồng h&agrave;nh của ba mẹ tại nh&agrave; l&agrave; c&oacute; thể được tiếp cận với kho từ vựng v&agrave; mẫu c&acirc;u đồ sộ từ E&amp;K.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Điều quan trọng nhất m&agrave; c&aacute;c chuy&ecirc;n gia E&amp;K lu&ocirc;n muốn nhắc ba mẹ:</strong></em> Ở giai đoạn n&agrave;y, sự đồng h&agrave;nh của ba mẹ l&agrave; v&ocirc; c&ugrave;ng quan trọng. Ba mẹ h&atilde;y d&agrave;nh thời gian đọc kỹ Hướng dẫn học E&amp;K, sắp xếp để d&agrave;nh thời gian ngồi học c&ugrave;ng con, trao đổi v&agrave; khuyến kh&iacute;ch con tương t&aacute;c với b&agrave;i học để con đạt được lợi &iacute;ch tốt nhất khi học E&amp;K ba mẹ nh&eacute;!</span></p>

                                    <p style="text-align: justify;"><strong><span style="line-height:2;">Ch&uacute;c ba mẹ v&agrave; c&aacute;c b&eacute; c&oacute; những khoảng thời gian học E&amp;K thật vui v&agrave; hiệu quả. Cảm ơn ba mẹ đ&atilde; c&ugrave;ng Monkey bồi dưỡng những bạn nhỏ hiểu biết v&agrave; hạnh ph&uacute;c! </span></strong></p>

                                    <p></p>
                                </div>
                            </section>',
                'Author' => 'hòa',
                'created_at' => '2021-09-06 16:49:53',
                'updated_at' => '2021-09-06 16:49:53'
            ],
            [
                'url' => 'lo-trinh-hoc-bai-ban-cua-E&K-giup-toi-uu-thoi-gian-hoc-va-giup-be-hoc-hieu-qua-hon',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631036029/zvrsivagpfpgco8il3v3.png',
                'categories' => 'loi-ich',
                'title' => 'Lộ trình học bài bản của E&K giúp tối ưu thời gian học và giúp bé học hiệu quả hơn',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="title style-title monkey-fz-30 monkey-f-bold">
                                    Lộ tr&igrave;nh học b&agrave;i bản của E&amp;K gi&uacute;p tối ưu thời gian học v&agrave; gi&uacute;p b&eacute; học hiệu quả hơn
                                </div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 4003 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align: justify;"><strong><span style="line-height:2;">C&aacute;c chuy&ecirc;n gia của E&amp;K đ&atilde; nghi&ecirc;n cứu về sự ghi nhớ của n&atilde;o bộ trẻ để x&acirc;y dựng một chương tr&igrave;nh học b&agrave;i bản với lộ tr&igrave;nh học r&otilde; r&agrave;ng, nhờ đ&oacute; trẻ học tập, ghi nhớ c&aacute;c từ vựng v&agrave; mẫu c&acirc;u hiệu quả hơn trong khoảng thời gian tối ưu nhất.</span></strong></p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631036029/zvrsivagpfpgco8il3v3.png" style="width:100%" /></p></div>
                                    <div class="table-responsive">

                                        <h1><a id="phan-1-tri-nho" name="phan-1-tri-nho"><span style="font-size:20px;"><strong>Đặc điểm tr&iacute; nhớ của trẻ nhỏ</strong></span></a></h1>

                                        <p><span style="line-height:2;">Đặc điểm tr&iacute; nhớ của trẻ nhỏ rất kh&aacute;c so với người trưởng th&agrave;nh. Những điều ch&uacute;ng ta cho l&agrave; rất đơn giản c&oacute; thể l&agrave; những thứ rất kh&oacute; đối với trẻ, v&agrave; ngược lại. Sau một qu&aacute; tr&igrave;nh d&agrave;i nghi&ecirc;n cứu v&agrave; quan s&aacute;t, c&aacute;c nh&agrave; gi&aacute;o dục đ&atilde; chỉ ra rằng: Đối với trẻ nhỏ, thứ kh&oacute; học nhất kh&ocirc;ng phải l&agrave; những thứ phức tạp, s&acirc;u sắc hay cao si&ecirc;u, m&agrave; l&agrave; thứ kh&ocirc;ng mang lại hứng th&uacute; khi học. Thứ dễ học nhất kh&ocirc;ng phải l&agrave; những thứ người lớn cho l&agrave; đơn giản, m&agrave; l&agrave; những thứ đem lại niềm vui v&agrave; hứng th&uacute; cho trẻ.<br>
        Nguy&ecirc;n tắc quan trọng nhất trong việc dạy cho con trẻ, đặc biệt giai đoạn 0-6 tuổi, l&agrave; cần ưu ti&ecirc;n sự hứng th&uacute; của trẻ. Sự hứng th&uacute; của trẻ giống như một ch&igrave;a kh&oacute;a vạn năng, sẽ gi&uacute;p trẻ mở mọi c&aacute;nh cửa dẫn đến tri thức. Một khi đ&atilde; th&iacute;ch, đối với trẻ, mọi thứ đều dễ như nhau.</span></p>
                                    </div>

                                    <p style="text-align: justify;"><span style="line-height:2;">Vậy khi trẻ đ&atilde; hứng th&uacute;, điều g&igrave; sẽ khiến trẻ ghi nhớ tốt b&agrave;i học? Đ&oacute; ch&iacute;nh l&agrave; việc lặp đi lặp lại. Ghi nhớ l&agrave; một qu&aacute; tr&igrave;nh kh&ocirc;ng ngừng củng cố của n&atilde;o bộ; số lần lặp lại c&agrave;ng nhiều, thời gian ghi nhớ c&agrave;ng d&agrave;i l&acirc;u. Đặc biệt, kh&aacute;c với n&atilde;o bộ người lớn, năng lực đặc biệt của trẻ em từ 0-6 tuổi l&agrave; &ldquo;tr&iacute; nhớ m&aacute;y m&oacute;c&rdquo; hay &ldquo;tr&iacute; nhớ nguy&ecirc;n mảng&rdquo;. Ba mẹ c&oacute; thể lo &ldquo;con đ&atilde; biết g&igrave; đ&acirc;u, con kh&ocirc;ng hiểu th&igrave; học thế n&agrave;o&rdquo;. Nhưng thực ra, ở độ tuổi n&agrave;y, trẻ kh&ocirc;ng ghi nhớ tr&ecirc;n cơ sở hiểu nghĩa, hiểu mối li&ecirc;n hệ, ph&acirc;n chia nội dung b&agrave;i học theo logic như người lớn, thay v&agrave;o đ&oacute;, chỉ cần cho trẻ tiếp x&uacute;c với một số lần nhất định, trẻ sẽ kh&ocirc;ng chủ định m&agrave; ghi nhớ nội dung được học. &ldquo;Ghi nhớ m&aacute;y m&oacute;c&rdquo; thậm ch&iacute; chiếm ưu thế cho đến cả những năm đầu ti&ecirc;n khi con v&agrave;o cấp 1.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Tuy nhi&ecirc;n, cần nhớ rằng, hiệu quả của việc ghi nhớ c&ograve;n phụ thuộc v&agrave;o nhiều yếu tố như mức độ tập trung của trẻ khi tiếp x&uacute;c hay hứng th&uacute; của trẻ như đ&atilde; ph&acirc;n t&iacute;ch ở phần tr&ecirc;n. Việc nhắc lại l&agrave; cần thiết để gi&uacute;p trẻ ghi nhớ, nhưng sự nhắc lại đ&oacute; sẽ th&agrave;nh phản t&aacute;c dụng nếu khiến cho trẻ kh&ocirc;ng hứng th&uacute;.</span></p>

                                    <h1 style="text-align: justify;"><a id="Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học" name="Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học"><span style="font-size:20px;"><strong>Cấu tr&uacute;c b&agrave;i học của E&amp;K gi&uacute;p trẻ học hiệu quả hơn, tối ưu thời gian học</strong></span></a></h1>

                                    <p style="text-align: justify;"><span style="line-height:2;">Tr&ecirc;n cơ sở những nghi&ecirc;n cứu về đặc điểm t&acirc;m l&yacute; v&agrave; đặc điểm tr&iacute; nhớ của trẻ nhỏ, cũng như với mong muốn gi&uacute;p đa số ba mẹ c&oacute; thể &aacute;p dụng theo một c&aacute;ch dễ d&agrave;ng, E&amp;K được c&aacute;c chuy&ecirc;n gia về gi&aacute;o dục sớm x&acirc;y dựng c&aacute;c b&agrave;i học nhằm đảm bảo &iacute;t nhất hai yếu tố sau để giải quyết vấn đề n&agrave;y:<br>
        - Thứ nhất, c&aacute;c b&agrave;i học c&oacute; t&iacute;nh kế thừa: C&aacute;c b&agrave;i sau sẽ c&oacute; sự lặp lại nội dung ở b&agrave;i học trước. Mấu chốt sự kh&aacute;c biệt của việc n&agrave;y so với việc y&ecirc;u cầu trẻ học lại b&agrave;i đ&atilde; học l&agrave;: c&aacute;c chuy&ecirc;n gia đ&atilde; c&acirc;n nhắc v&agrave; t&iacute;nh to&aacute;n để tần suất lặp lại vừa đủ, trải đều ở nhiều b&agrave;i học kh&aacute;c nhau.<br>
        - Thứ hai, việc lặp lại c&oacute; t&iacute;nh ph&aacute;t triển: Tức l&agrave; thay v&igrave; &ldquo;sao ch&eacute;p&rdquo; ho&agrave;n to&agrave;n h&igrave;nh ảnh, c&aacute;ch thể hiện từ vựng của b&agrave;i trước sang b&agrave;i sau, c&aacute;c từ n&agrave;y sẽ được minh họa bằng h&igrave;nh ảnh, video kh&aacute;c, thậm ch&iacute; l&agrave; kiểu chữ, m&agrave;u chữ kh&aacute;c, ngữ cảnh v&agrave; c&acirc;u v&iacute; dụ kh&aacute;c, giọng đọc kh&aacute;c.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Hai yếu tố n&agrave;y sẽ đảm bảo trẻ c&oacute; khả năng ghi nhớ c&aacute;c từ vựng, đồng thời giữ được hứng th&uacute;, niềm h&aacute;o hức trong mỗi lần học. Nh&igrave;n xa hơn, việc mang từ vựng đặt v&agrave;o nhiều ngữ cảnh, c&aacute;ch thể hiện, giọng đọc&hellip; khiến trẻ nhận diện được từ vựng tốt hơn trong cuộc sống sau n&agrave;y. Trẻ học từ vựng trong E&amp;K, nhưng khi trẻ gặp từ đ&oacute; trong E&amp;K Stories,E&amp;K Math, trong s&aacute;ch truyện m&agrave; mẹ mua cho b&eacute;, hay tr&ecirc;n c&aacute;c bảng biển ngo&agrave;i đường phố&hellip; n&atilde;o bộ b&eacute; cũng sẽ nhận ra được.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Với cấu tr&uacute;c b&agrave;i học v&agrave; lộ tr&igrave;nh đ&atilde; được c&aacute;c chuy&ecirc;n gia vạch sẵn, E&amp;K gi&uacute;p việc học từ vựng của trẻ trở n&ecirc;n đầy hứng th&uacute; v&agrave; hiệu quả hơn rất nhiều. Học hiệu quả, trẻ chỉ cần học mỗi ng&agrave;y 15 ph&uacute;t c&ugrave;ng E&amp;K v&agrave; sự đồng h&agrave;nh của bố mẹ sau một thời gian, kho từ vững t&iacute;ch luỹ được của trẻ sẽ khiến ch&iacute;nh bố mẹ cũng ngạc nhi&ecirc;n đấy.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Ở giai đoạn Cửa sổ v&agrave;ng, sự đồng h&agrave;nh của ba mẹ l&agrave; v&ocirc; c&ugrave;ng quan trọng. Ba mẹ h&atilde;y d&agrave;nh thời gian đọc kĩ Hướng dẫn học E&amp;K, sắp xếp để d&agrave;nh thời gian ngồi học c&ugrave;ng con, trao đổi v&agrave; khuyến kh&iacute;ch con tương t&aacute;c với b&agrave;i học để con đạt được lợi &iacute;ch tốt nhất khi học E&amp;K ba mẹ nh&eacute;!</span></p>

                                    <p style="text-align: justify;"><em><strong><span style="line-height:2;">Ch&uacute;c ba mẹ v&agrave; c&aacute;c b&eacute; c&oacute; những khoảng thời gian học E&amp;K thật vui v&agrave; hiệu quả. Cảm ơn ba mẹ đ&atilde; c&ugrave;ng E&amp;K bồi dưỡng những bạn nhỏ hiểu biết v&agrave; hạnh ph&uacute;c!</span></strong></em><br>
                                    </p>

                                    <p class="clearfix">
                                    </p>
                                </div>
                            </section>',
                'Author' => 'hòa',
                'created_at' => '2021-09-01 06:36:11',
                'updated_at' => '2021-09-01 06:36:11'
            ],
            [
                'url' => 'chuong-trinh-hoc-cua-E&K-ho-tro-phat-trien-2-ban-cau-nao-cua-tre-trong-giai-doan-vang',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631036110/icbxifneapjhtdjjuhim.png',
                'categories' => 'loi-ich',
                'title' => 'Chương trình học của E&K hỗ trợ phát triển 2 bán cầu não của trẻ trong giai đoạn vàng',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="title style-title monkey-fz-30 monkey-f-bold">
                                    Chương tr&igrave;nh học của E&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn v&agrave;ng
                                </div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 2635 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align: justify;"><strong><span style="line-height:2;">E&amp;K được c&aacute;c chuy&ecirc;n gia x&acirc;y dựng với nhiều hoạt động kh&aacute;c nhau k&iacute;ch th&iacute;ch sự ph&aacute;t triển hai b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội".</span></strong><br>
                                        </p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631036110/icbxifneapjhtdjjuhim.png" style="width:100%" /></p></div>

                                    <h1 style="text-align: justify;"><a id="Tối ưu giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ" name="Tối ưu giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ"><span style="font-size:20px;"><strong>Tối ưu giai đoạn &ldquo;cửa sổ cơ hội&rdquo; cho trẻ</strong></span></a></h1>

                                    <p style="text-align: justify;"><span style="line-height:2;">Theo c&aacute;c nghi&ecirc;n cứu khoa học, giai đoạn 6 năm đầu đời của trẻ đ&oacute;ng vai tr&ograve; rất quan trọng trong việc ph&aacute;t triển tr&iacute; n&atilde;o, h&igrave;nh th&agrave;nh t&iacute;nh c&aacute;ch, nh&acirc;n sinh quan. Đến năm 3 tuổi n&atilde;o bộ của trẻ đ&atilde; bằng 85% so với n&atilde;o người lớn v&agrave; sau 6 tuổi, n&atilde;o bộ của trẻ đ&atilde; ph&aacute;t triển ho&agrave;n to&agrave;n 100% như n&atilde;o bộ của một người trưởng th&agrave;nh. Giai đoạn từ 0-6 tuổi l&agrave; giai đoạn v&agrave;ng để tạo th&agrave;nh nhiều kết nối thần kinh tr&ecirc;n n&atilde;o bộ nhất v&agrave; đ&acirc;y được coi l&agrave; &ldquo;cửa sổ cơ hội&rdquo; của trẻ.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">&ldquo;Cửa sổ cơ hội&rdquo; (tiếng Anh: Window of Opportunity) l&agrave; cụm từ m&agrave; c&aacute;c chuy&ecirc;n gia nghi&ecirc;n cứu về n&atilde;o bộ - h&agrave;nh vi - sự ph&aacute;t triển của trẻ sử dụng để chỉ một giai đoạn ph&aacute;t triển mạnh mẽ trong những năm đầu đời của c&aacute;c trẻ. Ở giai đoạn n&agrave;y, trẻ tỏ ra rất th&ocirc;ng minh, lĩnh hội nhanh nhiều loại kiến thức. Thậm ch&iacute; người ta cho rằng, ở giai đoạn &ldquo;Cửa sổ cơ hội&rdquo;, mỗi đứa trẻ l&agrave; một thi&ecirc;n t&agrave;i. Hiện nay c&oacute; nhiều người đang t&igrave;m c&aacute;ch ph&aacute;t huy tối đa khả năng trong giai đoạn &ldquo;Cửa sổ cơ hội&rdquo; của trẻ để tạo n&ecirc;n những &ldquo;thần đồng&rdquo;. Tuy nhi&ecirc;n, những cố gắng n&agrave;y chưa mang lại kết quả như mong muốn.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Ba mẹ ng&agrave;y nay c&oacute; thể đ&atilde; nhận thức được điều n&agrave;y, nhưng kh&ocirc;ng phải ai cũng biết c&aacute;ch hoặc c&oacute; đủ điều kiện để gi&uacute;p con tận dụng được giai đoạn v&agrave;ng ấy. Hiểu được điều đ&oacute;,E&amp;K ra đời với những chương tr&igrave;nh học v&agrave; phương ph&aacute;p khoa học, b&agrave;i bản nhất, gi&uacute;p c&aacute;c ba mẹ, ngay cả c&aacute;c ba mẹ kh&ocirc;ng biết tiếng Anh, chưa c&oacute; nhiều kiến thức về ng&ocirc;n ngữ v&agrave; về gi&aacute;o dục sớm cũng c&oacute; thể dễ d&agrave;ng đồng h&agrave;nh v&agrave; gi&uacute;p con bắt đầu học tiếng Anh.</span></p>

                                    <h1 style="text-align: justify;"><a id="Chương tr&igrave;nh học củaE&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội&amp;quot;" name="Chương tr&igrave;nh học củaE&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội&amp;quot;"><span style="font-size:20px;"><strong>Chương tr&igrave;nh học của E&amp;K hỗ trợ ph&aacute;t triển 2 b&aacute;n cầu n&atilde;o của trẻ trong giai đoạn &ldquo;cửa sổ cơ hội"</strong></span></a></h1>

                                    <p style="text-align: justify;"><span style="line-height:2;">E&amp;K l&agrave; ứng dụng ti&ecirc;n phong &aacute;p dụng c&aacute;c phương ph&aacute;p Gi&aacute;o dục sớm được c&ocirc;ng nhận tr&ecirc;n thế giới v&agrave;o dạy học cho trẻ nhỏ tại Việt Nam. Ứng dụng kết hợp c&aacute;c phương ph&aacute;p: phương ph&aacute;p k&iacute;ch th&iacute;ch n&atilde;o phải v&agrave; chụp h&igrave;nh nguy&ecirc;n từ Glenn Doman, phương ph&aacute;p Phonics k&iacute;ch th&iacute;ch tối đa tư duy v&agrave; tiềm năng của n&atilde;o tr&aacute;i, phương ph&aacute;p đa gi&aacute;c quan Robert C. Titzer v&agrave; phương ph&aacute;p học th&ocirc;ng qua tr&ograve; chơi game-based learning.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Th&ocirc;ng qua những b&agrave;i học được thiết kế &aacute;p dụng phương ph&aacute;p gi&aacute;o dục sớm trongE&amp;K, trẻ được ph&aacute;t triển n&atilde;o bộ tối ưu, dễ d&agrave;ng học tập v&agrave; tiếp thu, r&egrave;n luyện tư duy trực diện v&agrave; phản xạ bằng tiếng Anh cũng như c&aacute;c ng&ocirc;n ngữ kh&aacute;c, x&oacute;a đi khoảng c&aacute;ch ngoại ngữ v&agrave; tiếng mẹ đẻ. Với chi ph&iacute; chỉ gần 2.000/ng&agrave;y (499.000 đồng/12 th&aacute;ng), ba mẹ đ&atilde; c&oacute; thể mang cả thế giới ng&ocirc;n ngữ đến với con.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">B&ecirc;n cạnh đ&oacute;,E&amp;K c&ograve;n gi&uacute;p trẻ x&acirc;y dựng nền tảng v&ocirc; c&ugrave;ng vững chắc trong việc học tiếng Anh n&oacute;i ri&ecirc;ng v&agrave; ng&ocirc;n ngữ n&oacute;i chung, để trẻ sẵn s&agrave;ng ho&agrave;n thiện c&aacute;c kỹ năng cao hơn, to&agrave;n diện hơn với ứng dụng tiếp theo của E&amp;K l&agrave; E&amp;K Stories.</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;">Một điều quan trọng m&agrave; c&aacute;c chuy&ecirc;n giaE&amp;Klu&ocirc;n muốn nhắc ba mẹ: Ở giai đoạn n&agrave;y, sự đồng h&agrave;nh của ba mẹ l&agrave; v&ocirc; c&ugrave;ng quan trọng. Ba mẹ h&atilde;y d&agrave;nh thời gian đọc kỹ Hướng dẫn học E&amp;K (gắn link), sắp xếp để d&agrave;nh thời gian ngồi học c&ugrave;ng con, trao đổi v&agrave; khuyến kh&iacute;ch con tương t&aacute;c với b&agrave;i học để con đạt được lợi &iacute;ch tốt nhất khi học E&amp;K ba mẹ nh&eacute;!</span></p>

                                    <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Ch&uacute;c ba mẹ v&agrave; c&aacute;c b&eacute; c&oacute; những khoảng thời gian họcE&amp;K thật vui v&agrave; hiệu quả. Cảm ơn ba mẹ đ&atilde; c&ugrave;ng E&amp;K bồi dưỡng những bạn nhỏ hiểu biết v&agrave; hạnh ph&uacute;c!</strong></em></span></p>
                                </div>
                            </section>',
                'Author' => 'hòa',
                'created_at' => '2021-09-01 06:36:11',
                'updated_at' => '2021-09-01 06:36:11'
                ],[
                'url' => 'hung-thu-hoc-dieu-kien-tien-quyet-de-con-bat-dau-hoc-tieng-anh-hieu-qua-khi-hoc-E&K',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631034215/epu8kzzdan9t0zhoucsq.png',
                'categories' => 'huong-dan',
                'title' => 'Hứng thú học - điều kiện tiên quyết để con bắt đầu học tiếng Anh hiệu quả khi học',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="monkey-f-bold monkey-fz-30 style-title title">Hứng th&uacute; học - điều kiện ti&ecirc;n quyết để con bắt đầu học tiếng Anh hiệu quả khi học J&amp;K</div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 2635 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align:justify"><strong>Với trẻ nhỏ, l&agrave;m bất cứ điều g&igrave; cũng cần sự hứng th&uacute;. Đặc biệt, khi trẻ bắt đầu l&agrave;m quen với một ng&ocirc;n ngữ mới, hứng th&uacute; học tập lại c&agrave;ng quan trọng hơn.</strong><br />
                                            &nbsp;</p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631034215/epu8kzzdan9t0zhoucsq.png" style="width:100%" /></p></div>

                                    <h1 style="text-align:justify"><a id="phan-1-bai-16" name="phan-1-bai-16"><strong><span style="font-size:20px">Tại sao cần duy tr&igrave; hứng th&uacute; học cho trẻ nhỏ?</span></strong></a></h1>

                                    <p style="text-align:justify">&ldquo;Cả th&egrave;m ch&oacute;ng ch&aacute;n&rdquo; c&oacute; lẽ l&agrave; t&igrave;nh trạng chung của nhiều trẻ. Bản chất t&ograve; m&ograve; khiến trẻ nh&igrave;n mọi thứ với con mắt hiếu kỳ, v&ocirc; c&ugrave;ng hứng th&uacute; ở lần đầu ti&ecirc;n tiếp x&uacute;c. Nhưng cũng v&igrave; sự t&ograve; m&ograve;, trẻ dễ bị l&ocirc;i cuốn v&agrave;o những điều mới mẻ, do đ&oacute; ở những lần &ldquo;gặp lại&rdquo;, trẻ lại kh&ocirc;ng c&ograve;n nhiều sự hứng th&uacute; nữa. Trong việc học, tạo v&agrave; duy tr&igrave; hứng th&uacute; cho trẻ lại c&agrave;ng quan trọng, bởi với con trẻ, &ldquo;thứ dễ d&agrave;ng nhất l&agrave; thứ tạo nhiều niềm vui nhất, c&ograve;n thứ kh&oacute; nhất lại l&agrave; thứ &iacute;t hứng th&uacute; nhất&rdquo;. D&ugrave; &aacute;p dụng phương ph&aacute;p học tập n&agrave;o đi chăng nữa, duy tr&igrave; hứng th&uacute; ở trẻ lu&ocirc;n l&agrave; điều kiện ti&ecirc;n quyết, l&agrave; ch&igrave;a kh&oacute;a vạn năng mở mọi c&aacute;nh cửa đến với kho b&aacute;u tri thức.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631029701/rciiey4atlpikweva859.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">B&ecirc;n cạnh những hướng dẫn dưới đ&acirc;y, ba mẹ cũng c&oacute; thể tham gia cộng đồng học tập của Monkey: <em><strong><a href="https://www.facebook.com/groups/donghanhcungconhocmonkey" target="_blank">Group ĐỒNG H&Agrave;NH C&Ugrave;NG CON HỌC MONKEY</a></strong></em> để tham khảo, lắng nghe th&ecirc;m kinh nghiệm nu&ocirc;i dạy con từ những ba mẹ đ&atilde; c&oacute; trải nghiệm v&agrave; th&agrave;nh c&ocirc;ng.&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-2-bai-16" name="phan-2-bai-16"><strong><span style="font-size:20px">Tạo m&ocirc;i trường học tập tốt cho trẻ</span></strong></a></h1>

                                    <p style="text-align:justify">Một m&ocirc;i trường học tập tốt được định nghĩa l&agrave; m&ocirc;i trường y&ecirc;n tĩnh, kh&ocirc;ng c&oacute; những thứ l&agrave;m xao nh&atilde;ng hoạt động học tập, khiến trẻ mất tập trung. Trẻ em chỉ c&oacute; thể tập trung trong một khoảng thời gian ngắn nhất định. Ba mẹ n&ecirc;n tạo cho trẻ khu vực học tập ri&ecirc;ng trong nh&agrave;. Ở khu vực học tập n&agrave;y, ba mẹ tuyệt đối kh&ocirc;ng b&agrave;y đồ chơi xung quanh. Trẻ tuy nhỏ, nhưng n&atilde;o bộ của trẻ sẽ dần lưu lại h&igrave;nh ảnh của khu vực n&agrave;y với hoạt động học tập. Kh&ocirc;ng gian học tập của b&eacute; cũng kh&ocirc;ng n&ecirc;n c&oacute; Tivi v&agrave; tuyệt đối kh&ocirc;ng để tiếng Tivi l&agrave;m ảnh hưởng khi b&eacute; học tập. C&aacute;c th&agrave;nh vi&ecirc;n kh&aacute;c trong gia đ&igrave;nh cũng n&ecirc;n tr&aacute;nh g&acirc;y ra tiếng ồn l&agrave;m mất sự tập trung v&agrave; mạch học của b&eacute;. Việc ba mẹ cầm v&agrave; sử dụng điện thoại cũng c&oacute; thể khiến b&eacute; mất tập trung.&nbsp;</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631030584/r3o0tzraqixo7songdew.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><em><strong>Mẹo nhỏ</strong></em>: Nếu điều kiện cho ph&eacute;p, ba mẹ c&oacute; thể tạo ra một g&oacute;c học tập trong một ph&ograve;ng ri&ecirc;ng cho b&eacute;. Ở khu vực học tập sẽ chỉ n&ecirc;n c&oacute; b&agrave;n học, ghế ngồi cho b&eacute;, ghế ngồi cho ba mẹ để c&oacute; thể học c&ugrave;ng con, c&aacute;c cuốn s&aacute;ch m&agrave; b&eacute; th&iacute;ch hoặc c&aacute;c cuốn s&aacute;ch nu&ocirc;i dạy con của ba mẹ. Nếu như đ&oacute; l&agrave; ph&ograve;ng của b&eacute; th&igrave; ba mẹ c&oacute; thể cất đồ chơi của b&eacute; v&agrave;o một chiếc hộp k&iacute;n kh&ocirc;ng nằm trong tầm mắt của b&eacute; khi học b&agrave;i. Nếu như ba mẹ chỉ c&oacute; thể tạo ra ri&ecirc;ng một khu vực học tập cho b&eacute; trong c&ugrave;ng kh&ocirc;ng gian sinh hoạt chung với gia đ&igrave;nh th&igrave; ba mẹ h&atilde;y đảm bảo g&oacute;c học tập đ&oacute; cũng sẽ kh&ocirc;ng c&oacute; đồ chơi xung quanh hoặc c&aacute;c đồ vật tạo ra &acirc;m thanh l&agrave;m b&eacute; mất tập trung. Trong thời gian học, ba mẹ h&atilde;y tắt v&ocirc; tuyến, hạn chế n&oacute;i chuyện với nhau, hạn chế n&oacute;i chuyện điện thoại hoặc tr&aacute;nh việc lướt mạng x&atilde; hội để b&eacute; kh&ocirc;ng bị xao nh&atilde;ng.&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-3-bai-16" name="phan-3-bai-16"><strong><span style="font-size:20px">Thay đổi c&aacute;ch học để trẻ kh&ocirc;ng thấy nh&agrave;m ch&aacute;n</span></strong></a></h1>

                                    <p style="text-align:justify">H&atilde;y tận dụng hết c&aacute;c t&iacute;nh năng của E&K để cho con &ldquo;một ch&uacute;t bất ngờ&rdquo; sau v&agrave;i lần học. Ba mẹ c&oacute; thể thử:&nbsp;</p>

                                    <ul>
                                        <li style="text-align:justify">Cho trẻ học với tốc độ nhanh/ chậm hơn, hoặc bật chế độ tự động xem nội dung m&agrave; kh&ocirc;ng cần tương t&aacute;c ấn chạm</li>
                                        <li style="text-align:justify">Thay đổi h&igrave;nh thức hiển thị như cho từ hiện ra trước hoặc h&igrave;nh ảnh hiện ra trước</li>
                                        <li style="text-align:justify">Thay đổi c&aacute;ch thức tương t&aacute;c: k&eacute;o sang tr&aacute;i, k&eacute;o l&ecirc;n tr&ecirc;n, k&eacute;o xuống dưới&hellip;</li>
                                        <li style="text-align:justify">Thậm ch&iacute; nếu b&eacute; kh&ocirc;ng hứng th&uacute; với phần Phonics, ba mẹ c&oacute; thể mạnh dạn tắt đi v&agrave; cho b&eacute; thử lại ở những lần sau. Phonics ph&ugrave; hợp nhất với trẻ từ 4 tuổi.</li>
                                    </ul>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><em><strong>Mẹo nhỏ</strong></em>: Ba mẹ n&ecirc;n bật t&iacute;nh năng hạn chế 01 b&agrave;i học cho mỗi lần học. Điều đ&oacute; kh&ocirc;ng những gi&uacute;p trẻ tiếp thu tối đa kiến thức, gi&uacute;p n&atilde;o trẻ c&oacute; thời gian &ldquo;thấm kiến thức&rdquo; v&agrave; t&aacute;i tạo lại c&aacute;c tế b&agrave;o thần kinh, m&agrave; c&ograve;n gi&uacute;p trẻ h&aacute;o hức, &ldquo;kh&aacute;t&rdquo; kiến thức hơn để cảm thấy hứng th&uacute; cho những lần học tới.&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-4-bai-16" name="phan-4-bai-16"><strong><span style="font-size:20px">Kh&ocirc;ng &ldquo;kiểm tra b&agrave;i cũ&rdquo;</span></strong></a></h1>

                                    <p style="text-align:justify">Học tiếng Anh ở trẻ nhỏ n&ecirc;n như một tr&ograve; chơi m&agrave; trẻ cảm thấy hứng th&uacute; khi gi&agrave;nh chiến thắng, thay v&igrave; như một b&agrave;i tập hay nghĩa vụ phải ho&agrave;n th&agrave;nh. Kiểm tra kết quả học tập dễ khiến việc học trở n&ecirc;n căng thẳng, mất đi sự vui vẻ v&agrave; thoải m&aacute;i, yếu tố quan trọng dẫn đến th&agrave;nh c&ocirc;ng trong học tập của trẻ. Ba mẹ h&atilde;y lu&ocirc;n tin tưởng con, cho con thời gian để trải nghiệm, để học tập, để ph&aacute;t triển tự nhi&ecirc;n, v&agrave; để học tập l&agrave; một hoạt động th&uacute; vị trong qu&aacute; tr&igrave;nh ph&aacute;t triển của con.</p>

                                    <p style="text-align:justify"><em><strong>Mẹo nhỏ</strong></em>: Cuối mỗi b&agrave;i học, chương tr&igrave;nh E&K đ&atilde; kh&eacute;o l&eacute;o tạo phần Game để gi&uacute;p c&aacute;c trẻ &ocirc;n lại b&agrave;i học. Ba mẹ h&atilde;y nhớ rằng đ&acirc;y l&agrave; phần thưởng cho trẻ, nếu trẻ kh&ocirc;ng th&iacute;ch th&igrave; c&oacute; thể tắt đi. Đ&acirc;y kh&ocirc;ng phải l&agrave; phần bắt buộc.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631030782/nlbw3gj4nyot0eguwv7z.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-5-bai-16" name="phan-5-bai-16"><strong><span style="font-size:20px">Bắt đầu vui vẻ - Dừng lại h&agrave;o hứng</span></strong></a></h1>

                                    <p style="text-align:justify">Như đ&atilde; ph&acirc;n t&iacute;ch ở tr&ecirc;n, với t&acirc;m l&yacute; của trẻ nhỏ, những thứ dễ nhất l&agrave; những thứ g&acirc;y h&agrave;o hứng nhất. V&igrave; vậy, chỉ n&ecirc;n bắt đầu cho trẻ học tập khi trẻ vui v&agrave; sẵn s&agrave;ng. Khi đ&oacute;, trẻ sẽ &ldquo;bật chế độ&rdquo; t&ograve; m&ograve;, hứng th&uacute; v&agrave; sẵn s&agrave;ng &ldquo;lao v&agrave;o&rdquo; t&igrave;m hiểu kiến thức mới. Mọi thứ l&uacute;c n&agrave;y thật dễ d&agrave;ng với trẻ, v&igrave; đ&acirc;y l&agrave; thời điểm trẻ đ&atilde; sẵn s&agrave;ng.</p>

                                    <p style="text-align:justify">Vậy c&ograve;n dừng lại khi con vẫn c&ograve;n h&agrave;o hứng th&igrave; sao? Ba mẹ cần dừng b&agrave;i học, tiết học lại khi con vẫn c&ograve;n h&agrave;o hứng. &ldquo;Tuyệt chi&ecirc;u&rdquo; n&agrave;y sẽ giữ lại cho trẻ cảm gi&aacute;c muốn được học th&ecirc;m, v&agrave; mong chờ đến buổi học tiếp theo. Đ&acirc;y l&agrave; một trong những c&aacute;ch gi&uacute;p b&eacute; kh&ocirc;ng bị nh&agrave;m ch&aacute;n, v&agrave; đẩy &ldquo;khao kh&aacute;t&rdquo; muốn t&igrave;m hiểu những thứ mới lạ của trẻ l&ecirc;n nhiều bậc mới.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631030907/ye6frktz0dj9fewh7qzp.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><em><strong>Mẹo nhỏ</strong></em>: Ba mẹ kh&ocirc;ng n&ecirc;n mang ứng dụng học tập E&K để dỗ con kh&oacute;c hay xoa dịu con. Nếu l&agrave;m như vậy, trẻ sẽ gắn việc học tập với những cảm x&uacute;c v&agrave; h&agrave;nh động ti&ecirc;u cực, khiến trước những lần học sau, trẻ sẽ c&oacute; những h&agrave;nh động tương tự. Ba mẹ cũng kh&ocirc;ng n&ecirc;n cho con học 3 - 4 b&agrave;i c&ugrave;ng một l&uacute;c. Thời gian đầu b&eacute; c&oacute; thể sẽ rất h&agrave;o hứng, nhưng khi được &ldquo;cho ăn&rdquo; qu&aacute; no v&agrave; qu&aacute; nhiều, b&eacute; sẽ rất nhanh mất đi sự hứng th&uacute; với việc học tập.</p>

                                    <h1 style="text-align:justify"><a id="phan-6-bai-16" name="phan-6-bai-16"><strong><span style="font-size:20px">Kh&ocirc;ng học lại b&agrave;i đ&atilde; học&nbsp;</span></strong></a></h1>

                                    <p style="text-align:justify">Để hiểu được lời khuy&ecirc;n n&agrave;y, ba mẹ cần bắt đầu từ việc hiểu về c&aacute;ch x&acirc;y dựng chương tr&igrave;nh học của E&K.</p>

                                    <p style="text-align:justify">Chương tr&igrave;nh học của E&K được x&acirc;y dựng bởi c&aacute;c chuy&ecirc;n gia ng&ocirc;n ngữ h&agrave;ng đầu của Mỹ v&agrave; Việt Nam, đảm bảo t&iacute;nh kế thừa v&agrave; t&iacute;nh ph&aacute;t triển. C&aacute;c b&agrave;i học c&oacute; t&iacute;nh lặp lại, b&agrave;i học sau kế thừa b&agrave;i học trước, với những t&iacute;nh to&aacute;n kỹ c&agrave;ng, để tần suất lặp lại vừa đủ v&agrave; trải đều ở c&aacute;c b&agrave;i học. T&iacute;nh ph&aacute;t triển được thể hiện ở sự biến h&oacute;a đa dạng trong h&igrave;nh thức thể hiện (m&agrave;u sắc, h&igrave;nh ảnh, giọng đọc&hellip;) với c&ugrave;ng một kiến thức. Điều n&agrave;y gi&uacute;p kiến thức vừa được lặp đi lặp lại m&agrave; vẫn tạo ra được sự hứng th&uacute; v&agrave; mới lạ cho trẻ. V&igrave; vậy, ba mẹ <em><strong><a href="https://www.monkey.edu.vn/ba-me-can-biet/co-nen-cho-con-hoc-lai-bai-hoc-trong-E&K.html">ho&agrave;n to&agrave;n kh&ocirc;ng cần cho trẻ học lại b&agrave;i đ&atilde; học</a></strong></em> m&agrave; vẫn y&ecirc;n t&acirc;m rằng trẻ c&oacute; thể nhớ được kiến thức.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631031598/onm55o4jtsf3wh7mhfvj.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-7-bai-16" name="phan-7-bai-16"><strong><span style="font-size:20px">&Aacute;p dụng phương ph&aacute;p Play-based Learning, đưa kiến thức từ ứng dụng v&agrave;o cuộc sống</span></strong></a></h1>

                                    <p style="text-align:justify">Để những kiến thức con được học c&ugrave;ng E&K&nbsp;trở n&ecirc;n th&uacute; vị v&agrave; bổ &iacute;ch hơn, ba mẹ n&ecirc;n ứng dụng n&oacute; v&agrave;o những hoạt động thực tế h&agrave;ng ng&agrave;y của trẻ. Điều n&agrave;y cũng g&oacute;p phần gi&uacute;p trẻ hứng th&uacute; hơn qua mỗi b&agrave;i học c&ugrave;ng E&K. Ngo&agrave;i ra, ba mẹ c&oacute; thể &aacute;p dụng những tr&ograve; chơi bổ &iacute;ch cho con để trẻ cảm thấy việc học tiếng Anh thật vui vẻ v&agrave; th&uacute; vị.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631031847/h53mluorwlnhsbfxtwnj.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">Tr&ecirc;n đ&acirc;y l&agrave; 6&nbsp;trong v&ocirc; v&agrave;n c&aacute;ch m&agrave; ba mẹ c&oacute; thể s&aacute;ng tạo v&agrave; &aacute;p dụng trong qu&aacute; tr&igrave;nh đồng h&agrave;nh thực tế c&ugrave;ng con. Dạy con lu&ocirc;n l&agrave; hoạt động cần sự b&igrave;nh tĩnh của ba mẹ, niềm tin ở con trẻ, v&agrave; cả kiến thức, trải nghiệm của ch&iacute;nh ba mẹ. H&atilde;y lu&ocirc;n trau dồi kiến thức, để c&ugrave;ng con bước qua những giai đoạn đầu ti&ecirc;n trong cuộc đời, v&agrave; đừng qu&ecirc;n duy tr&igrave; ch&iacute;nh sự hứng th&uacute; trong việc nu&ocirc;i dạy con của m&igrave;nh, ba mẹ nh&eacute;!&nbsp;</p>

                                    <p>&nbsp;</p>

                                    <p>&nbsp;</p>
                                </div>

                                <p>&nbsp;</p>
                            </section>',
                'Author' => 'cuong',
                'created_at' => '2021-09-06 17:00:03',
                'updated_at' => '2021-09-06 17:00:03'
            ],
            [
                'url' => 'vai-tro-cua-ba-me-trong-viec-giup-con-bat-dau-hoc-tieng-anh-hieu-qua-cung-E&K',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631034215/epu8kzzdan9t0zhoucsq.png',
                'categories' => 'huong-dan',
                'title' => 'Vai trò của ba mẹ trong việc giúp con bắt đầu học tiếng Anh hiệu quả cùng',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="monkey-f-bold monkey-fz-30 style-title title">Vai tr&ograve; của ba mẹ trong việc gi&uacute;p con bắt đầu học tiếng Anh hiệu quả c&ugrave;ng J&amp;K</div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 2635 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align:justify"><strong>Thực tế cho thấy, trẻ c&oacute; ba mẹ đồng h&agrave;nh, việc học E&K sẽ c&oacute; hiệu quả vượt trội v&agrave; nhanh ch&oacute;ng hơn so với c&aacute;c trẻ kh&aacute;c chỉ tiếp cận với ứng dụng một m&igrave;nh. Do đ&oacute;, c&aacute;c chuy&ecirc;n gia của Monkey lu&ocirc;n cố gắng lưu &yacute; v&agrave; khuyến kh&iacute;ch ba mẹ d&agrave;nh thời gian c&ugrave;ng con, d&ugrave; chỉ 10 ph&uacute;t mỗi ng&agrave;y.</strong></p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631034215/epu8kzzdan9t0zhoucsq.png" style="width:100%" /></p></div>

                                    <h1 style="text-align:justify"><a id="phan-1-bai-14" name="phan-1-bai-14"><strong><span style="font-size:20px">Nắm vững chương tr&igrave;nh học, phương ph&aacute;p v&agrave; c&aacute;c hướng dẫn học E&K</span></strong></a></h1>

                                    <p style="text-align:justify">L&agrave; người song h&agrave;nh c&ugrave;ng con trong suốt giai đoạn v&agrave;ng của sự ph&aacute;t triển n&atilde;o bộ, ba mẹ l&agrave; nh&acirc;n tố quan trọng ảnh hưởng tới kiến thức v&agrave; tư duy của con. Việc hiểu đủ, hiểu đ&uacute;ng v&agrave; hiểu s&acirc;u về ứng dụng học tập m&agrave; con sắp học, sẽ gi&uacute;p ba mẹ c&oacute; định hướng, kỳ vọng v&agrave; h&agrave;nh xử ph&ugrave; hợp nhất khi con bắt đầu học tiếng Anh.</p>

                                    <p style="text-align:justify">Đầu ti&ecirc;n, ba mẹ cần nắm vững chương tr&igrave;nh học của ứng dụng học tập E&K. Điều n&agrave;y trước hết gi&uacute;p ba mẹ biết được con sẽ được học g&igrave;, được tiếp x&uacute;c với kiến thức n&agrave;o, &aacute;p dụng ti&ecirc;u chuẩn n&agrave;o. Với những ba mẹ chưa từng tiếp x&uacute;c với tiếng Anh, việc nắm vững nội dung học c&ograve;n gi&uacute;p ba mẹ biết được lộ tr&igrave;nh học, từ đ&oacute; c&oacute; thể dễ d&agrave;ng hơn trong việc đồng h&agrave;nh c&ugrave;ng con.&nbsp;</p>

                                    <p style="text-align:justify">Tiếp theo, ba mẹ cần hiểu c&aacute;c phương ph&aacute;p được &aacute;p dụng trong ứng dụng học tập E&K. Nếu chỉ dừng lại ở việc hiểu nội dung, chương tr&igrave;nh học của ứng dụng, m&agrave; kh&ocirc;ng t&igrave;m hiểu th&ecirc;m về phương ph&aacute;p &aacute;p dụng, ba mẹ sẽ dễ d&agrave;ng mắc những lỗi kh&ocirc;ng đ&aacute;ng c&oacute; khi học c&ugrave;ng con. V&iacute; dụ, khi kh&ocirc;ng hiểu r&otilde; về phương ph&aacute;p k&iacute;ch th&iacute;ch n&atilde;o phải v&agrave; chụp h&igrave;nh nguy&ecirc;n từ Glenn Doman v&agrave; c&aacute;ch x&acirc;y dựng chương tr&igrave;nh trong E&K, ba mẹ c&oacute; thể mắc sai lầm cho con học đi học lại một b&agrave;i học, v&ocirc; t&igrave;nh l&agrave;m giảm sự hứng th&uacute; học tập của trẻ - điều tối kỵ khi &aacute;p dụng c&aacute;c phương ph&aacute;p gi&aacute;o dục sớm. T&igrave;m hiểu về phương ph&aacute;p gi&uacute;p ba mẹ hiểu v&agrave; c&oacute; cơ sở hơn trong việc đặt niềm tin v&agrave;o ứng dụng, đồng thời gi&uacute;p ba mẹ c&oacute; những h&agrave;nh động, kỳ vọng ph&ugrave; hợp với trẻ.</p>

                                    <p style="text-align:justify">Cuối c&ugrave;ng, nếu chỉ dừng lại ở chương tr&igrave;nh học v&agrave; phương ph&aacute;p, ba mẹ mới dừng lại ở phần &ldquo;l&yacute; thuyết&rdquo;. Tại sao ư? Bởi hướng dẫn học ch&iacute;nh l&agrave; những trải nghiệm, kinh nghiệm để con khai th&aacute;c được những lợi &iacute;ch tối ưu nhất - được c&aacute;c chuy&ecirc;n gia Monkey đưa ra tr&ecirc;n cơ sở nội dung - phương ph&aacute;p của chương tr&igrave;nh kết hợp với những c&acirc;u chuyện th&agrave;nh c&ocirc;ng m&agrave; cộng đồng học Monkey đ&atilde; &aacute;p dụng thực tế.&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-2-bai-14" name="phan-2-bai-14"><span style="font-size:20px"><strong>Ba mẹ lu&ocirc;n l&agrave; người bạn tốt nhất của con</strong></span></a></h1>

                                    <p style="text-align:justify">Ba mẹ l&agrave; người gần gũi, th&acirc;n thiết, tiếp x&uacute;c h&agrave;ng ng&agrave;y v&agrave; hiểu r&otilde; con nhất trong giai đoạn đầu của sự ph&aacute;t triển. Một ứng dụng d&ugrave; c&oacute; hay v&agrave; hấp dẫn đến mấy cũng kh&ocirc;ng thể thay thể được vai tr&ograve; hướng dẫn v&agrave; định hướng của ba mẹ trong qu&aacute; tr&igrave;nh nu&ocirc;i dạy trẻ.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631032763/diav71jjomwdcqpwsvx3.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">Vai tr&ograve; của Monkey trong qu&aacute; tr&igrave;nh học tập của trẻ, l&agrave; cung cấp chương tr&igrave;nh học khoa học, đạt chuẩn quốc tế, l&agrave; c&ocirc;ng cụ gi&uacute;p ba mẹ v&agrave; trẻ tiếp cận với lượng kiến thức khổng lồ, kỹ năng cần thiết cho cuộc sống sau n&agrave;y. Ba mẹ trong qu&aacute; tr&igrave;nh n&agrave;y đ&oacute;ng vai tr&ograve; định hướng, khơi gợi, hướng dẫn, gi&uacute;p b&eacute; tự tin kh&aacute;m ph&aacute; c&aacute;c kiến thức trong ứng dụng. V&iacute; dụ, ba mẹ c&oacute; thể ngồi c&ugrave;ng con khi học, gợi mở hay đặt c&acirc;u hỏi k&iacute;ch th&iacute;ch sự t&ograve; m&ograve; của trẻ trước mỗi b&agrave;i học, trong mỗi trang của b&agrave;i học, khuyến kh&iacute;ch b&eacute; tương t&aacute;c. Ba mẹ ho&agrave;n to&agrave;n c&aacute;c thể đọc theo những từ được ph&aacute;t &acirc;m trong ứng dụng để khuyến kh&iacute;ch b&eacute; &ldquo;bắt chước&rdquo; theo. H&agrave;nh động n&agrave;y vừa tạo kết nối giữa ba mẹ v&agrave; b&eacute;, vừa khiến b&eacute; th&ecirc;m h&agrave;o hứng khi học tập, biến việc học trở n&ecirc;n th&uacute; vị hơn.</p>

                                    <h1 style="text-align:justify"><a id="phan-2-bai" name="phan-2-bai"><span style="font-size:20px"><strong>Tạo th&oacute;i quen học tập cho con</strong></span></a></h1>

                                    <p style="text-align:justify">&ldquo;Suy nghĩ tạo n&ecirc;n h&agrave;nh động. H&agrave;nh động tạo n&ecirc;n th&oacute;i quen. Th&oacute;i quen tạo n&ecirc;n t&iacute;nh c&aacute;ch. T&iacute;nh c&aacute;ch tạo n&ecirc;n số phận.&rdquo; X&acirc;y dựng được th&oacute;i quen cho trẻ ngay từ nhỏ sẽ x&acirc;y dựng được t&iacute;nh c&aacute;ch của trẻ về sau. Th&oacute;i quen ảnh hưởng trực tiếp đến tương lai của trẻ sau n&agrave;y. C&oacute; được th&oacute;i quen tốt sẽ phần n&agrave;o gi&uacute;p trẻ ph&aacute;t triển tốt hơn.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">Ba mẹ c&oacute; thể h&igrave;nh th&agrave;nh cho trẻ nhỏ th&oacute;i quen học tập từ 3 yếu tố: thời gian học cố định trong ng&agrave;y, thời lượng b&agrave;i học cố định v&agrave; kh&ocirc;ng gian học tập cố định. Đ&acirc;y l&agrave; 3 yếu tố quan trọng gi&uacute;p trẻ nhỏ h&igrave;nh th&agrave;nh th&oacute;i quen học tập từ nhỏ.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631032883/scqjivfulugz9qyftglb.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">Giống như việc tạo th&oacute;i quen ăn - ngủ đ&uacute;ng giờ theo c&aacute;c phương ph&aacute;p nu&ocirc;i con hiện đại, cứ đến một giờ cố định trong ng&agrave;y, ba mẹ h&atilde;y lấy ứng dụng học tập E&K v&agrave; học tập c&ugrave;ng b&eacute; nh&eacute;. Điều n&agrave;y sẽ dần dần ghim v&agrave;o đầu b&eacute; về việc cứ đến khung giờ n&agrave;y l&agrave; sẽ được thực hiện hoạt động học với ba mẹ. Dần dần, b&eacute; sẽ c&oacute; phản xạ trong việc chỉ cần đến khoảng thời gian đ&oacute; sẽ chủ động trong việc thực hiện hoạt động đ&oacute; kh&ocirc;ng cần ba mẹ nhắc. Kh&ocirc;ng gian học tập cố định cũng c&oacute; t&aacute;c dụng như một dấu hiệu b&aacute;o cho trẻ biết về việc sắp được tham gia hoạt động học tập c&ugrave;ng ba mẹ. Thời lượng học tập cố định l&agrave; yếu tố quan trọng trong việc h&igrave;nh th&agrave;nh th&oacute;i quen, m&agrave; lợi &iacute;ch lớn nhất của n&oacute; l&agrave; gi&uacute;p trẻ duy tr&igrave; được hứng th&uacute; học tập của m&igrave;nh. B&ecirc;n cạnh đ&oacute;, việc giữ thời lượng học tập cố định c&ograve;n r&egrave;n cho trẻ khả năng tập trung khi l&agrave;m những c&ocirc;ng việc kh&aacute;c sau n&agrave;y, tr&aacute;nh xao nh&atilde;ng ở trẻ nhỏ.&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-4-bai-14" name="phan-4-bai-14"><strong><span style="font-size:20px">Ki&ecirc;n tr&igrave; l&agrave; ch&igrave;a kh&oacute;a th&agrave;nh c&ocirc;ng&nbsp;</span></strong></a></h1>

                                    <p style="text-align:justify">Nhiều ba mẹ mắc sai lầm khi nghĩ rằng, chỉ cần c&oacute; một c&ocirc;ng cụ tốt, trẻ sẽ th&iacute;ch nghi, cảm thấy hứng th&uacute; v&agrave; c&oacute; hiệu quả học tập ngay trong những lần đầu tiếp x&uacute;c. Đ&acirc;y l&agrave; quan điểm sai lầm phổ biến của người lớn. Trẻ nhỏ cũng giống như những hạt giống, cần được tưới tắm, chăm s&oacute;c v&agrave; cần c&oacute; thời gian để ph&aacute;t triển. &ldquo;Dục tốc bất đạt&rdquo;, ba mẹ n&ecirc;n b&igrave;nh tĩnh v&agrave; ki&ecirc;n tr&igrave; trong qu&aacute; tr&igrave;nh nu&ocirc;i dạy con, đặc biệt l&agrave; trẻ nhỏ.</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631032927/awo36tpyonhqg5r9n1ot.png" style="width:100%" /></p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">Ba mẹ cần hiểu đặc điểm t&acirc;m l&yacute; của lứa tuổi, để hiểu v&agrave; tin tưởng rằng: mọi đứa trẻ đều l&agrave; thần đồng. Niềm tin n&agrave;y sẽ gi&uacute;p ba mẹ b&igrave;nh tĩnh, kh&ocirc;ng n&oacute;ng vội muốn thấy kết quả. Việc sốt ruột mong muốn con c&oacute; sự tiến bộ ngay, khiến ba mẹ dễ sa đ&agrave; v&agrave;o h&agrave;nh động kiểm tra, v&ocirc; t&igrave;nh khiến trẻ thấy &aacute;p lực, mệt mỏi v&agrave; dần kh&ocirc;ng c&ograve;n hứng th&uacute; học tập nữa. Ba mẹ h&atilde;y cứ ki&ecirc;n tr&igrave;, từng ch&uacute;t từng ch&uacute;t một học tập c&ugrave;ng con. Đến một ng&agrave;y kh&ocirc;ng ngờ tới, ba mẹ sẽ h&aacute;i được quả ngọt c&ugrave;ng những bất ngờ về khả năng của con m&igrave;nh.</p>

                                    <p style="text-align:justify">B&ecirc;n cạnh đ&oacute;, nếu trong một giai đoạn học tập n&agrave;o đ&oacute;, b&eacute; mất hứng th&uacute;, kh&ocirc;ng chịu học nữa, ba mẹ cũng cần b&igrave;nh tĩnh, cho con nghỉ 1-2 h&ocirc;m v&agrave; bắt đầu lại. Nếu cứ tiếp tục &aacute;p, chỉ khiến b&eacute; chống đối v&agrave; sợ việc học tập hơn m&agrave; th&ocirc;i. Nhẹ nh&agrave;ng v&agrave; b&igrave;nh tĩnh, kh&eacute;o l&eacute;o bắt đầu lại v&agrave; ki&ecirc;n tr&igrave; với con, ba mẹ v&agrave; con sẽ vượt qua được những giai đoạn kh&oacute; khăn trong h&agrave;nh tr&igrave;nh học tập. Rất nhiều phụ huynh trong cộng đồng ba mẹ đồng h&agrave;nh c&ugrave;ng con học J&amp;K đ&atilde; vượt qua những giai đoạn kh&oacute; khăn trong h&agrave;nh tr&igrave;nh n&agrave;y.</p>

                                    <p style="text-align:justify"><br />
                                        <em><strong>H&agrave;nh tr&igrave;nh đồng h&agrave;nh nu&ocirc;i dạy trẻ lu&ocirc;n l&agrave; h&agrave;nh tr&igrave;nh đầy gian nan nhưng cũng v&ocirc; c&ugrave;ng th&uacute; vị. Ba mẹ cần hiểu được r&otilde; vai tr&ograve; của m&igrave;nh trong h&agrave;nh tr&igrave;nh n&agrave;y, để lu&ocirc;n b&ecirc;n cạnh con, hỗ trợ, định hướng, dắt con đi những bước đầu ti&ecirc;n trong h&agrave;nh tr&igrave;nh n&agrave;y.</strong></em><br />
                                        &nbsp;</p>

                                    <p>&nbsp;</p>
                                </div>
                                &nbsp;

                            </section>',
                'Author' => 'cuong',
                'created_at' => '2021-09-06 17:00:03',
                'updated_at' => '2021-09-06 17:00:03'
            ],
            [
                'url' => 'huong-dan-ba-me-2-cach-khai-thac-bai-hoc-E&K',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631034215/epu8kzzdan9t0zhoucsq.png',
                'categories' => 'huong-dan',
                'title' => 'Hướng dẫn ba mẹ 2 cách khai thác bài học',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="monkey-f-bold monkey-fz-30 style-title title">Hướng dẫn ba mẹ 2 c&aacute;ch khai th&aacute;c b&agrave;i học</div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 2635 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align:justify"><strong>Ngo&agrave;i việc học theo lộ tr&igrave;nh hệ thống b&agrave;i học, ba mẹ c&oacute; thể khai th&aacute;c J&amp;K bằng việc học theo chủ đề. Ba mẹ cũng n&ecirc;n kh&eacute;o l&eacute;o chuyển đổi, kết hợp hai c&aacute;ch học n&agrave;y để mang lại hứng th&uacute; học v&agrave; lợi &iacute;ch tối ưu khi trẻ mới bắt đầu học tiếng Anh với J&amp;K.&nbsp;</strong><br />
                                            &nbsp;</p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631034215/epu8kzzdan9t0zhoucsq.png" style="width:100%" /></p></div>

                                    <h1 style="text-align:justify"><a id="phan-1-bai-15" name="phan-1-bai-15"><strong><span style="font-size:20px">Học theo hệ thống b&agrave;i học</span></strong></a></h1>

                                    <p style="text-align:justify">Với sự nghi&ecirc;n cứu b&agrave;i bản về c&aacute;c phương ph&aacute;p gi&aacute;o dục sớm v&agrave; ph&aacute;t triển ng&ocirc;n ngữ ở trẻ, c&aacute;c chuy&ecirc;n gia của J&amp;K đ&atilde; x&acirc;y dựng hệ thống cấu tr&uacute;c chương tr&igrave;nh học đầy đủ, to&agrave;n diện chia th&agrave;nh ba cấp độ từ Cơ bản, Trung b&igrave;nh tới N&acirc;ng cao. Như vậy, cho d&ugrave; chưa từng tiếp x&uacute;c với tiếng Anh, trẻ vẫn c&oacute; thể dễ d&agrave;ng c&oacute; cho m&igrave;nh một khởi đầu ph&ugrave; hợp nhất. Th&ecirc;m v&agrave;o đ&oacute;, thời lượng c&aacute;c b&agrave;i học cũng được nghi&ecirc;n cứu để ph&ugrave; hợp với khả năng tập trung v&agrave; đảm bảo duy tr&igrave; hứng th&uacute; học của c&aacute;c con.</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631033302/bbacxpduezozuksvo7qp.png" style="width:100%" /></p>

                                    <p style="text-align:justify">Với c&aacute;ch học n&agrave;y, ba mẹ chỉ cần để con học theo lộ tr&igrave;nh m&agrave; c&aacute;c chuy&ecirc;n gia đ&atilde; x&acirc;y dựng. Với cấp độ Cơ bản, trẻ sẽ l&agrave;m quen với từ đơn, bao gồm dạng viết của từ, h&igrave;nh ảnh minh họa v&agrave; ph&aacute;t &acirc;m của từ đ&oacute; theo chuẩn Anh - Mỹ. L&ecirc;n c&aacute;c cấp độ sau, nội dung kiến thức cũng sẽ được điều chỉnh để ph&ugrave; hợp với khả năng ng&ocirc;n ngữ của trẻ. Sau từ đơn, c&aacute;c con sẽ học về cụm từ v&agrave; c&acirc;u ho&agrave;n chỉnh theo đ&uacute;ng năng lực tiếp thu.&nbsp;</p>

                                    <p style="text-align:justify">&nbsp;</p>

                                    <p style="text-align:justify">Nếu lựa chọn phương ph&aacute;p học theo hệ thống b&agrave;i học, để đảm bảo chất lượng buổi học (bao gồm lượng kiến thức m&agrave; b&eacute; tiếp thu được cũng như tinh thần học tập s&ocirc;i nổi, h&agrave;o hứng v&agrave; niềm đam m&ecirc; kh&aacute;m ph&aacute; của b&eacute;), ba mẹ n&ecirc;n cho con học đều đặn mỗi ng&agrave;y, v&agrave; chỉ học 1 b&agrave;i/ng&agrave;y. Việc học tập đều đặn sẽ gi&uacute;p trẻ h&igrave;nh th&agrave;nh th&oacute;i quen với tiếng Anh. Mặt kh&aacute;c, trẻ chỉ n&ecirc;n học 1 b&agrave;i/ng&agrave;y do lượng kiến thức trong mỗi b&agrave;i học đ&atilde; được chuy&ecirc;n gia nghi&ecirc;n cứu v&agrave; t&iacute;nh to&aacute;n vừa đủ, do đ&oacute;, nếu học nhiều hơn, trẻ sẽ dễ bị mệt mỏi v&agrave; gặp kh&oacute; khăn trong việc ghi nhớ. Th&ecirc;m v&agrave;o đ&oacute;, để trẻ lu&ocirc;n c&oacute; th&aacute;i độ học tập t&iacute;ch cực v&agrave; cảm thấy th&ocirc;i th&uacute;c được kh&aacute;m ph&aacute;, t&igrave;m t&ograve;i, ba mẹ n&ecirc;n kết th&uacute;c buổi học khi con vẫn c&ograve;n h&agrave;o hứng.&nbsp;</p>

                                    <h1 style="text-align:justify"><a id="phan-2-bai-15" name="phan-2-bai-15"><strong><span style="font-size:20px">Học theo Chủ đề&nbsp;</span></strong></a></h1>

                                    <p style="text-align:justify">Trong mỗi cấp độ, ngo&agrave;i hệ thống c&aacute;c b&agrave;i học đ&atilde; được x&acirc;y dựng sẵn, kiến thức c&ograve;n được chia th&agrave;nh hệ thống c&aacute;c chủ đề. Hiện nay, kh&oacute;a học tiếng Anh của J&amp;K c&oacute; 48 chủ đề kh&aacute;c nhau. C&aacute;c chủ đề được lựa chọn đều rất gần gũi với c&aacute;c b&eacute; v&agrave; cuộc sống, v&iacute; dụ như Common Animals (Động vật thường thấy), Body parts (C&aacute;c bộ phận cơ thể), Actions (C&aacute;c hoạt động), Vegetables (Rau củ quả),...</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631033569/m81listttu3fwqcn8vxw.png" style="width:100%" /></p>

                                    <p style="text-align:justify">Monkey hiểu rằng, mỗi trẻ lại c&oacute;&nbsp;n&eacute;t t&iacute;nh c&aacute;ch ri&ecirc;ng v&agrave; c&aacute;ch tiếp thu kiến thức cũng rất kh&aacute;c nhau. Do đ&oacute;, ba mẹ c&oacute; thể c&acirc;n nhắc phương ph&aacute;p học theo chủ đề để t&igrave;m ra hướng đi ph&ugrave; hợp với b&eacute; nh&agrave; m&igrave;nh. Đối với trẻ thuộc độ tuổi mầm non, bố mẹ c&oacute; thể chọn những chủ đề m&agrave; con y&ecirc;u th&iacute;ch. Việc n&agrave;y kh&ocirc;ng những khiến trẻ hứng th&uacute; hơn với việc học m&agrave; khả năng tiếp thu của trẻ cũng tốt hơn. Đối với những trẻ đ&atilde; bắt đầu đi học cấp tiểu học, bố mẹ c&oacute; thể ưu ti&ecirc;n chọn những chủ đề trẻ được học ở trường. C&aacute;ch tiếp cận n&agrave;y gi&uacute;p bổ trợ cho việc học tập ở trưởng&nbsp;của trẻ cũng như gi&uacute;p trẻ sẽ cảm thấy th&acirc;n quen khi tiếp x&uacute;c với chủ đề đ&oacute; lần thứ hai.</p>

                                    <p style="text-align:justify">Học theo chủ đề l&agrave; phương ph&aacute;p k&iacute;ch th&iacute;ch hứng th&uacute; học tập của trẻ, cũng như mang lại cho trẻ kho từ vựng phong ph&uacute;, c&oacute; t&iacute;nh ứng dụng cao. Để ứng dụng hiệu quả hoạt động học theo chủ đề v&agrave; gi&uacute;p trẻ tiến bộ, ba mẹ n&ecirc;n cho con học 1 chủ đề/ng&agrave;y. Cũng giống như hệ thống c&aacute;c b&agrave;i học, khối lượng từ vựng trong mỗi chủ đề đều đ&atilde; được c&acirc;n nhắc bởi c&aacute;c chuy&ecirc;n gia về ng&ocirc;n ngữ, do đ&oacute;, ba mẹ h&atilde;y để con tự do kh&aacute;m ph&aacute; chủ đề con th&iacute;ch, nhưng khi con kết th&uacute;c chủ đề đ&oacute;, khoảng thời gian nghỉ ngơi l&agrave; rất cần thiết v&agrave; con c&oacute; thể tiếp tục v&agrave;o ng&agrave;y h&ocirc;m sau.</p>

                                    <h1 style="text-align:justify"><a id="phan-3-bai-15" name="phan-3-bai-15"><strong><span style="font-size:20px">Phối hợp 2 c&aacute;ch học để mang lại hiệu quả tốt nhất&nbsp;</span></strong></a></h1>

                                    <p style="text-align:justify">Thi&ecirc;n t&iacute;nh của con trẻ l&agrave; lu&ocirc;n bị thu h&uacute;t v&agrave; c&oacute; niềm đam m&ecirc; m&atilde;nh liệt với sự mới mẻ. Do đ&oacute;, để đạt được hiệu quả tối ưu trong học tập, c&aacute;c phương ph&aacute;p học cũng n&ecirc;n được kết hợp linh hoạt thay v&igrave; cứng nhắc v&agrave; lặp đi lặp lại. Đối với J&amp;K, ba mẹ c&oacute; thể thay đổi linh hoạt giữa c&aacute;ch học theo b&agrave;i học v&agrave; c&aacute;ch học theo c&aacute;c chủ đề.</p>

                                    <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631033602/iyifdrd1yseo7tk0diwy.png" style="width:100%" /></p>

                                    <p style="text-align:justify">Nếu trẻ mới bắt đầu l&agrave;m quen với tiếng Anh hoặc lần đầu sử dụng J&amp;K, ba mẹ c&oacute; thể cho con học theo hệ thống c&aacute;c b&agrave;i học đ&atilde; được chuy&ecirc;n gia ng&ocirc;n ngữ của chương tr&igrave;nh thiết kế sẵn. Với c&aacute;ch học n&agrave;y, con sẽ bước đầu tạo th&oacute;i quen học tập mỗi ng&agrave;y v&agrave; dần th&iacute;ch ứng với phương ph&aacute;p gi&aacute;o dục m&agrave; J&amp;K ứng dụng. Sau một thời gian, ba mẹ c&oacute; thể chuyển sang c&aacute;ch học theo chủ đề để khơi dậy hứng th&uacute; cho con.&nbsp;</p>

                                    <p style="text-align:justify">Ngo&agrave;i ra, ba mẹ c&oacute; thể thay đổi lu&acirc;n phi&ecirc;n hai c&aacute;ch học theo ng&agrave;y. Như vậy, tất cả c&aacute;c từ vựng m&agrave; trẻ được học trong phần b&agrave;i học của ng&agrave;y h&ocirc;m trước đều sẽ được củng cố v&agrave; &ocirc;n tập lại lần nữa trong phần chủ đề v&agrave;o ng&agrave;y h&ocirc;m sau. Quan trọng hơn cả, c&aacute;ch kết hợp n&agrave;y sẽ gi&uacute;p con nắm vững kiến thức nhưng kh&ocirc;ng khiến con cảm thấy nh&agrave;m ch&aacute;n.</p>

                                    <p style="text-align:justify">Một điều nữa m&agrave; c&aacute;c chuy&ecirc;n gia của Monkey lu&ocirc;n muốn nhắc ba mẹ: Ở giai đoạn n&agrave;y, sự đồng h&agrave;nh c&ugrave;ng con của ba mẹ đ&oacute;ng vai tr&ograve; quan trọng nhất. Do đ&oacute;, ba mẹ h&atilde;y cố gắng sắp xếp thời gian để ngồi c&ugrave;ng con mỗi lần học Monkey, khuyến kh&iacute;ch con tương t&aacute;c với b&agrave;i học, cũng như khen thưởng khi con học tốt.&nbsp;</p>

                                    <p style="text-align:justify"><br />
                                        <em><strong>Ch&uacute;c ba mẹ v&agrave; c&aacute;c con c&oacute; những khoảng thời gian học hiệu quả c&ugrave;ng J&amp;K. Cảm ơn ba mẹ đ&atilde; c&ugrave;ng Monkey bồi dưỡng những bạn nhỏ hiểu biết v&agrave; hạnh ph&uacute;c.&nbsp;</strong></em><br />
                                        &nbsp;</p>
                                </div>
                            </section>',
                'Author' => 'cuong',
                'created_at' => '2021-09-06 17:00:03',
                'updated_at' => '2021-09-06 17:00:03'
            ],
            [
                'url' => 'E&K-ap-dung-phuong-phap-trao-the-nhanh-glenn-doman-nhu-the-nao',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631035123/ezck4dmabsilbjc0oyzc.png',
                'categories' => 'phuong-phap',
                'title' => 'E&K áp dụng phương pháp tráo thẻ nhanh Glenn Doman như thế nào?',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="monkey-f-bold monkey-fz-30 style-title title">E&amp;K &aacute;p dụng phương ph&aacute;p tr&aacute;o thẻ nhanh Glenn Doman như thế n&agrave;o?</div>

                                <div class="d-flex justify-content-between mt-3 mt-lg-4 new-header">
                                    <ul>
                                        <li>2430 Lượt xem</li>
                                    </ul>

                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                    <div class="new-body">
                                        <div class="mb-3">
                                            <p style="text-align:justify"><strong>Ti&ecirc;n phong tại Việt Nam trong việc sử dụng c&aacute;c phương ph&aacute;p gi&aacute;o dục sớm v&agrave;o việc dạy học tiếng Anh cho trẻ em, E&amp;K sẽ gi&uacute;p ba mẹ &aacute;p dụng Glenn Doman - một trong những phương ph&aacute;p gi&aacute;o dục sớm nổi tiếng nhất một c&aacute;ch dễ d&agrave;ng, đ&uacute;ng c&aacute;ch với chi ph&iacute; b&igrave;nh d&acirc;n để gi&uacute;p trẻ bắt đầu học tiếng Anh dễ d&agrave;ng, hiệu quả hơn.&nbsp;</strong><br />
                                                &nbsp;</p>
                                        </div>
                                        <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631035123/ezck4dmabsilbjc0oyzc.png" style="width:100%" /></p></div>

                                        <h1 style="text-align:justify"><span style="font-size:20px"><a id="phan-1-bai-9" name="phan-1-bai-9"><strong>Phương ph&aacute;p Glenn Doman l&agrave; g&igrave;?</strong></a></span></h1>

                                        <p style="text-align:justify">Phương ph&aacute;p n&agrave;y được đặt t&ecirc;n theo t&aacute;c giả của n&oacute; - gi&aacute;o sư Glenn Doman. &Ocirc;ng l&agrave; một nh&agrave; vật l&yacute; trị liệu nổi tiếng ở Mỹ, đồng thời cũng l&agrave; nh&agrave; s&aacute;ng lập Viện nghi&ecirc;n cứu v&agrave; ph&aacute;t triển tiềm năng con người (The Institutes for the Achievement of Human Potential - Hoa K&igrave;).</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630949126/pblicty7oi2smvwr94t8.png" style="width:100%" /></p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Sau hơn nửa thế kỉ kh&ocirc;ng ngừng nghi&ecirc;n cứu về sự ph&aacute;t triển n&atilde;o bộ của trẻ em v&agrave; c&aacute;ch k&iacute;ch th&iacute;ch sự th&ocirc;ng minh của trẻ ngay từ khi mới lọt l&ograve;ng, gi&aacute;o sư Glenn Doman đ&atilde; gi&uacute;p cho h&agrave;ng triệu ba mẹ tr&ecirc;n khắp thế giới biết c&aacute;ch để ph&aacute;t huy tối đa tiềm năng của con th&ocirc;ng qua c&aacute;c flashcard v&agrave; dot card.</p>

                                        <p style="text-align:justify">H&igrave;nh thức cho trẻ học bằng flashcard v&agrave; dot card dựa tr&ecirc;n khả năng chụp h&igrave;nh nguy&ecirc;n mảng (Whole-word) của con người, khả năng n&agrave;y đặc biệt nổi trội khi c&ograve;n b&eacute;. Hiểu một c&aacute;ch đơn giả, chụp h&igrave;nh nguy&ecirc;n mảng hay nguy&ecirc;n từ l&agrave; một phương ph&aacute;p học đọc m&agrave; ở đ&oacute; trẻ được học từ vựng th&ocirc;ng qua việc nh&igrave;n mặt chữ v&agrave; h&igrave;nh ảnh đại diện cho nghĩa của từ đ&oacute;.&nbsp;</p>

                                        <p style="text-align:justify">Phương ph&aacute;p n&agrave;y được dựa tr&ecirc;n nền tảng của phương ph&aacute;p học kiến tạo Constructivism - tập trung v&agrave;o khả năng tự kiến tạo kiến thức của người học th&ocirc;ng qua qu&aacute; tr&igrave;nh tiếp x&uacute;c li&ecirc;n tục với kiến thức. C&aacute;c nh&agrave; ph&aacute;t minh ra phương ph&aacute;p chụp h&igrave;nh nguy&ecirc;n từ tin rằng, trẻ con - với bộ n&atilde;o đang trong qu&aacute; tr&igrave;nh ph&aacute;t triển vượt bậc sẽ c&oacute; thể tự x&acirc;y dựng c&aacute;c kh&aacute;i niệm mới dựa tr&ecirc;n nền tảng kiến thức v&agrave; trải nghiệm cũ.</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630949156/lhzuzz40l7i6upalix0u.png" style="width:100%" /></p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Theo như nghi&ecirc;n cứu của gi&aacute;o sư Glenn Doman, từ 0 đến 6 tuổi l&agrave; giai đoạn v&agrave;ng cho sự ph&aacute;t triển vượt bậc của n&atilde;o bộ. Khoảng thời gian n&agrave;y được coi l&agrave; &ldquo;cửa sổ cơ hội&rdquo;, v&agrave; cơ hội chỉ đến một lần! Nếu như ba mẹ biết c&aacute;ch tận dụng thời điểm n&agrave;y đ&uacute;ng c&aacute;ch th&igrave; sẽ c&oacute; thể khai ph&oacute;ng tiềm năng v&ocirc; hạn của con. Ngược lại, khi đ&atilde; bỏ qua giai đoạn v&agrave;ng n&agrave;y, ba mẹ v&agrave; trẻ sẽ mất nhiều c&ocirc;ng sức nhiều hơn trong tương lai m&agrave; hiệu quả lại kh&ocirc;ng thể bằng.&nbsp;Th&ocirc;ng qua h&igrave;nh ảnh ch&acirc;n thực v&agrave; video mi&ecirc;u tả sống động, trẻ sẽ tự ghi nhớ được c&aacute;c từ, d&ugrave; cho đ&oacute; l&agrave; những từ d&agrave;i hay ngắn. Đặc biệt, sau khi tiếp x&uacute;c với một lượng từ vựng đủ lớn, trẻ sẽ c&oacute; thể tự t&igrave;m ra quy luật về c&aacute;ch đọc c&aacute;c từ. Sau n&agrave;y, với c&aacute;c từ tương tự, trẻ cũng c&oacute; thể tự ph&aacute;t &acirc;m được bằng việc &aacute;p dụng c&aacute;c quy luật n&agrave;y.&nbsp;</p>

                                        <p style="text-align:justify">Hơn thế, phương ph&aacute;p chụp h&igrave;nh nguy&ecirc;n từ trong E&amp;K c&ograve;n gi&uacute;p trẻ một phần rất lớn trong qu&aacute; tr&igrave;nh học từ. Trẻ chỉ được coi l&agrave; đ&atilde; học được 1 từ vựng khi nhớ được mặt chữ c&ugrave;ng c&aacute;ch đọc v&agrave; nghĩa của từ đ&oacute;. V&iacute; dụ, khi trẻ học từ &ldquo;pen&quot;, trẻ sẽ được nh&igrave;n mặt chữ &ldquo;pen&rdquo; đi c&ugrave;ng với h&igrave;nh ảnh c&aacute;i b&uacute;t. Sau số lần tiếp x&uacute;c đủ nhiều qua c&aacute;c thẻ Flash card, trẻ sẽ tự h&igrave;nh th&agrave;nh trong đầu h&igrave;nh ảnh c&aacute;i b&uacute;t khi nh&igrave;n thấy từ &ldquo;pen&quot;, đồng thời trẻ sẽ tự nhi&ecirc;n ghi nhớ c&aacute;ch đọc từ &ldquo;pen&quot; v&agrave; tự suy ra quy luật ph&aacute;t &acirc;m cho những từ c&oacute; h&igrave;nh th&aacute;i tương tự.&nbsp;</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p><a id="phan-2-bai-9" name="phan-2-bai-9"><span style="font-size:20px"><strong>E&amp;K &aacute;p dụng phương ph&aacute;p Glenn Doman như thế n&agrave;o?</strong></span></a><br />
                                            &nbsp;</p>

                                        <p>Như đ&atilde; n&oacute;i, Glenn Doman đề xuất một phương ph&aacute;p dạy th&ocirc;ng qua Flashcard (học từ) v&agrave; Dot card (học to&aacute;n). Về Dot card, ba mẹ c&oacute; thể gặp trong ứng dụng Monkey Math ở hai cấp độ đầu ti&ecirc;n, đ&oacute; l&agrave; Pre-K v&agrave; K. Trong khi đ&oacute;, E&amp;K lựa chọn &aacute;p dụng Flashcard. Ba mẹ c&oacute; thể t&igrave;m thấy phần Flashcard n&agrave;y sau phần Multisensory ở mỗi b&agrave;i học của E&amp;K.</p>

                                        <p>L&agrave; một trong những phương ph&aacute;p gi&aacute;o dục sớm xuất hiện đầu ti&ecirc;n tr&ecirc;n thế giới, Glenn Doman kh&ocirc;ng c&ograve;n qu&aacute; xa lạ với nhiều phụ huynh. Tuy nhi&ecirc;n, nhiều ba mẹ vẫn gặp phải những sai lầm cơ bản khi &aacute;p dụng phương ph&aacute;p n&agrave;y, đặc biệt l&agrave; khi d&ugrave;ng Flashcard.&nbsp;C&oacute; ba mẹ chỉ t&igrave;m mua những thẻ từ đẹp, hợp mắt m&igrave;nh v&igrave; nghĩ thẻ từ n&agrave;o chẳng như nhau, m&agrave; kh&ocirc;ng nhận thức được rằng, c&aacute;c thẻ từ của Glenn Doman đều cần tu&acirc;n theo những nguy&ecirc;n tắc nhất định.&nbsp;</p>

                                        <h1 style="text-align:justify"><span style="font-size:20px"><strong><a id="phan-3-bai-9" name="phan-3-bai-9">Lợi &iacute;ch&nbsp;phương ph&aacute;p&nbsp;mang lại khi trẻ học E&amp;K</a></strong></span></h1>

                                        <p style="text-align:justify"><br />
                                            <em><strong>Tiết kiệm thời gian, c&ocirc;ng sức v&agrave; chi ph&iacute; cho ba mẹ:</strong></em></p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630949156/lhzuzz40l7i6upalix0u.png" style="width:100%" /></p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Đầu ti&ecirc;n, lựa chọn E&amp;K l&agrave; ba mẹ đ&atilde; gi&uacute;p con được tiếp cận với phương ph&aacute;p Glenn Doman ch&iacute;nh thống m&agrave; kh&ocirc;ng cần mất qu&aacute; nhiều c&ocirc;ng sức, thời gian v&agrave; chi ph&iacute;. Việc in &eacute;p thẻ học cần rất nhiều nỗ lực của ba mẹ để duy tr&igrave; l&acirc;u d&agrave;i. Mua ngo&agrave;i thẻ học cũng kh&ocirc;ng hề rẻ, trong khi ba mẹ c&ograve;n phải t&igrave;m hiểu kỹ để biết thẻ học đ&atilde; đ&uacute;ng ti&ecirc;u chuẩn của phương ph&aacute;p Glenn Doman hay chưa. Thẻ học kh&ocirc;ng chuẩn sẽ dẫn đến nhiều hệ lụy, kh&ocirc;ng chỉ kh&ocirc;ng thể gi&uacute;p con học tốt, m&agrave; c&ograve;n ảnh hưởng đến sự hứng th&uacute; v&agrave; &ldquo;l&agrave;m nhiễu&rdquo; kiến thức của con.&nbsp;</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify"><em><strong>Gi&uacute;p trẻ học từ vựng tiếng Anh nhanh v&agrave; hiệu quả</strong></em></p>

                                        <p style="text-align:justify"><br />
                                            <img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630949207/g1dntf5oy4xreojmiami.png" style="width:100%" /></p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Với lượng từ vựng khổng lồ được sắp xếp theo chủ đề, việc học theo Flashcard gi&uacute;p trẻ c&oacute; thể học đến 12 từ vựng trong mỗi b&agrave;i học, v&agrave; khi ho&agrave;n th&agrave;nh E&amp;K, trẻ c&oacute; thể nắm chắc đến hơn 3000 từ vựng để d&ugrave;ng trong giao tiếp v&agrave; học tập.&nbsp;</p>

                                        <p style="text-align:justify"><em><strong>Gi&uacute;p trẻ tư duy trực diện tiếng Anh</strong></em><br />
                                            <br />
                                            <img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630949229/wrqc3lzhddx3hujlt4xy.png" style="width:100%" /></p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Thay v&igrave; c&aacute;ch học từ vựng từ tiếng Anh k&egrave;m giải nghĩa tiếng Việt như ba mẹ thường thấy ở Việt Nam, h&igrave;nh thức Flashcard của Glenn Doman cho ph&eacute;p E&amp;K định nghĩa từ bằng h&igrave;nh ảnh. Mỗi từ vựng của E&amp;K đều được minh họa bằng c&aacute;c video v&agrave; h&igrave;nh ảnh sinh động, gi&uacute;p trẻ tư duy trực diện tiếng Anh. Th&ecirc;m v&agrave;o đ&oacute;, với c&ocirc;ng nghệ để lưu trữ v&agrave; xử l&yacute; th&ocirc;ng tin trong qu&aacute; tr&igrave;nh học của trẻ, E&amp;K sẽ gi&uacute;p c&aacute;c con được &ocirc;n tập c&aacute;c từ vựng theo đ&uacute;ng lộ tr&igrave;nh ph&ugrave; hợp với con.&nbsp;</p>

                                        <p style="text-align:justify"><em><strong>Hy vọng ba mẹ đ&atilde; hiểu hơn về phương ph&aacute;p Glenn Doman cũng như hiểu r&otilde; hơn về chương tr&igrave;nh học của E&amp;K qua b&agrave;i viết n&agrave;y. Ch&uacute;c ba mẹ v&agrave; c&aacute;c con c&oacute; những khoảng thời gian vui học thật hiệu quả c&ugrave;ng E&amp;K.</strong></em></p>

                                        <p>&nbsp;</p>
                                    </div>
                            </section>',
                'Author' => 'hưng',
                'created_at' => '2021-09-05 15:35:47',
                'updated_at' => '2021-09-05 15:35:47'
            ],
            [
                'url' => 'phuong-phap-phonics-kich-thich-toi-da-tu-duy-va-tiem-nang-cua-nao-trai',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631035281/vij3vmonq78usexzl07u.png',
                'categories' => 'phuong-phap',
                'title' => 'Phương pháp Phonics kích thích tối đa tư duy và tiềm năng của não trái',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="monkey-f-bold monkey-fz-30 style-title title">Phương ph&aacute;p Phonics k&iacute;ch th&iacute;ch tối đa tư duy v&agrave; tiềm năng của n&atilde;o tr&aacute;i</div>

                                <div class="d-flex justify-content-between mt-3 mt-lg-4 new-header">
                                    <ul>
                                        <li>934 Lượt xem</li>
                                    </ul>

                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>

                                    <div class="new-body">
                                        <div class="mb-3">
                                            <p style="text-align:justify"><strong>Phương ph&aacute;p phonics dạy trẻ b&oacute;c t&aacute;ch từ ngữ để tập đ&aacute;nh vần. Việc kết hợp phương ph&aacute;p Phonics với c&aacute;c phương ph&aacute;p Glenn Doman một c&aacute;ch&nbsp;nhịp nh&agrave;ng trong E&amp;K&nbsp;mang lại hiệu quả tối đa&nbsp;cho trẻ mới bắt đầu học tiếng Anh.&nbsp;</strong><br />
                                                &nbsp;</p>
                                        </div>
                                        <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631035281/vij3vmonq78usexzl07u.png" style="width:100%" /></p></div>

                                        <h1 style="text-align:justify"><a id="phan-1-bai-10" name="phan-1-bai-10"><span style="font-size:20px"><strong>1. T&igrave;m hiểu về phương ph&aacute;p Phonics trong E&amp;K</strong></span></a></h1>

                                        <p style="text-align:justify">Phương ph&aacute;p Phonics trong E&amp;K được x&acirc;y dựng dựa tr&ecirc;n phương ph&aacute;p Synthetic Phonics hay c&ograve;n gọi l&agrave; phương ph&aacute;p t&aacute;ch gh&eacute;p đ&aacute;nh vần tiếng Anh tổng hợp. Cụ thể hơn, trong phương ph&aacute;p Synthetic Phonics, c&aacute;c từ được t&aacute;ch ra th&agrave;nh c&aacute;c đơn vị nhỏ hơn gọi l&agrave; &acirc;m vị, sau đ&oacute; được gh&eacute;p c&aacute;c &acirc;m vị với nhau để đ&aacute;nh vần từ đ&oacute;.&nbsp;</p>

                                        <p style="text-align:justify">V&iacute; dụ từ &ldquo;dog&quot; sẽ được t&aacute;ch ra th&agrave;nh c&aacute;c đơn vị nhỏ hơn (gọi l&agrave; &acirc;m vị) l&agrave; d-o-g. Sau đ&oacute;, trẻ sẽ gh&eacute;p c&aacute;c &acirc;m vị đ&oacute; với nhau để đọc th&agrave;nh từ &ldquo;dog&quot;. Trong phần Phonics của E&amp;K, trẻ sẽ được học t&ecirc;n chữ c&aacute;i v&agrave; c&aacute;c &acirc;m đại diện của ch&uacute;ng. Bằng phương ph&aacute;p n&agrave;y, trẻ sẽ c&oacute; thể nhận biết được c&aacute;c chữ c&aacute;i với c&aacute;c &acirc;m đại diện như chữ &ldquo;b&quot; sẽ kh&ocirc;ng được đọc l&agrave; &acirc;m &ldquo;bi&quot; m&agrave; phải l&agrave; &acirc;m /b/ hay chữ &ldquo;c&quot; sẽ được ph&aacute;t &acirc;m l&agrave; /k/ thay v&igrave; t&ecirc;n chữ c&aacute;i l&agrave; &ldquo;ci&quot;. Khi đ&atilde; th&agrave;nh thạo 44 quy tắc Phonics, trẻ c&oacute; thể tự m&igrave;nh giải m&atilde; c&aacute;c &acirc;m trong từ mới, &nbsp;sau đ&oacute; tự gh&eacute;p c&aacute;c &acirc;m với nhau để ph&aacute;t &acirc;m được ch&iacute;nh x&aacute;c hoặc gần ch&iacute;nh x&aacute;c c&aacute;c từ mới cho d&ugrave; trẻ c&oacute; thể chưa gặp bao giờ.&nbsp;</p>

                                        <h1 style="text-align:justify"><a id="phan-2-bai-10" name="phan-2-bai-10"><span style="font-size:20px"><strong>2. Chụp h&igrave;nh nguy&ecirc;n từ xuất hiện trong phương ph&aacute;p Glenn Doman&nbsp;ở&nbsp;E&amp;K</strong></span></a></h1>

                                        <p style="text-align:justify">N&oacute;i một c&aacute;ch đơn giản th&igrave; phương ph&aacute;p chụp h&igrave;nh nguy&ecirc;n từ l&agrave; một phương ph&aacute;p học đọc m&agrave; ở đ&oacute; trẻ được học từ vựng th&ocirc;ng qua việc nh&igrave;n mặt chữ v&agrave; h&igrave;nh ảnh đại diện cho nghĩa của từ đ&oacute;. Kh&aacute;c với phương ph&aacute;p đ&aacute;nh vần, người học thay v&igrave; được dạy b&oacute;c t&aacute;ch một từ th&agrave;nh nhiều th&agrave;nh tố rồi gh&eacute;p lại để học từ, th&igrave; ở phương ph&aacute;p n&agrave;y, người học được dạy &ldquo;copy&rdquo; lại to&agrave;n bộ c&aacute;ch đọc v&agrave; to&agrave;n bộ mặt chữ của từ đ&oacute;.&nbsp;</p>

                                        <p style="text-align:justify">Trong E&amp;K, th&ocirc;ng qua h&igrave;nh ảnh ch&acirc;n thực v&agrave; video mi&ecirc;u tả sống động, trẻ sẽ tự ghi nhớ được c&aacute;c từ, d&ugrave; cho đ&oacute; l&agrave; những từ d&agrave;i hay ngắn. Đặc biệt, sau khi tiếp x&uacute;c với một lượng từ vựng đủ lớn, trẻ sẽ c&oacute; thể tự t&igrave;m ra quy luật về c&aacute;ch đọc c&aacute;c từ. Sau n&agrave;y, với c&aacute;c từ tương tự, trẻ cũng c&oacute; thể tự ph&aacute;t &acirc;m được bằng việc &aacute;p dụng c&aacute;c quy luật n&agrave;y.&nbsp;<br />
                                            Hơn thế, phương ph&aacute;p chụp h&igrave;nh nguy&ecirc;n từ trong E&amp;K c&ograve;n gi&uacute;p trẻ một phần rất lớn trong qu&aacute; tr&igrave;nh học từ. &nbsp;Trẻ chỉ được coi l&agrave; đ&atilde; học được 1 từ vựng khi nhớ được mặt chữ c&ugrave;ng c&aacute;ch đọc v&agrave; nghĩa của từ đ&oacute;. V&iacute; dụ, khi trẻ học từ &ldquo;dog&quot;, trẻ sẽ được nh&igrave;n mặt chữ &ldquo;dog&rdquo; đi c&ugrave;ng với h&igrave;nh ảnh con ch&oacute;. Sau số lần tiếp x&uacute;c đủ nhiều, th&igrave; trẻ sẽ tự h&igrave;nh th&agrave;nh trong đầu h&igrave;nh ảnh con ch&oacute; khi nh&igrave;n thấy từ &ldquo;dog&quot;, đồng thời trẻ sẽ tự nhi&ecirc;n ghi nhớ c&aacute;ch đọc từ &ldquo;dog&quot; v&agrave; tự suy ra quy luật ph&aacute;t &acirc;m cho những từ c&oacute; h&igrave;nh th&aacute;i tương tự.&nbsp;</p>

                                        <h1 style="text-align:justify"><a id="phan-3-bai-10" name="phan-3-bai-10"><span style="font-size:20px"><strong>3. E&amp;K kết hợp hai phương ph&aacute;p n&agrave;y như thế n&agrave;o v&agrave; lợi &iacute;ch mang lại cho trẻ ra sao?&nbsp;</strong></span></a></h1>

                                        <p style="text-align:justify">Sau khi đ&atilde; hiểu về từng phương ph&aacute;p, ba mẹ c&oacute; thể thấy, hai phương ph&aacute;p chụp h&igrave;nh nguy&ecirc;n từ trong Glenn Doman v&agrave; Phonics về bản chất l&agrave; kh&aacute;c nhau. Một mặt, chụp h&igrave;nh nguy&ecirc;n từ hướng đến khả năng nhận biết &acirc;m th&ocirc;ng qua qu&aacute; tr&igrave;nh tiếp x&uacute;c với số lượng đủ lớn c&aacute;c từ, đồng thời gi&uacute;p trẻ gắn h&igrave;nh ảnh &yacute; nghĩa của từ đ&oacute; với mặt chữ của từ. Mặt kh&aacute;c, phương ph&aacute;p Phonics lại gi&uacute;p trẻ học về mối quan hệ giữa &acirc;m v&agrave; mặt chữ để từ đ&oacute; trẻ c&oacute; thể chủ động t&aacute;ch gh&eacute;p để đ&aacute;nh vần c&aacute;c từ mới.&nbsp;</p>

                                        <p style="text-align:justify">Mỗi phương ph&aacute;p đều c&oacute; những mặt tốt v&agrave; hạn chế ri&ecirc;ng. Với phương ph&aacute;p chụp h&igrave;nh nguy&ecirc;n từ, trẻ c&oacute; thể bị bối rối khi gặp từ mới, kh&ocirc;ng r&otilde; c&aacute;ch ph&aacute;t &acirc;m như thế n&agrave;o khi trẻ chưa tự tổng hợp được c&aacute;c quy luật ph&aacute;t &acirc;m trong n&atilde;o bộ. Với phương ph&aacute;p Phonics, trẻ chủ động ph&aacute;t &acirc;m nhờ c&aacute;c quy tắc ph&aacute;t &acirc;m nhưng trẻ lại kh&ocirc;ng được tiếp x&uacute;c với phần nghĩa v&agrave; h&igrave;nh ảnh của từ.</p>

                                        <p style="text-align:justify">Để c&oacute; thể khắc phục được những hạn chế v&agrave; ph&aacute;t huy tối đa được mặt lợi của mỗi phương ph&aacute;p, c&aacute;c chuy&ecirc;n gia đ&atilde; kết hợp cả hai phương ph&aacute;p trong chương tr&igrave;nh học của E&amp;K. C&aacute;c b&eacute; sẽ được học &ldquo;chụp h&igrave;nh nguy&ecirc;n từ&quot; ở phần Multisensory - nơi m&agrave; c&aacute;c từ được viết ra tr&ecirc;n m&agrave;n h&igrave;nh k&egrave;m h&igrave;nh ảnh minh hoạ v&agrave; c&aacute;ch ph&aacute;t &acirc;m của từ. Sau khi &ldquo;chụp h&igrave;nh nguy&ecirc;n từ&quot;, trẻ sẽ được học đến phần Phonics ở phần học c&ugrave;ng t&ecirc;n. Tại đ&acirc;y, trẻ sẽ được tiếp x&uacute;c với c&aacute;c quy tắc Phonics nhất định. Phương ph&aacute;p học kết hợp n&agrave;y được hầu hết c&aacute;c lớp học đọc ở Mỹ &aacute;p dụng, gi&uacute;p c&aacute;c b&eacute; c&oacute; thể vừa được tiếp x&uacute;c với c&aacute;c quy tắc ph&aacute;t &acirc;m vừa được học về nghĩa v&agrave; h&igrave;nh ảnh của từ vựng b&eacute; đ&atilde; học.&nbsp;</p>

                                        <p style="text-align:justify">Mặt kh&aacute;c, c&oacute; một lưu &yacute; l&agrave; n&atilde;o bộ trẻ giai đoạn dưới 3 tuổi chưa thực sự ph&ugrave; hợp để học được c&aacute;c quy tắc Phonics. Do đ&oacute;, với c&aacute;c b&eacute; dưới 3 tuổi, nếu c&aacute;c con kh&ocirc;ng th&iacute;ch học phần Phonics, ba mẹ ho&agrave;n to&agrave;n c&oacute; thể v&agrave;o phần C&agrave;i đặt để tắt phần học n&agrave;y. Thay v&agrave;o đ&oacute;, trước 3 tuổi, Whole words hay chụp h&igrave;nh nguy&ecirc;n từ l&agrave; phương ph&aacute;p m&agrave; ba mẹ n&ecirc;n tận dụng tối đa. Sau 3 tuổi, ba mẹ c&oacute; thể cho con tiếp cận phương ph&aacute;p Phonics b&agrave;i bản v&agrave; to&agrave;n diện, tập trung hơn nữa với chương tr&igrave;nh học Monkey Phonics trong Monkey Stories, ba mẹ nh&eacute;!&nbsp;</p>

                                        <p>&nbsp;</p>
                                    </div>
                            </section>',
                'Author' => 'hưng',
                'created_at' => '2021-09-05 15:35:47',
                'updated_at' => '2021-09-05 15:35:47'
            ],
            [
                'url' => 'phuong-phap-da-giac-quan-trong-E&K-huy-dong-tat-ca-giac-quan-cua-tre-vao-bai-hoc',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1630948636/cq2jotnhsxqsjvtr0mjg.png',
                'categories' => 'phuong-phap',
                'title' => 'Phương pháp “Đa giác quan” trong E&K - huy động tất cả giác quan của trẻ vào bài học',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="monkey-f-bold monkey-fz-30 style-title title">Phương ph&aacute;p &ldquo;Đa gi&aacute;c quan&rdquo; trong E&amp;K - huy động tất cả gi&aacute;c quan của trẻ v&agrave;o b&agrave;i học</div>

                                <div class="d-flex justify-content-between mt-3 mt-lg-4 new-header">
                                    <ul>
                                        <li>1912 Lượt xem</li>
                                    </ul>

                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>

                                    <div class="new-body">
                                        <div class="mb-3">
                                            <p style="text-align:justify"><strong>Phương ph&aacute;p n&agrave;y khắc phục những hạn chế của việc học tr&ecirc;n thiết bị di động, gi&uacute;p trẻ mang tất cả c&aacute;c gi&aacute;c quan của trẻ v&agrave;o b&agrave;i học để trẻ được l&agrave; người chủ động tiếp thu kiến thức, ghi nhớ b&agrave;i học tốt hơn v&agrave; y&ecirc;u th&iacute;ch việc học hơn.&nbsp;</strong><br />
                                                &nbsp;</p>
                                        </div>
                                        <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630948636/cq2jotnhsxqsjvtr0mjg.png" style="width:100%" /></p></div>

                                        <h1 style="text-align:justify"><a id="phan-1-bai-11" name="phan-1-bai-11"><span style="font-size:20px"><strong>Phương ph&aacute;p đa gi&aacute;c quan l&agrave; g&igrave;?&nbsp;</strong></span></a></h1>

                                        <p style="text-align:justify">Trước hết, ba mẹ cần biết, 3 con đường ch&iacute;nh để người học tiếp nhận th&ocirc;ng tin l&agrave; <em><strong>thị gi&aacute;c (Visual), th&iacute;nh gi&aacute;c (Auditory)</strong></em> v&agrave; <em><strong>học bằng vận động (Kinesthetic)</strong></em>. Ch&uacute;ng ta đọc một mẩu truyện hay quan s&aacute;t một bức tranh - đ&oacute; l&agrave; học bằng thị gi&aacute;c. Th&iacute;nh gi&aacute;c sẽ được vận dụng khi ch&uacute;ng ta nghe một b&agrave;i giảng hay một quyển s&aacute;ch n&oacute;i. C&aacute;ch học thứ ba l&agrave; học bằng vận động - v&iacute; dụ như khi ch&uacute;ng ta chạm tay v&agrave;o đồ vật, chơi đ&ugrave;a với ch&uacute;ng hoặc khi ch&uacute;ng ta vẽ.&nbsp;</p>

                                        <p style="text-align:justify">Thực tế, trong đời sống thường ng&agrave;y, ch&uacute;ng ta thường c&ugrave;ng l&uacute;c sử dụng nhiều gi&aacute;c quan để hấp thụ th&ocirc;ng tin hơn l&agrave; chỉ d&ugrave;ng một gi&aacute;c quan tại một thời điểm. V&iacute; dụ, khi xem phim l&agrave; ta đang vận động cả th&iacute;nh gi&aacute;c v&agrave; thị gi&aacute;c. Khi ch&uacute;ng ta viết th&igrave; vận động v&agrave; thị gi&aacute;c chiếm ưu thế.</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Hiểu r&otilde; được sự vận động v&agrave; ph&aacute;t triển n&atilde;o bộ của trẻ trong qu&aacute; tr&igrave;nh học tập, tiến sĩ Robert Titzer (Mỹ) đ&atilde; đưa ra phương ph&aacute;p học đa gi&aacute;c quan. C&aacute;c nghi&ecirc;n cứu của &ocirc;ng chỉ ra rằng, khi trẻ được học bằng nhiều gi&aacute;c quan một l&uacute;c th&igrave; c&aacute;c nơ ron thần kinh sẽ được li&ecirc;n kết nhiều hơn v&agrave; bền hơn so với khi chỉ được học bằng một gi&aacute;c quan đơn lẻ. Do đ&oacute;, c&agrave;ng d&ugrave;ng nhiều gi&aacute;c quan một l&uacute;c để học tập th&igrave; khả năng nắm bắt v&agrave; lưu trữ th&ocirc;ng tin của trẻ c&agrave;ng tăng cao v&agrave; l&acirc;u d&agrave;i hơn. V&iacute; dụ khi muốn trẻ học về b&uacute;p b&ecirc;, tốt nhất h&atilde;y cho trẻ vừa nh&igrave;n con b&uacute;p b&ecirc;, chạm v&agrave;o n&oacute;, đưa l&ecirc;n tai nghe xem &acirc;m thanh ph&aacute;t ra từ con b&uacute;p b&ecirc;, cho b&eacute; ngửi hay thậm ch&iacute; l&agrave; gặm thử con b&uacute;p b&ecirc; đ&oacute;. Trẻ c&oacute; xu hướng huy động mọi gi&aacute;c quan của m&igrave;nh để tiếp cận một sự vật để thu thập th&ocirc;ng tin về sự vật đ&oacute; v&agrave; ghi lại ở c&aacute;c khu vực kh&aacute;c nhau trong n&atilde;o bộ. Đặc biệt, phương ph&aacute;p học đa gi&aacute;c quan sẽ ph&aacute;t huy hiệu quả rất cao khi trẻ học ng&ocirc;n ngữ hay To&aacute;n học.&nbsp;</p>

                                        <h1 style="text-align:justify"><a id="phan-2-bai-11" name="phan-2-bai-11"><span style="font-size:20px"><strong>E&amp;K &aacute;p dụng phương ph&aacute;p n&agrave;y như thế n&agrave;o v&agrave; lợi &iacute;ch mang lại?</strong></span></a></h1>

                                        <p style="text-align:justify">Thấu hiểu được những lợi &iacute;ch to lớn v&agrave; l&acirc;u d&agrave;i của phương ph&aacute;p n&agrave;y, E&amp;K đ&atilde; tận dụng tối đa khả năng để c&oacute; thể ứng dụng triệt để v&agrave;o chương tr&igrave;nh học của m&igrave;nh. Ti&ecirc;u biểu nhất l&agrave; ở phần học Multisensory.</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p style="text-align:justify">Chẳng hạn như khi b&eacute; được học về từ &ldquo;frog&quot; l&agrave; con ếch: Đầu ti&ecirc;n, trẻ sẽ được nghe ph&aacute;t &acirc;m của từ &ldquo;frog&rdquo; v&agrave; tiếng k&ecirc;u của con ếch để k&iacute;ch th&iacute;ch th&iacute;nh gi&aacute;c của b&eacute;. Đồng thời b&eacute; sẽ được nh&igrave;n thấy h&igrave;nh ảnh thật của con ếch v&agrave; mặt chữ &ldquo;frog&quot; - l&uacute;c n&agrave;y cả thị gi&aacute;c của b&eacute; cũng được đ&aacute;nh thức. E&amp;K c&ograve;n nổi bật nhờ t&iacute;nh năng ấn chạm tương t&aacute;c, k&iacute;ch th&iacute;ch trẻ tương t&aacute;c với h&igrave;nh ảnh trong chương tr&igrave;nh, từ đ&oacute; gia tăng sự hứng th&uacute; khi học cho b&eacute; v&agrave; l&acirc;u d&agrave;i sẽ gi&uacute;p b&eacute; ghi nhớ từ đ&oacute; c&ugrave;ng nghĩa v&agrave; h&igrave;nh ảnh của từ v&agrave;o khu vực tr&iacute; nhớ d&agrave;i hạn của n&atilde;o bộ. Vậy l&agrave; với phần học Multisensory, b&eacute; đ&atilde; được học từ &ldquo;frog&quot; th&ocirc;ng qua cả 3 gi&aacute;c quan l&agrave; th&iacute;nh gi&aacute;c, thị gi&aacute;c v&agrave; vận động tay. Nhờ c&oacute; sự ứng dụng cả 3 gi&aacute;c quan c&ugrave;ng một l&uacute;c, từ &ldquo;frog&quot; đ&atilde; được li&ecirc;n kết chặt chẽ v&agrave; d&agrave;y đặc trong n&atilde;o bộ của b&eacute; hơn khi b&eacute; chỉ nh&igrave;n thấy từ &ldquo;frog&quot; hay nghe c&aacute;ch ph&aacute;t &acirc;m của từ đ&oacute; đơn thuần. Lợi &iacute;ch l&acirc;u d&agrave;i của phương ph&aacute;p đa gi&aacute;c quan l&agrave; c&aacute;c li&ecirc;n kết chặt chẽ v&agrave; d&agrave;y đặc trong n&atilde;o sẽ gi&uacute;p b&eacute; dễ d&agrave;ng truy xuất từ &ldquo;frog&quot; để sử dụng v&agrave;o cuộc sống thực tế khi b&eacute; nghe thấy tiếng k&ecirc;u của con ếch, hay b&eacute; nh&igrave;n thấy con ếch đang nhảy, hay li&ecirc;n tưởng lại con ếch khi nghe nhắc đến từ &ldquo;frog&rdquo;.</p>

                                        <p style="text-align:justify">Mặt kh&aacute;c, việc vận động nhiều gi&aacute;c quan v&agrave;o b&agrave;i học gi&uacute;p trẻ chủ động hơn khi tiếp nhận th&ocirc;ng tin. Đặc biệt, nhờ c&oacute; t&iacute;nh năng tương t&aacute;c khuyến kh&iacute;ch trẻ vận động, trẻ l&agrave; chủ thể kh&aacute;m ph&aacute; b&agrave;i học, thay v&igrave; chỉ thụ động ngồi nghe giảng v&agrave; tiếp nhận một chiều. Monkey hy vọng rằng, ba mẹ cũng sẽ t&iacute;ch cực &aacute;p dụng phương ph&aacute;p Đa gi&aacute;c quan n&agrave;y sau khi học trong app, th&ocirc;ng qua c&aacute;c tr&ograve; chơi (để hyperlink phần học liệu) m&agrave; Monkey hướng dẫn ở mục Học liệu. Ch&uacute;c ba mẹ c&oacute; những khoảng thời gian học Monkey thật vui v&agrave; hiệu quả!&nbsp;</p>

                                        <p style="text-align:justify">&nbsp;</p>

                                        <p>&nbsp;</p>
                                    </div>
                            </section>',
                'Author' => 'hưng',
                'created_at' => '2021-09-05 15:35:47',
                'updated_at' => '2021-09-05 15:35:47'
            ],
            [
                'url' => 'hieu-ve-hoc-tap-thong-qua-vui-choi-xoa-di-sai-lam-thuong-gap-trong-cach-day-con',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631035559/rbrafqrsl4nb17r0wmuh.png',
                'categories' => 'phuong-phap',
                'title' => 'Hiểu về “Học tập thông qua vui chơi” - xóa đi sai lầm thường gặp trong cách dạy con',
                'Detail' => '<section class="monkey-bg-white new-wrapper">
                                <div class="title style-title monkey-fz-30 monkey-f-bold">
                                    Hiểu về “Học tập thông qua vui chơi” - xóa đi sai lầm thường gặp trong cách dạy con
                                </div>
                                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                    <ul class="list-inline">
                                        <li class="list-inline-item ml-4">
                                            <span> 1782 </span> Lượt xem
                                        </li>
                                    </ul>
                                    <div class="button-share mb-3 d-desktop">
                                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share" target="_blank" href="#">
                                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span class="mr-1 monkey-color-white"> 0 Chia sẻ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="new-body">
                                    <div class="mb-3">
                                        <p style="text-align: justify;"><strong><span style="line-height:2;">“Liệu con có thực sự học được gì không, hay con chỉ đang chơi đùa?”. Có lẽ đây là câu hỏi của nhiều ba mẹ chưa hiểu rõ về phương pháp đã được các nền giáo dục tiên tiến trên thế giới áp dụng từ lâu: “học tập thông qua vui chơi” (play-based learning”). Thông qua bài viết này, Monkey hy vọng sẽ giải đáp được các thắc mắc của ba mẹ và cung cấp cho ba mẹ thêm một phương pháp giáo dục đúng đắn.</span></strong><br>
                                            &nbsp;</p>
                                    </div>
                                    <div class="mb-3"><p style="text-align:justify"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1631035559/rbrafqrsl4nb17r0wmuh.png" style="width:100%" /></p></div>
                                    <div class="table-responsive">

                                        <h1 style="text-align: justify;"><a id="phan-1-bai-12" name="phan-1-bai-12"><span style="font-size:20px;"><span style="line-height:2;"><strong>Hiểu đúng về “học tập thông qua vui chơi”</strong></span></span></a></h1>

                                        <p style="text-align: justify;"><span style="line-height:2;">Hiện nay, ba mẹ thường có hai kiểu tâm lý khi dạy và học cùng con. Nhóm ba mẹ thứ nhất cho rằng, việc học không cần quá áp lực, con nên được tự do vui chơi thay vì học hành quá sớm để không “đánh mất tuổi thơ”. Nhóm ba mẹ thứ hai lại khá nóng vội và sốt sắng với việc học của con. Thậm chí, một số còn có xu hướng ép con học, cho con rất ít không gian và thời gian để chơi. Hoặc tâm lý: học ra học, chơi ra chơi - lúc nào học thì phải hết sức nghiêm túc. Thực tế, cả hai tâm lý giáo dục này đều có nhiều điểm hạn chế.&nbsp;</span></p>

                                        <p style="text-align: justify;"><span style="line-height:2;">Các nghiên cứu trong lĩnh vực giáo dục đã chỉ ra rằng, đối với con trẻ, hai khái niệm học và chơi không hề tách biệt. Đối với các con, việc học cũng chính là chơi và chơi cũng chính là học. Người lớn thường phân biệt và tách bạch hai hoạt động rõ ràng, nhưng với các con thì học và chơi đều giống nhau, chỉ cần hứng thú của bản thân. Các chuyên gia đều thống nhất rằng phương pháp học hiệu quả nhất với con trẻ chính là học tập thông qua vui chơi.&nbsp;</span></p>

                                        <p style="text-align: justify;">&nbsp;</p>

                                        <p style="text-align: justify;"><span style="line-height:2;"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630947970/foodf3nyniscb8vaz8hc.png" style="width: 100%;"></span></p>

                                        <p style="text-align: justify;">&nbsp;</p>

                                        <p style="text-align: justify;"><span style="line-height:2;">Học thông qua trò chơi là cách các nhà giáo dục đưa các nội dung tri thức và kỹ năng muốn truyền tải cho con trẻ lồng ghép vào các trò chơi có tính định hướng. Việc để tự do cho con chơi cũng không thể gọi là “học tập thông qua vui chơi”. Phương pháp này chỉ đúng khoa học khi bao gồm 3 yếu tố:&nbsp;</span></p>

                                        <ul>
                                            <li style="text-align: justify;"><span style="line-height:2;">Có mục đích giáo dục cho con trẻ&nbsp;</span></li>
                                            <li style="text-align: justify;"><span style="line-height:2;">Trò chơi có tính giáo dục, có định hướng, có chủ đích&nbsp;</span></li>
                                            <li style="text-align: justify;"><span style="line-height:2;">Cách triển khai phải nắm đúng tâm lý của các con, khéo léo lồng ghép kiến thức một cách tự nhiên, không gượng ép.&nbsp;</span></li>
                                        </ul>

                                        <h1 style="text-align: justify;"><span style="line-height:1;"><a id="phan-2-bai-12" name="phan-2-bai-12"><span style="font-size:20px;"><strong>E&K áp dụng phương pháp này như thế nào?&nbsp;</strong></span></a></span></h1>

                                        <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Toàn bộ chương trình được thiết kế dưới hình thức các trò chơi giáo dục: </strong></em>Ba mẹ có thể thấy rằng, với 18.000 từ vựng và 48 chủ đề, E&K là một chương trình học bài bản với khối lượng kiến thức vô cùng đồ sộ. Tuy nhiên, toàn bộ chương trình lại được xây dựng như một trò chơi. Chính vì lượng kiến thức lớn, nên phương thức truyền tải cho các con lại càng cần sự sinh động, thu hút, hấp dẫn để các con không cảm thấy quá tải, chán nảy hay gượng ép khi học. Mỗi bài học có 5 hoạt động, không phần nào là bài giảng cứng nhắc, khô khan, thay vào đó là các hoạt động khác nhau kích thích nhận thức của trẻ phát triển mà ở đó, sự tương tác của trẻ đóng vai trò vô cùng quan trọng.</span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;"><em><strong>Đầu tiên, trẻ sẽ cùng “chơi” với phần Từ vựng (Vocabulary)</strong></em> thông qua việc xem những video minh họa thú vị, sinh động. Từ cấp độ Trung bình, các câu (sentence) sẽ hiển thị cả ở dạng chữ viết và icon. Khi chạm vào những từ quan trọng (keywords) trong câu ví dụ, con sẽ được xem hình ảnh/video giải nghĩa và nghe lại phát âm của từ đó.&nbsp;</span></p>

                                        <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Tiếp đến, ở phần Từ phổ biến (Sight Word) và Ngữ âm (Phonic)</strong></em>, con sẽ được chơi trò chơi lựa chọn. Với mỗi màn, 3 ẩn số từ mới sẽ được “giấu” trong ba hình ảnh ngộ nghĩnh, bé ấn chạm vào một trong ba hình - tùy theo sở thích cá nhân (về màu sắc, hình dáng,....) và hình ảnh bé chọn sẽ “bật mí” từ mới mà bé cần khám phá.&nbsp;</span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;"><em><strong>Cuối mỗi bài học, trẻ cũng sẽ được chơi trò chơi để ôn lại kiến thức.</strong></em> Các trò chơi tiêu biểu của E&K có thể kể đến là kéo-thả từ vào đúng vị trí trong câu, chọn đáp án đúng. Khi chơi, hệ thống sẽ báo nếu trẻ chọn nhầm đáp án và con có thể chọn lại tới khi đúng. Cách tiếp cận này hoàn toàn ngược lại với phương pháp kiểm tra, chấm điểm cứng nhắc và áp lực. Như vậy, việc ôn tập và củng cố kiến thức của con trở nên rất tự nhiên và vui vẻ.</span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;"><em><strong>Cuối cùng, khi hoàn thành bài học và đạt được đủ sao, trẻ sẽ được tặng một sticker.</strong></em> Đây chính là một trong những điểm thu hút, khiến trẻ “ham” học E&K nhất. Các sticker có thể giúp bé tạo thành những bức tranh sinh động và hấp dẫn, là món quà, là niềm vui &nbsp;khích lệ, động viên mang lại cho con cảm giác thành tựu khi chiến thắng các thử thách của bài học.</span></p>

                                        <p style="text-align: justify;">&nbsp;</p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;">Với con trẻ, <em><strong>mỗi bài học của E&K là một “ô chữ bí mật”, một trải nghiệm với nhiều bất ngờ thích thú</strong></em> mà con được tự mình khám phá. Tất cả các trò chơi trong hệ thống của chương trình đều được thiết kế đơn giản, dễ hiểu nhưng không kém phần sinh động, phù hợp với năng lực ngôn ngữ của trẻ và mục tiêu dạy-học từ vựng.</span></p>

                                        <h1 style="text-align: justify;"><span style="line-height:1;"><a id="phan-3-bai-12" name="phan-3-bai-12"><span style="font-size:20px;"><strong>Lợi ích tuyệt vời khi con học E&K nhờ phương pháp&nbsp;mang lại</strong></span></a></span></h1>

                                        <p style="text-align: justify;"><span style="line-height:2;">Mô hình lớp học truyền thống cô giảng - trò nghe một cách thụ động đang dần trở nên không thích hợp với sự phát triển của khoa học và công nghệ. Thay vào đó, phương pháp học thông qua các trò chơi mà E&K đang áp dụng lại ngày càng được ứng dụng rộng rãi vì những lợi ích vượt trội mà trẻ nhận được.&nbsp;</span></p>

                                        <p style="text-align: justify;"><span style="line-height:2;"><em><strong>Các trò chơi kích thích sự chủ động và tham gia của trẻ</strong></em>. Những khác biệt này nhìn thì tưởng chừng là sự khác biệt nhỏ, nhưng lại đóng vai trò quan trọng trong “đường dài”, vì nó khơi dậy bản năng tìm tòi, khám phá và liên tục học hỏi trong trẻ.&nbsp;</span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630948001/jdm2vidcbfubneywduxg.png" style="width: 100%;"></span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;"><em><strong>Đây cũng là phương pháp khuyến khích trẻ tư duy linh hoạt</strong></em> - vì mỗi phản ứng, lựa chọn của trẻ đối với một đề bài của trò chơi sẽ đưa đến một kết quả khác nhau. Do đó, trẻ sẽ luôn giữ được tâm thế sẵn sàng đón nhận những bất ngờ, không ngại các thử thách. Đây là một trong những kỹ năng cần thiết của công dân toàn cầu thế kỷ 21.&nbsp;</span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630948043/qwnvapm3jkigvjbmuhqt.png" style="width: 100%;"></span></p>

                                        <p style="text-align: justify;">&nbsp;</p>

                                        <p style="text-align: justify;"><span style="line-height:2;">Thêm vào đó, thông qua các trò chơi mang tính giáo dục của chương trình,<em><strong> thái độ của trẻ với việc học cũng trở nên tích cực hơn</strong></em>. Thay vì phải liên tục nhắc nhở con như các chương trình học khác, các chuyên gia của Monkey khuyên ba mẹ nên dành thời gian ngồi cùng con khi học, giữ tâm thế như một người học - tức là cũng chú tâm vào bài học và trao đổi, khuyến khích, tương tác cùng con như một người bạn học. Cùng với sự đồng hành của ba mẹ và sự sinh động, hấp dẫn của các bài học, trẻ sẽ thực sự hào hứng và tự tập được tính kiên trì xuyên suốt buổi học.&nbsp;</span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;"><img alt="" src="https://res.cloudinary.com/thangdao04/image/upload/v1630948072/ymdfgo8dzc2g4xwhmfah.png" style="width: 100%;"></span></p>

                                        <p style="text-align: justify;"><br>
                                            <span style="line-height:2;">Một lợi ích quan trọng khác của phương pháp học tập thông qua vui chơi của E&K phải kể tới là <em><strong>trẻ sẽ phát triển kỹ năng nghe và nhận biết âm thanh một cách mạnh mẽ</strong></em>, ngay từ giai đoạn trước khi biết chữ. Khi tương tác cùng chương trình, trẻ sẽ được nghe phát âm của từng từ, câu nhiều lần với giọng đọc chuẩn Anh - Mỹ. Đây sẽ là nền tảng để trẻ ghi nhớ được từ vựng và từ đó, xây dựng bộ kỹ năng đọc - viết hiệu quả.&nbsp;</span></p>
                                    </div>

                                    <p class="clearfix">
                                    </p>
                                </div>
                            </section>',
                'Author' => 'hưng',
                'created_at' => '2021-09-05 15:35:47',
                'updated_at' => '2021-09-05 15:35:47'
            ],
        ]);

    }
}

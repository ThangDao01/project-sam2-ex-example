<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('configs')->insert([
            'contactUs'=>'                    <div class="container-fluid container-xl">
                        <div class="justify-content-center row">
                            <div class="col-lg-11">
                                <div class="border-radius mb-3 monkey-bg-white support-question-wrapper">
                                    <div class="support-question-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 1. Tại  Chi Nhánh/ Phòng Giao Dịch<em> </em> </a></div>


                                                    <div>Quý khách có thể đến Chi nhánh/ Phòng Giao dịchChi nhánh/ Phòng Giao dịch để t&igrave;m chi nhánh hoặc phòng giao dịch gần nhất thuận tiện nhất v&agrave; trao đổi trực tiếp với nh&acirc;n vi&ecirc;n của ch&uacute;ng t&ocirc;i. Ngo&agrave;i ra Quý khách cũng có thể điền &quot;Phiếu Góp ý của Khách h&agrave;ng&quot; đặt tại các Chi nhánh/ Phòng Giao dịch</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 2. Trực tuyến <em> </em> </a></div>

                                                    <div>Ch&uacute;ng t&ocirc;i sẽ phản hồi Quý khách trong vòng 2 ng&agrave;y l&agrave;m việc đối với những y&ecirc;u cầu gửi trực tuyến. Nếu Quý khách cần hỗ trợ khẩn cấp, vui lòng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i th&ocirc;ng qua những cách thức khác.</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 2.1 Quý khách có thể gửi thư điện tử đến ch&uacute;ng t&ocirc;i: <em> </em> </a></div>

                                                    <div>Khách h&agrave;ng cá nh&acirc;n: user@ek.com.vn<br />
                                                        Khách h&agrave;ng Premier: ekpremiervn@ek.com.vn</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 2.2 Điền th&ocirc;ng tin v&agrave;o mẫu thư trực tuyến <em> </em> </a></div>

                                                    <div>Thư Thắc Mắc/ Khiếu Nại/ Phản hồi<br />
                                                        Thắc Mắc/ Khiếu Nại/ Phản hồi để v&agrave;o trang đăng ký th&ocirc;ng tin li&ecirc;n hệ của EK Đường dẫn n&agrave;y sẽ dẫn đến một cửa sổ mới Thư Khen ngợi nh&acirc;n vi&ecirc;n</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 3 Gọi điện cho ch&uacute;ng t&ocirc;i <em> </em> </a></div>

                                                    <div>(+84)0369630471</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 4 Gửi thư cho ch&uacute;ng t&ocirc;i <em> </em> </a></div>

                                                    <div>Quý khách có thể gửi thư cho ch&uacute;ng t&ocirc;i (d&agrave;nh cho ý kiến đóng góp v&agrave; khiếu nại) đến địa chỉ sau: Bộ phận Quan hệ Khách h&agrave;ng<br />
                                                        Dịch vụ EK (Việt Nam)<br />
                                                        Số 8 T&ocirc;n Thất Thuyết<br />
                                                        Việt Nam</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
',
            'aboutUs'=>'<div class="title style-title monkey-fz-30 monkey-f-bold">
                    Bé Gia Linh<br>Học viên Monkey Junior
                </div>
                <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                    <ul class="list-inline">
                        <li class="list-inline-item">27/07/2021</li>
                        <li class="list-inline-item ml-4">
                            <span> 1422 </span> Lượt xem
                        </li>
                    </ul>
                    <div class="button-share mb-3 d-desktop">
                        <a class="monkey-bg-neon-blue effect-hover-shine distance-center monkey-color-white monkey-fz-15 fb-share"
                           target="_blank"
                           href="https://www.facebook.com/sharer/sharer.php?u=https://www.monkeyjunior.vn/hoc-vien-tieu-bieu/be-gia-linh-br-hoc-vien-monkey-junior.html&amp;display=popup&amp;ref=plugin&amp;src=like&amp;kid_directed_site=0">
                            <i class="icon-monkey-face fa-facebook mr-2" aria-hidden="true"></i><span
                                class="mr-1 monkey-color-white"> 3 Chia sẻ</span>
                        </a>
                    </div>
                </div>
                <div class="new-body">
                    <div class="mb-3">
                        <p style="text-align: justify;"><span style="line-height:2;"><strong>“Mình luôn lo lắng nuôi con không đủ tốt, để con phải khiếm khuyết, thiệt thòi vì các bạn khác đã bắt đầu học tiếng Anh mà con mình gần 2 tuổi vẫn chậm nói.” - Chị Bùi Thu Trang, mẹ bé Gia Linh (Hà Nội) chia sẻ. </strong></span>
                        </p>
                    </div>
                    <div class="new-image mb-4 text-center background-style">
                        <img
                            src="https://monkeymedia.vcdn.com.vn/upload/web/storage_web/27-07-2021_14:53:11_gia-linh.png">
                    </div>
                    <p style="text-align: center;"><em><span style="line-height:2;">Bé Gia Linh cùng ba&nbsp; mẹ và em trai của mình</span></em>
                    </p>

                    <p style="text-align: justify;">&nbsp;</p>

                    <p style="text-align: justify;"><span style="line-height:2;">Nuôi con đến gần 2 tuổi vẫn không biết nói, không biết đi, chị Trang từng bị bao vây bởi áp lực “mẹ vụng nuôi con dại” từ chính mình và những người xung quanh. Sau 2 năm nỗ lực cùng con “đi tìm” tiếng nói, bé Gia Linh - con gái chị Trang - không chỉ hoạt ngôn mà còn nói sõi cả tiếng Việt lẫn tiếng Anh. Chị thầm cảm ơn ý chí của bản thân và phương pháp đúng đã cho con chị một tuổi thơ và tương lai hoàn thiện.</span>
                    </p>

                    <p style="text-align: justify;"><span style="line-height:2;">Chị Trang tâm sự: <em>“Con là một đứa trẻ chậm nói, nhiều người còn bảo con thiểu năng nên khi thấy mình cho con học nói cả tiếng Anh và tiếng Việt thì nói ra nói vào nhiều lắm, bảo mình sính ngoại rồi sẽ hại tương lai con. Nhưng mình đã tìm hiểu rất kĩ qua sách vở và với bản năng, linh tính của người mẹ, mình tin con mình không hề thiểu năng, con chỉ chậm hơn các bạn. Và việc của người mẹ là đồng hành với con vượt qua khó khăn đó. Con mình sinh ra chẳng nhẽ lại bỏ. Con khiếm khuyết 1 mẹ cùng con bù đắp 10 để con không phải thua kém, thiệt thòi. Con mình từ chậm nói thành đứa trẻ có thể nói, đọc cả tiếng Anh và tiếng Việt từ 4 tuổi không phải kì tích đâu! Tất cả đều là nỗ lực của ba mẹ. Mình nghĩ ai làm cha mẹ cũng làm được như mình thôi.”</em></span>
                    </p>

                    <p style="text-align: justify;"><span style="line-height:2;">Sau thời gian tham khảo của các ba mẹ đi trước, thậm chí mang con vào viện tham vấn chuyên gia, chị Trang cũng đã tìm ra phương pháp giúp con học nói, đồng thời tận dụng <a
                                href="https://www.monkey.edu.vn/ba-me-can-biet/giai-doan-vang-phat-trien-nao-bo-cua-tre-me-dung-bo-lo-.html"
                                target="_blank">giai đoạn “vàng”</a> để con học cả tiếng Anh ngay tại nhà với <a
                                href="https://www.monkeyjunior.vn/" target="_blank">Monkey Junior</a>. Vài ngày đầu con không thích học, mở ứng dụng ra là con hét lên, ăn vạ khiến chị rất mệt mỏi, chán nản. Nhưng chị vẫn không bỏ cuộc, mỗi ngày duy trì đều đặn 15 - 20 phút học mà chơi với ứng dụng giúp con dần tạo thói quen và niềm yêu thích tiếng Anh. Sau khoảng 1 tuần, bé bắt đầu thích học với ứng dụng và nói theo. Những âm thanh, hình ảnh, video sinh động, game tương tác và phát âm chuẩn trong Monkey Junior kích thích thính giác, thị giác và não bộ giúp bé hào hứng và thích nói. Ngay khi mới học dù con mới chỉ bật ra được các từ đơn nhưng rất sõi và chuẩn, không hề bị ngọng như nhiều bạn cùng trang lứa. Sau 6 tháng kiên trì, bé Gia Linh đã có thể phản xạ nói câu dài bằng tiếng Việt và biết rất nhiều từ vựng tiếng Anh. Đến nay, nhìn cô bé 4 tuổi đọc truyện, thuyết trình tiếng Anh “chuẩn không cần chỉnh”, nhiều người không thể tin em từng là đứa trẻ chậm nói.&nbsp;</span>
                    </p>

                    <p style="text-align: justify;"><span style="line-height:2;">Sau hành trình giúp con “đi tìm” tiếng nói, chị Trang chia sẻ:<em> “Con học tiếng Việt hay tiếng Anh cũng là học ngôn ngữ thôi, không có gì phân biệt cả. Quan trọng là cha mẹ dành thời gian, tâm huyết và có niềm tin để đồng hành cùng con thì mọi khó khăn đều có thể giải quyết đơn giản!”</em>. Thật vậy, không chỉ Gia Linh mà có rất nhiều bé học viên Monkey Junior khác có thể vượt qua các rào cản về ngôn ngữ để thành thạo cả tiếng Anh lẫn tiếng Việt ở tuổi tập nói. Ba mẹ cũng hãy bắt đầu ngay cùng bé nhà mình nhé!</span>
                    </p>

                    <p style="text-align: justify;">&nbsp;</p>

                    <div class="youtube-embed-wrapper"
                         style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden">
                        <iframe allow=";" allowfullscreen="" frameborder="0" height="360"
                                src="https://www.youtube.com/embed/QkC-tJHt15I"
                                style="position:absolute;top:0;left:0;width:100%;height:100%" width="640"></iframe>
                    </div>

                    <p>&nbsp;</p>

                    <p class="clearfix">
                    </p>
                </div>

',
            'policyPage'=>'        <section class="monkey-bg-white about-us new-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 blog-main text-center">
                        <div class="blog-header">
                             <img src="https://res.cloudinary.com/thangdao04/image/upload/v1630303243/g2y8chmwfp0vdklngvo6.png" style="width: 500px" alt="">
                            <strong class="blog-title" style="font-size: 30px">Chính sách bảo mật</strong>
                        </div>
                        <div class="blog-post" id="content_news">
                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Tại EK, chúng tôi coi việc bảo vệ thông tin cá nhân của bạn là ưu tiên hàng đầu. Chúng tôi hiểu hoàn toàn rằng thông tin cá nhân của bạn là thuộc về bạn, vì vậy chúng tôi nỗ lực hết sức lưu trữ bảo mật và xử lý cẩn thận thông tin mà bạn chia sẻ với chúng tôi.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Chính sách bảo mật mô tả cách thức EK thu thập và xử lý các thông tin cá nhân khi người dùng đăng ký sử dụng dịch vụ của công ty. Người dùng đồng ý sử dụng dịch vụ của EK có nghĩa là bạn hoàn toàn đồng ý với các nội dung trong Chính sách bảo mật này.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">EK có thể sửa đổi nội dung của chính sách bằng cách đăng một bản sửa đổi lên hệ thống của EK, phiên bản sửa đổi có hiệu lực kể từ thời điểm đăng tải. Nếu người dùng tiếp tục sử dụng dịch vụ có nghĩa là bạn đã chấp nhận và chắc chắn đồng ý tuân theo điều khoản sử dụng mới nhất được cập nhật.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>1. Mục đích thu thập thông tin cá nhân Người dùng</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">EK sử dụng thông tin thu thập từ Người dùng cho các mục đích chung sau:</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Xác định và xác thực tài khoản.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Cải thiện dịch vụ, chăm sóc khách hàng và nghiên cứu.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Cung cấp thông tin, các dịch vụ và sự hỗ trợ theo yêu cầu của Người dùng.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Giải quyết các tranh chấp, các vấn đề phát sinh liên quan đến việc sử dụng website EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Ngăn chặn các hoạt động phạm pháp hoặc bị cấm được nêu trong Quy định sử dụng.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Các mục đích khác được phép theo quy định của pháp luật và EK sẽ có thông báo cho Người sử dụng trong từng trường hợp cụ thể.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Để có thể sử dụng đầy đủ các tiện ích trên sản phẩm phần mềm của EK, Người dùng cần phải đăng ký thành viên EK bao gồm:</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Họ tên đầy đủ</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Số điện thoại</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Email chính xác…</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Bạn vẫn có thể truy cập vào trang web <a href="/">https://EK.vn</a> của EK một cách không định danh. Sau khi đăng ký thành công, bạn có thể tự chỉnh sửa được tên trong trang quản lý tài khoản. Nếu cần đổi email đăng nhập hoặc số điện thoại, bạn cần gửi yêu cầu cho chúng tôi và trải qua các bước xác thực.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>2. Phạm vi sử dụng thông tin Người dùng</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Thông tin của Người dùng sẽ được EK lưu lại trên hệ thống trong các trường hợp thường gặp sau:</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng đăng ký và/hoặc sử dụng các dịch vụ của EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng nộp bất cứ biểu mẫu nào, không giới hạn ở các mẫu đơn hoặc các mẫu khác liên quan đến các sản phẩm và dịch vụ của EK, kể cả trực tuyến hay bằng các hình thức tài liệu vật lý.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng ký kết bất kỳ thỏa thuận nào hoặc cung cấp bất kỳ tài liệu hoặc thông tin khác liên quan đến sự tương tác của bạn với EK, hoặc khi bạn sử dụng sản phẩm và dịch vụ của công ty.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng tương tác với EK, chẳng hạn như qua điện thoại, (có thể được ghi âm), thư, fax, gặp trực tiếp, mạng xã hội và email.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng sử dụng các dịch vụ điện tử hoặc tương tác với EK thông qua Nền tảng của EK hoặc sử dụng dịch vụ trên Nền tảng của EK. Điều này bao gồm, nhưng không giới hạn thông qua cookie EK có thể triển khai khi bạn tương tác với Nền tảng của EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng EK thực hiện giao dịch thông qua nền tảng hoặc các dịch vụ của EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng phản hồi hoặc khiếu nại.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Khi Người dùng cung cấp dữ liệu cá nhân của mình cho EK vì bất kỳ lý do nào.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Các trường hợp khác mà EK thấy cần thiết phù hợp với quy định của pháp luật.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>3. Thời gian lưu trữ thông tin Người dùng</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">EK lưu giữ và xử lý thông tin cá nhân của Người dùng trên máy chủ, bảo vệ bằng các biện pháp bảo vệ vật lý, điện tử bao gồm: tường lửa, mã hóa dữ liệu và thủ tục áp dụng theo quy định của luật bảo mật thông tin. EK thực thi kiểm soát truy cập vật lý vào các thông tin và chỉ cho phép truy cập thông tin cá nhân đối với những nhân viên cần nó để hoàn thành trách nhiệm công việc của họ trong hệ thống EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Thông tin và tài khoản của Người dùng sẽ được lưu trữ không thời hạn trên hệ thống của EK để bạn có thể gia hạn dịch vụ bất cứ lúc nào.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>4. Những người có thể tiếp cận được thông tin của Người dùng</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">EK cam kết không cung cấp, không bán, trao đổi, hoặc sử dụng các hình thức thương mại khác với những thông tin cá nhân của bạn. Tuy nhiên, thông tin không định danh của những người truy cập vào trang web có thể được sử dụng và cung cấp cho các bên khác nhằm mục đích marketing, quảng cáo hoặc mục đích sử dụng khác.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Các cá nhân, tổ chức khác có thể được tiếp cận thông tin của Người dùng EK trong một số trường hợp dưới đây:</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Thông tin đó Người dùng đã công khai.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- EK được Người dùng đồng ý tiết lộ những thông tin này.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Bên thứ ba mà Người dùng EK ủy quyền hoặc cho phép có yêu cầu EK cung cấp thông tin cá nhân của Người dùng. Việc ủy quyền, cho phép phải được thể hiện bằng văn bản có công chứng, chứng thực.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Theo yêu cầu pháp lý hay từ một cơ quan nhà nước hoặc nếu EK tin rằng hành động đó là cần thiết nhằm tuân theo các yêu cầu pháp lý hoặc chiếu theo luật pháp</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Bảo vệ quyền, lợi ích, tài sản, sự an toàn của một ai khác trên cơ sở cân bằng lợi ích của tất cả các bên.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Cho các bên thứ ba khác mà EK có liên doanh, liên kết để cung cấp các dịch vụ trên EK. Hoặc các dịch vụ mới có liên quan đến EK mà Người dùng cũng đang sử dụng những dịch vụ liên kết đó trên các phần mềm của EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- EK được mua lại hoặc sáp nhập với công ty khác. Trong trường hợp này, EK sẽ thông báo cho bạn bằng email hoặc bằng cách thông báo nổi bật trên trang web của EK trước khi thông tin về bạn được chuyển giao và trở thành đối tượng của một chính sách bảo mật khác.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Ngoài những trường hợp nêu trên nhưng không giới hạn, thông tin cá nhân của Người dùng luôn được bảo mật trước các bên thứ ba nào trừ khi EK hoàn toàn tin rằng, sự công bố này là cần thiết nhằm ngăn chặn những thiệt hại vật chất hoặc tài chính do các yếu tố có dấu hiệu phạm pháp có thể gây ra.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>5. Địa chỉ của đơn vị thu thập và quản lý thông tin</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Toàn bộ thông tin người dùng cung cấp cho EK sẽ được lưu giữ trên hệ thống. Khi cần Người sử dụng EK có thể hỏi về hoạt động thu thập, xử lý thông tin liên quan đến cá nhân mình tại địa chỉ:</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">CÔNG TY CỔ PHẦN ĐÀO TẠO TRỰC TUYẾN UNICA</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Địa chỉ: Tầng 3, Số 247 Cầu Giấy, P.Dịch Vọng, Q.Cầu Giấy, TP.Hà Nội</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Địa chỉ: 323A Lê Quang Định, TP HCM</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Hotline: 0904886098</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Email hỗ trợ: cskh@EK.vn</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Website <a href="https://EK.vn">https://EK.vn</a></span><br>
                                &nbsp;</p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>6. Phương thức và công cụ để Người dùng tiếp cận, chỉnh sửa dữ liệu cá nhân</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Sau khi hoàn thành việc bàn giao sản phẩm/dịch vụ, Người dùng là đơn vị duy nhất sở hữu và có trách nhiệm quản lý một cách an toàn các thông tin nhận biết, tài khoản quản trị, mật khẩu, nội dung website hay những thông tin khác liên quan đến tài khoản, website của mình. Người dùng có thể đăng nhập vào tài khoản của mình để chỉnh sửa thông tin trên website, có quyền yêu cầu EK thực hiện việc kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của mình đã đăng ký với trước đó. EK hoàn toàn không chịu trách nhiệm liên quan đến tính chính xác và hợp pháp của thông tin Người dùng đưa lên website.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">EK sẽ kiểm tra, cập nhật, điều chỉnh, hủy bỏ thông tin cá nhân của Người dùng khi có yêu cầu hoặc cung cấp cho chủ thể thông tin công cụ để tự kiểm tra, cập nhật, điều chỉnh thông tin cá nhân của mình. Chúng tôi chỉ hỗ trợ Người dùng thông qua tài khoản mà bạn chủ động cung cấp cho EK. Nếu phát hiện các hình thức truy cập trái phép bằng tài khoản của mình hoặc các sơ hở về bảo mật, bao gồm việc mất mát, bị đánh cắp hoặc bị lộ các thông tin về mật khẩu và các thông tin bảo mật khác bạn cần thông báo ngay cho EK để được hỗ trợ.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Người dùng phải tự chịu trách nhiệm về nội dung các email gửi đi từ hộp thư trong tài khoản và các nội dung trên website của mình. Khi cung cấp email và đăng ký dùng thử đồng nghĩa với việc bạn đồng ý nhận email marketing từ EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Người dùng cần phải có trách nhiệm bảo quản thiết bị có sử dụng phần mềm, EK trong tầm kiểm soát và an toàn, lưu giữ thông tin truy cập vào Cửa hàng để tránh trường hợp tài khoản bị đánh cắp và/hoặc bị lạm dụng với mục đích không an toàn. Chúng tôi khuyến cáo Người dùng nên đổi lại mật khẩu sớm sau khi cung cấp mật khẩu cho các bên liên quan nhằm mục đích hỗ trợ sử dụng.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>7. Sử dụng Cookies</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Cookies là một lượng nhỏ dữ liệu, được gửi tới trình duyệt của Người dùng từ một trang web và được lưu trữ trên ổ đĩa cứng của máy tính. Cookies cho phép trang web hoặc hệ thống của các bên cung cấp dịch vụ nhận diện trình duyệt của bạn và lưu lại một số thông tin nhất định.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Chúng tôi dùng cookies để hiểu và lưu trữ hoạt động của bạn và đáp ứng các nhu cầu của bạn tốt hơn cho lần truy cập sau. Nếu Người dùng chọn từ chối cookie, điều đó có thể gây cản trở và ảnh hưởng đến một số dịch vụ và tính năng phụ thuộc vào cookie tại EK.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>8. Thay đổi chính sách bảo mật</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">EK có quyền thay đổi chính sách bảo mật này bất cứ lúc nào, vì vậy chúng tôi khuyên bạn nên xem xét và kiểm tra thường xuyên. Nếu có những thay đổi quan trọng đối với chính sách này, EK sẽ thông báo cho Người dùng qua email hoặc bằng một thông báo trên website. Người dùng truy cập vào đường link web https://EK.vn/chinh-sach-bao-mat&nbsp;</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">để cập nhật những thay đổi mới nhất nhé.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong>9. Giải quyết khiếu nại</strong></span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Mọi trường hợp đóng góp ý kiến, khiếu nại, Người dùng vui lòng nào gửi về EK theo các phương thức sau:</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Gọi đến hotline của bộ phận chăm sóc khách hàng 0904886098.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Gửi email đến địa chỉ cskh@EK.vn</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">- Đến trực tiếp văn phòng của Công ty cổ phần Đào tạo trực tuyến Unica tại:</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Địa chỉ: Tầng 3, Số 247 Cầu Giấy, P.Dịch Vọng, Q.Cầu Giấy, TP.Hà Nội</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Địa chỉ: 323A Lê Quang Định, TP HCM</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">Tùy thuộc vào tính chất phức tạp của nội dung khiếu nại, EK sẽ có thời hạn xử lý tương ứng. Kết quả giải quyết khiếu nại sẽ được thông báo tới Người dùng trường hợp cần thiết, EK có thể mời người khiếu nại tới làm việc trực tiếp.</span></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:16px">EK sẽ nỗ lực để giải quyết các khiếu nại của Người dùng trong thời gian sớm nhất và trên tinh thần thương lượng, hòa giải, tôn trọng, hai bên cùng có lợi.</span></p>

                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
',
            'titlePage'=>' <link rel="icon" href="https://res.cloudinary.com/thangdao04/image/upload/v1630304957/x3fsb0r0fo8cou9v2gsx.png" type="image/gif" sizes="16x16">
    <title>E&K - Nơi dành cho trẻ mới bắt đầu học tiếng Anh</title>',
            'descriptionPage'=>'E&K là chương trình dành cho trẻ 0 - 10 tuổi giúp trẻ bắt đầu học tiếng Anh dễ dàng, thú vị và hiệu quả hơn.',
            'keywordPage'=>'EK,ek,Learn English,',
        ]);

    }
}

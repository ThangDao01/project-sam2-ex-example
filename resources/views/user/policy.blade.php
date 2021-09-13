@extends('layout.user-layout')
@section('title')
    <title>E&K - Chính sách bảo mật</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <style>
        .about-us {
            font-family: 'Roboto', sans-serif !important;
        }
    </style>
@endsection
@section('detail')
    <section
        id="breadcrumb-monkey"
        class="breadcrumb-monkey monkey-bg-light-gray"
    >
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <nav aria-label="breadcrumb">
                        <ol
                            class="breadcrumb monkey-bg-transparent mb-0 p-0"
                        >
                            <li class="breadcrumb-item breadcrumb-no-background">
                                <a class="monkey-f-medium text-uppercase"
                                   href="/">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active breadcrumb-no-background">
                                <a href="#"
                                   class="monkey-f-bold text-uppercase"> Policy</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-8" style="margin: auto">
        <section class="monkey-bg-white about-us new-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 blog-main text-center">
                        <img src="{{asset('images/logo-ek.png')}}" style="width: 500px" alt="">
                        <div class="blog-header">
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
    </div>
    </div>
@endsection


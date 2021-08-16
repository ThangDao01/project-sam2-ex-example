###Setup
1. gitbash https://git-scm.com/downloads
2. xampp: giúp ta cài database mysql, apache, php. https://www.apachefriends.org/download.html
3. composer: giúp bản quản lý thư viện giống với maven, nuget, npm.  
   https://getcomposer.org/Composer-Setup.exe
4. composer -> install laravel
   `composer global require laravel/installer`
5. Tạo project laravel.
   - Chuột phải -> Git bash here tại thư mục muốn tạo project.
   `laravel new ten-cua-project`

###Editor

- PHP Storm (visual studio code, sublime text, webstorm): webstorm -> php storm -> intellij IDEA
    - File > Open trỏ đến `thư mục chứa project` (nhìn thấy được thư mục app)
- Quan trọng: trường hợp php storm không suggest code, chọn **File > Invalidate Caches**

###Terminal
- Điều hướng
    - `cd ten-thu-muc` đi vào trong một thư mục.
    - `cd ..` đi ra ngoài một thư mục.
    - `cd ~` đi ra ngoài thư mục gốc.
    - `cd ~/Desktop` đi ra ngoài thư mục desktop.
- Xoá nội dung trong terminal.
    - `cls` (windows)
    - `clear` (macos hoặc linux)
- Tạo một thư mục
    - mkdir (make directory)
- Khi gõ lệnh cần chủ động ấn Tab để terminal tự động hoàn thiện nốt câu lệnh.

###Cấu trúc thư mục trong project laravel.
- `app` chứa code php core hay cơ bản là những controller, entity, class php hỗ trợ trong quá trình
  xây dựng project.
    - `app/Http/Controllers` chứa controller.
    - `app/Models` chứa entity (mapping với database như Product, Order, Customer) và model liên quan.
- `resources/views` thư mục default chứa view của project, những file html quan trọng ở đây, có đuôi
  là `.blade.php` <- view engine chúng ta sử dụng.
- `routes` chứa thông tin mapping request người dùng với các controller tương ứng.
    - `web.php` cần làm việc với thằng này.
- `database` chứa các thông tin làm việc với cơ sở dữ liệu từ việc tạo bảng (migration)
  đến tạo seeding (tạo dữ liệu mẫu).
- `config` chứa thông tin cấu hình project, từ việc kết nối database đến cache, log...
- `.env` là một file đặc biệt quan trọng khi chạy project, chứa thông tin cấu hình cơ bản
  (được ưu tiên trước config)
  nếu không có file này, project không chạy được. Phần lớn các trường hợp kéo trên git về
  thì không có file này do tính chất bảo mật.


###Các lệnh thông dụng trong laravel và một số thao tác cần biết.
- `php artisan serve` : chạy project.
    - Một số trường hợp lấy project từ trên git về.
        - composer chưa update, update composer bằng lệnh `composer update` hoặc `composer install`.
        - chưa có application key, mở file .env để check.
            - Nếu chưa có, chạy câu lệnh sau để sinh key: `php artisan key:generate`
- Ctrl + C: thoát chương trình đang chạy.
- Ấn nút mũi tên lên, xuống để chạy lại những lệnh vừa chạy.
- Một số trường hợp yêu cầu nhập password thì trong terminal khi bạn gõ password sẽ không được hiển thị,
  không có dấu * hay bất kỳ dấu hiệu -> gõ, hoặc enter cho báo lỗi và gõ lại.
- `php artisan make:controller TenController` Câu lệnh tạo controller.
  Lưu ý phần tên luôn viết hoa chữ cái đầu.

###Routing.
- Cấu hình trong file `routes/web.php`.
- Nếu mapping với console thì có thể hiêu đây là menu trong console. Mỗi lần người dùng
  nhập thông tin vào url và enter tương ứng với việc người dùng chọn 1, 2, 3 trong menu console.
  Cơ chế routing sẽ giúp laravel tìm được một function tương ứng để callback.
- Cơ chế routing phụ thuộc vào
    - `method` (get, post, put, delete, patch...)
    - `link` (đường dẫn người dùng gõ trên trình duyệt),
    - `callback function` là function được gọi khi người dùng truy cập vào một đường dẫn tương ứng.
- Callback function.
    - Có thể trả về đơn giản là text `return 'Hello world'`.
    - Có thể trả về một view `return view('ten-view')`
      (laravel sẽ tự động tìm đến thư mục `resources/views` và tìm tên view tương ứng. Bỏ đuổi .blade.php)
    - `redirect` Có thể điều hướng người dùng sang một trang khác.
- Để project dễ quản lý hơn, thì chúng ta không định nghĩa function trong file `web.php`
  mà thường khai báo thành các `controller` và các hàm tương ứng.
- Sử dụng class Route trong package `Illuminate\Support\Facades\Route;`

###Controller.
- Tạo controller.
    - Vào thư mục `app/Http/Controllers/`, tạo file `TenController.php` và phải là một php class
      extend từ `Controller`.
    - Chạy câu lệnh `php artisan make:controller TenController`, sẽ giúp tạo một controller với tên tương
      ứng mà không cần phải copy thêm code.

###View.
- Sử dụng engine blade `.blade.php`.
- Default các view nằm trong thư mục `resources/views` với đuôi mở rộng là `.blade.php`
- View cho phép kết hợp code html, css, js với code php.
- Có cơ chế để cho các câu lệnh php, if else, for, do while vào.
- Có cơ chế để xây dựng layout cho project.

###Xử lý dữ liệu client gửi lên trong controller, các phương pháp lấy dữ liệu gửi lên.
- Lấy dữ liệu gửi lên trong **form** thì cần lưu ý.
    - Form muốn gửi lên được phải `@csrf`.
    - Để lấy dữ liệu gửi lên từ form. Trong callback function sử dụng thêm tham số
      `Request` (`Illuminate\Http\Request`) dùng hàm get để lấy ra tham số theo tên.

          function functionName(Request $request){
            $firstName = $request->get('firstname');
            $lastName = $request->get('lastname');
            $country = $request->get('country');
          }
- Lấy dữ liệu trong **query string** (tham số gửi trên url). Trong callback function sử dụng thêm tham số
  `Request` (`Illuminate\Http\Request`) dùng hàm get để lấy ra tham số theo tên giống như lấy ra ở form.
    - Ví dụ về query string: `http://localhost:8000/users/login?name=hung&email=hung@gmail&password=123&gender=1`
    - Tham số đầu tiên bắt đầu bằng dấu `?`, từ tham số thứ 2 thì là `&`.
- Gửi dữ liệu thông qua **path variable**, khi khai báo link thì thêm dấu `{ten-bien}`. Ví dụ.
  `/users/detail/{id}`, callback function để làm việc với biến này thì khai báo như sau (tham số
  truyền vào của callback trùng tên với tên biến.)

        public function getUserDetail($id){
           return 'Hello path ' . $id;
        }

###Gửi dữ liệu từ controller ra view và cách hiển thị variable ngoài view.
- Các function trong controller khi return view, ngoài tên view sẽ kèm theo biến.
    - `return view('ten-view'')->with('ten-bien-duoc-su-dung-ngoai-view', 'gia-tri-cua-bien')`.
    - `return view('ten-view', ['ten-bien-1'=> 'gia-tri-bien-1', 'ten-bien-2'=>'gia-tri-bien-2'])`
- Ở ngoài view thì có thể dùng `{{$ten-bien-1}} {{$ten-bien-2}}` để hiển thị dữ liệu của biến.

###Hiển thị dữ liệu ngoài view. Những cấu trúc thường gặp.
- Tham khảo: https://laravel.com/docs/8.x/blade#if-statements
- `{{$tenbien}}` hiển thị dữ liệu của biến hoặc biểu thức.
    - `{{ 10 + 20}}` cho kết quả bằng 30.
- Câu lệnh điều kiện.

      @if($count > 1)
          <p>Hello</p>
      @endif

  hoặc sử dụng câu lệnh if với nhiều case

      @if (count($records) === 1)
          I have one record!
      @elseif (count($records) > 1)
          I have multiple records!
      @else
          I don't have any records!
      @endif

- Sử dụng vòng lặp for i.

      @for($i = 0; $i < count($items); $i++)
          <p>{{$items[$i]}}</p>
      @endfor

- Sử dụng vòng lặp foreach.

      @foreach($users as $user)
          <p>{{$user}}</p>
      @endfor

- Sử dụng switch case.

      @switch($i)
          @case(1)
              <p>Number 1</p>
              @break
          @case(2)
              <p>Number 2</p>
              @break
          @case(3)
              <p>Number 3</p>
              @break
          @default
              <p>Default</p>
              break
      @endswitch
###Tạo layout với template blade.
- Bộ khung chung làm layout `layout.blade.php`, chọn các phần để @yield, là nơi khác biệt giữa các trang con.
    - `@yield('content')` nội dung chính cho mỗi trang.
    - `@yield('title')` title cho mỗi trang.
    - `@yield('script')` dùng cho những trường hợp mà có file js riêng.
    - `@yield('css')` dùng cho những trường hợp có css riêng.
- Tại các trang riêng cần lưu ý.
    - `@extends('layout')` dùng để khai báo layout dùng chung của trang. Cần lưu ý đường dẫn vào file `layout.blade.php`
      Cần trỏ đường dẫn đầy đủ kèm dấu `.` từ thư mục `views` vào bên trong file.
    - `@section('content') @endsection` tương ứng với từ khoá `@yield('content')` tạo ra các phần riêng của trang.
- Nhúng tài nguyên vào trang.
    - Tất cả phần tài nguyên gồm: `css, js, image` nên cho vào thư mục public
    - Liên kết đến các file này sử dụng cú pháp: `{{URL::asset('js/index.js')}}`
        - Lưu ý là đường link sẽ tính bắt đầu từ public.
        - Không cần import namespace đầy đủ của lớp URL.
        - Khi copy template về thì phải sửa lại phần lớn link này.
###Làm việc với database.
- Mở xampp, mở mysql và apache.
- Cấu hình kết nối dabase trong file `.env`

      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=t2009a_hello_laravel
      DB_USERNAME=root
      DB_PASSWORD=

- Tạo model để mapping với các bảng trong database.
  Câu lệnh tạo model kèm file migration (trong thư mục `database/migrations`): `php artisan make:model Account --migration`
- Thực hiện udpate vào database. `php artisan migrate` `php artisan migrate:refresh`.
    - Lỗi `key too long` thì vào file `app/Providers/AppServiceProvider.php` trong hàm `boot`,
      thêm dòng `Schema::defaultStringLength(191);`, cần bổ sung `use Illuminate\Support\Facades\Schema;` đầu file.
    - Lỗi báo bảng tồn tại, nếu đang trong `quá trình phát triển` thì có thể fix đơn giản tất cả bảng
      trong database và chạy lại lệnh.
    - Khi có thay đổi tên trường, thêm trường hoặc kiểu dữ liệu của trường thì sau khi sửa trong
      file migrate chạy `php artisan migrate:refresh` hoặc `php artisan migrate:fresh`

###Migration dữ liệu vào database.
- Là quá trình khai báo và update kiểu dữ liệu các bảng từ code sang database.
- `$table->increments('id');` tạo trường id tự tăng.
- `$table->integer('price');` tạo trường price kiểu int.
- `$table->string('name');` tạo trường name kiểu string.
- `$table->integer('status')->default(1);` tạo trường status kiểu int có giá trị default 1.
- `$table->integer('categoryId')->unsigned();` khai báo trường categoryId kiểu int nhưng phải là số dương.
  `$table->foreign('categoryId')->references('id')->on('categories');`
  tạo ra một khoá ngoại trên bảng tại trường `categoryId` và có khoá chính là trường tên là `id`
  nhưng trên bảng `categories`
  thường đi thành một cặp để khai báo khoá ngoại.
- `$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));` tạo trường `created_at` kiểu
  timestamp và lấy giá trị mặc định thời gian hiện tại.
- Khi tạo khoá ngoại, ví dụ từ bảng `products` sang bảng `categories` thì phải tạo bảng
  `categories`, trong trường hợp sinh ra migrate của bảng product trước thì sửa nội dung ngày tháng
  để bảng `categories` có thể được tạo trước (trick) `2021_06_28_083424_create_products_table.php` sang
  `2021_06_28_083400_create_products_table.php`

###Seeder trong laravel.
- Là quá trình tạo ra dữ liệu mẫu, phù hợp, đầy đủ cho project.
- Đảm bảo quá trình demo sẽ thể hiện sự chuyên nghiệp của sản phẩm cũng như
  có thể demo được những chức năng khó, đòi hỏi dữ liệu nhiều.
- Dễ dàng backup và khởi tạo lại dữ liệu, phục vụ quá trình test.
- Lệnh tạo `php artisan make:seeder TenSeeder`, tạo ra một file tên `TenSeeder` trong thư mục
  `database/seeders`. Lưu ý `TenSeeder` tương ứng với các bảng như `ProductSeeder`, `CategorySeeder`. Tên này với đuôi Seeder có thể thay đổi được,
  nhưng phải đảm bảo đồng bộ giữa các file. Mỗi một bảng cần có một file Seeder riêng biệt, không nên viết chung.
- Các seeder nên sử dụng các dòng sau để tránh các vấn đề về khoá ngoại, và đảm bảo dữ liệu mới được sinh lại từ đầu.
    - `\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');` thực hiện trước khi
      chạy seeder để đảm bảo quá trình insert update, không bị ảnh hưởng bởi khoá ngoại, thường dùng đầu file.
    - `\Illuminate\Support\Facades\DB::table('categories')->truncate();` thực hiện xoá hoàn toàn dữ liệu trong bảng
      nhưng không xoá bảng, nó reset id count về giá trị ban đầu là 0.
    - `\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');`  mở lại quá trình check, thường dùng cuối file
- Quá trình insert nên thức hiện theo mảng. Nền kèm id (kể cả tự tăng) để đảm bảo matching với khoá ngoại ở bảng khác.


        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name' => 'Lipstick',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR81NLdW06WdMGkj160-JKrFThFXCYqSyShd85PTd4uRDpEnmHw',
                'description' => 'Lipstick is a cosmetic product containing pigments, oils-v, waxes, and emollients that apply color, texture, and protection to the lips.'
            ],
            [
                'name' => 'Lip Gloss',
                'images' => 'https://media.loveitopcdn.com/6458/kcfinder/upload//images/cach-lam-son-bong-handmade-cho%20moi-cang-mong.jpg',
                'description' => 'Lip gloss is a product used primarily to give lips a glossy lustre, and sometimes to add a subtle color. It is distributed as a liquid or a soft solid (not to be confused with lip balm, which generally has medical or soothing purposes) or lipstick, which generally is a solid, cream like substance that gives off a more pigmented color',
            ]
        ]);
- Nên insert thêm ngày tháng để phục vụ test.
    - Trong quá trình migrate sẽ có đoạn `$table->timestamps()` tự động thêm 2 trường `created_at`, `updated_at`.
    - Khi tạo seeder có thể trực tiếp thêm theo các cách sau.
        - `'created_at' => '1990-01-20'` đưa ngày tháng vào theo dạng chuỗi có định dạng `yyyy-MM-dd`.
        - `'created_at' => \Illuminate\Support\Carbon::now()` lấy theo đúng thời gian hiện tại khi chạy seed.
        - `'created_at' => \Illuminate\Support\Carbon::now()->addDays(-1)` lấy theo đúng thời gian hiện tại khi chạy seed, cộng thêm 1 ngày.
    - Việc tạo ngày tháng theo khoảng thời gian hiện tại đặc biệt quan trọng trong việc tạo dữ liệu thống kê, ví dụ:
      biểu đồ doanh thu theo thời gian, thị phần của sản phẩm...
- Tổng kết, file seeder sẽ gần như sau.

      \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      \Illuminate\Support\Facades\DB::table('categories')->truncate();
      \Illuminate\Support\Facades\DB::table('categories')->insert([
          [
              'name' => 'Lipstick',
              'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR81NLdW06WdMGkj160-JKrFThFXCYqSyShd85PTd4uRDpEnmHw',
              'description' => 'Lipstick is a cosmetic product containing pigments, oils-v, waxes, and emollients that apply color, texture, and protection to the lips.'
          ],
          [
              'name' => 'Lip Gloss',
              'images' => 'https://media.loveitopcdn.com/6458/kcfinder/upload//images/cach-lam-son-bong-handmade-cho%20moi-cang-mong.jpg',
              'description' => 'Lip gloss is a product used primarily to give lips a glossy lustre, and sometimes to add a subtle color. It is distributed as a liquid or a soft solid (not to be confused with lip balm, which generally has medical or soothing purposes) or lipstick, which generally is a solid, cream like substance that gives off a more pigmented color',
          ]
      ]);
      \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
- Trong file DatabaseSeeder hàm `run` thêm các đoạn gọi đến Seeder con để khi gọi db:seed sẽ chạy toàn bộ mà không cần gọi cụ thể từng file.
    - `$this->call(CategorySeeder::class);`
    - `$this->call(CustomerSeeder::class);`
- Chạy dbseed bằng lệnh (lựa chọn 1):
    - `php artisan db:seed` đơn thuần chạy lại file DatabaseSeeder.php
    - `php artisan db:seed --class=UserSeeder` chạy lại file UserSeeder
    - `php artisan migrate:fresh --seed` vừa thực hiện reset hard database (xoá toàn bộ database cũ, migrate lại) và chạy file DatabaseSeeder.

###Model trong laravel.
- Lấy ra danh sách các bản ghi:

      $list = Product::all();
      // đưa ra view.
- Lấy theo id.

      $obj = Product::find(1); // id = 1
- Lọc theo trường.

      $list = Product::where('ten-truong', '>', 'gia-tri') // các toán tử có thể là >, =, < like....
- Tạo mới bản ghi.

      $obj = new Product();
      $obj->name = 'San pham 1';
      $obj->price = 10000;
      $obj->save();    

- Update bản ghi.

      $obj = Product::find(1); // id = 1
      $obj->name = 'Giá trị update';
      $obj->price = 20000;
      $obj->save();
- Delete bản ghi.

  Delete cứng.

      $obj = Product::find(1); // id = 1
      $obj->delete(); // hard delete

  Delete mềm.

      $obj = Product::find(1); // id = 1
      $obj->status = -1;
      $obj->updated_at = Carbon::now();
      $obj->save();

###Phân trang và customize phân trang.
- Sử dụng phân trang mặc định.
    - Trong phần controller khi lấy dữ liệu ra thay vì sử dụng `Model::all()`
      thì chúng ta chuyển thành `Model::paginate(10)` trong đó 10 là số phần tử cho một trang.
      Ví dụ `Product::paginate(10)`

              return view('list-product', ['list'=> Product::paginate(10)]);

    - Trong phần view. Sử dụng cú pháp `{!! $list->links() !!}` để hiển thị các trang một cách mặc định.
      Lưu ý phần `$list` là tên biến được truyền từ controller.

              {!! $list->links() !!}

- Customize phân trang (khi thật sự hiểu cách phân trang có thể làm khác).
    - Tạo view riêng dành cho phân trang: tạo thư mục `pagination` trong `resources/views`, tạo file `default.blade.php`.
    - C1. Copy nội dung sau đưa vào file `default.blade.php`.

              @if ($paginator->lastPage() > 1)
                  <ul class="pagination">
                      <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                          <a href="{{ $paginator->url(1) }}">Previous</a>
                      </li>
                      @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                          <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                              <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                          </li>
                      @endfor
                      <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                          <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
                      </li>
                  </ul>
              @endif
    - C2. Chi tiết hơn. Copy nội dung sau đưa vào file `default.blade.php`.

              <?php
              // config
              $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
              ?>
              
              @if ($paginator->lastPage() > 1)
                  <ul class="pagination">
                      <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                          <a href="{{ $paginator->url(1) }}">First</a>
                      </li>
                      @if($paginator->currentPage() > 1)
                          <li>
                              <a href="{{ $paginator->url($paginator->currentPage() - 1) }}">Previous</a>
                          </li>
                      @endif
                      @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                          <?php
                          $half_total_links = floor($link_limit / 2);
                          $from = $paginator->currentPage() - $half_total_links;
                          $to = $paginator->currentPage() + $half_total_links;
                          if ($paginator->currentPage() < $half_total_links) {
                              $to += $half_total_links - $paginator->currentPage();
                          }
                          if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                              $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                          }
                          ?>
                          @if ($from < $i && $i < $to)
                              <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                  <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                              </li>
                          @endif
                      @endfor
                      @if($paginator->currentPage() < $paginator->lastPage())
                          <li>
                              <a href="{{ $paginator->url($paginator->currentPage() + 1) }}">Next</a>
                          </li>
                      @endif
                      <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                          <a href="{{ $paginator->url($paginator->lastPage()) }}">Last</a>
                      </li>
                  </ul>
              @endif
    - Trong file danh sách thay vì

          {!! $list->links() !!}

      thì chuyển thành

          @include('pagination.default', ['paginator' => $list])
    - Lưu ý một số tên biến cần biết khi customize thêm.
        - `$paginator` là tên biến được truyền vào tại dùng @include.
        - `$paginator->lastPage()` là page cuối cùng.
        - `$paginator->currentPage()` là page hiện tại.
        - `$paginator->url(3)` sẽ hiện thị ra link cho trang thứ 3.

###Validate dữ liệu.
- Sử dụng jquery validation `https://jqueryvalidation.org/documentation/` hoặc javascript. Xem lại kỳ 1.
- Validate trong database sử dụng các rằng buộc, trigger, store procedure (sql server, mysql).
- Sử dụng ngôn ngữ code backend để  validate. Với php laravel thì sẽ tiến hành theo link `https://laravel.com/docs/8.x/validation`
    - Cách 1. Validate tại controller.

            $request->validate(
                    [
                        'name' => 'required|min:10|max:15',
                        'price' => 'required'
                    ],
                    [
                        'name.required' => 'Vui lòng nhập tên.',
                        'name.min' => 'Tên phải lớn hơn 10 ký tự.',
                        'name.max' => 'Tên phải nhỏ hơn 15 ký tự.',
                    ]
              );

    - Cách 2. Validate tại `FormRequest` riêng biệt.
        - Tạo form request với câu lệnh sau.

              php artisan make:request StoreProductRequest
        - Trong hàm store của controller, chuyển tham số từ `Request $request` thành `StoreProductRequest $request`.
          Cụ thể, chuyển từ

              public function store(Request $request)
          Thành

              public function store(StoreProductRequest $request)
        - Trong `StoreProductRequest` khai báo rules cũng như message. `authorize()` return true.

              public function rules()
              {
                  return [
                      'title' => 'required|unique:posts|max:255',
                      'body' => 'required',
                  ];
              }

              public function messages()
              {
                  return [
                      'name.required' => 'Vui lòng nhập tên.',
                      'name.min' => 'Tên phải lớn hơn 10 ký tự.',
                      'name.max' => 'Tên phải nhỏ hơn 15 ký tự.',
                      'price.required' => 'Vui lòng nhập giá.'
                  ];
              }

              // validate theo business riêng.
              public function withValidator($validator)
              {
                  $validator->after(function ($validator) {
                      if($this->get('name') == 'xuanhung'){
                          $validator->errors()->add('name', 'Tao không chơi với thằng Hùng.');
                      }
                  });
              }

    - Danh sách validate rules: `https://laravel.com/docs/8.x/validation#available-validation-rules`.
    - Tại view, hiển thị tổng quan lỗi ở đầu form.

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    - Tại view, hiển thị lỗi tại từng trường, bên dưới là hiển thị lỗi cho trường `price`

            @error('price')
                <div class="text-danger">* {{ $message }}</div>
            @enderror

###Lệnh tổng hợp.
- php artisan make:controller ProductController --resource
    






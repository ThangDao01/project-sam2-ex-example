@extends('layout.admin-layout')
@section('title')
    Course-create
@endsection
@section('detail')
    <section class="wrapper" style="padding: 0">
    </section>
    <section class="panel" style="min-height: 550px;">
        <p class="panel-heading">
            Form Course-create
        </p>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" action="/admin/course/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="course" class="form-control" placeholder="vui lòng nhập tên....">
                        @error('course')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">price</label>
                    <div class="col-sm-2">
                        <input type="text" name="price" class="form-control" id="currency-field"
                               pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" placeholder="$1,000,000.00">
                        @error('price')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                    <select name="" id="donvi-value">
                        <option value="$">$</option>
                        <option value="VND">VND</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Thumbnail</label>
                    <div class="col-sm-5">
                        <input type="hidden" class="form-control" id="in-images" name="thumbnail">
                        <button type="button" id="in-btn-images" class="cloudinary-button">Upload Images</button>
                        <img id="demo-img" src="{{URL::asset('images/default-Image.png') }}" width="100px" alt="">
                        @error ('thumbnail')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="lesson">Lesson</label>
                    <div class="col-sm-2">
                        <div id="modalLesson" class="w3-modal">
                            <div class="w3-modal-content">
                                <header class="w3-container w3-teal">
        <span onclick="document.getElementById('modalLesson').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
                                    <h2>Check box to add lesson</h2>
                                </header>
                                <div class="w3-container">
                                    <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>lessonName</th>
                                            <th>lisMaterialId</th>
                                            <th>dataSupportId</th>
                                            <th>Check box</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $data)
                                            <tr class="gradeX">
                                                <td>{{$data->id}}</td>
                                                <td>{{$data->lessonName}}</td>
                                                <td>{{$data->listMaterialId}}</td>
                                                <td>{{$data->dataSupportId}}</td>
                                                <td class="actions">
                                                    <input type="checkbox" class="lessonChecks" value="{{$data->id}}">
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="w3-container w3-teal" style="text-align: center">
                                    <button type="button"
                                            onclick="document.getElementById('modalLesson').style.display='none'"
                                            class="btn btn-warning">Cancel
                                    </button>
                                    <button type="button" onclick="getValue()" class="btn btn-success">Done</button>
                                </footer>
                            </div>
                        </div>
                        <div>
                            <input type="text" value="" name="listLesson" id="lesson">
                            <button type="button" id="in-btn-images" class="cloudinary-button"
                                    onclick="document.getElementById('modalLesson').style.display='block'">Add Lesson
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Time Finish(day)</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" name="timeFinish">
                        @error('timeFinish')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-8">
                        <textarea style="resize: none" rows="8" type="text" class="form-control" name="Description"
                                  id="ckeditor1"
                                  placeholder="vui lòng nhập thông tin...."></textarea>
                        @error('Description')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-10 form-group" style="text-align: center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>

    <script type="text/javascript">
        var ImagesUrl = cloudinary.createUploadWidget({
                cloudName: 'thangdao04',
                uploadPreset: 'ekcloudinary'
            }, (error, result) => {
                if (!error && result && result.event === "success") {
                    // console.log('Done! Here is the image info: ', result.info);
                    document.getElementById('in-images').value = result.info.secure_url;
                    document.getElementById('demo-img').src = result.info.secure_url;
                    console.log(result.info.secure_url);
                }
            }
        )
        document.getElementById("in-btn-images").addEventListener("click", function () {
            ImagesUrl.open();
        }, false);
        var VoiceUrl = cloudinary.createUploadWidget({
                cloudName: 'thangdao04',
                uploadPreset: 'ekcloudinary'
            }, (error, result) => {
                if (!error && result && result.event === "success") {
                    // console.log('Done! Here is the image info: ', result.info);
                    document.getElementById('in-voice').value = result.info.secure_url;
                    document.getElementById('demo-voice').innerHTML = `<source  src="` + result.info.secure_url + `" type="audio/ogg">`
                    console.log(result.info.secure_url);
                }
            }
        )
        document.getElementById("in-btn-voice").addEventListener("click", function () {
            VoiceUrl.open();
        }, false);
    </script>
    <script>
        function getValue() {
            var checks = document.getElementsByClassName('lessonChecks');
            var listLesson = document.getElementById('lesson');
            listLesson.value = checks[0].value;
            for (let i = 1; i < checks.length; i++) {
                if (checks[i].checked === true) {
                    listLesson.value +=','+ checks[i].value;
                }
            }
            document.getElementById('modalLesson').style.display = 'none';
        }

        var donvi = "$";
        var donviSelect = document.getElementById('donvi-value');
        donviSelect.onchange = function () {
            donvi = donviSelect.value;
        }

        $("input[data-type='currency']").on({
            keyup: function () {
                formatCurrency($(this));
            },
            blur: function () {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side += "00";
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                if (!(donvi === "$")) {
                    input_val = "$" + left_side + "." + right_side;

                } else {
                    input_val = left_side + "." + right_side + "VND";
                }

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                if (donvi === "$") {

                    input_val = "$" + input_val;
                } else {
                    input_val = input_val + " VND";

                }
                // final formatting

            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>
@endsection

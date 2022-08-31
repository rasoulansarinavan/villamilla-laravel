@extends('admin.layouts.master')

@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="card">
                        <h5 class="card-header">آپدیت محصول</h5>
                        <div class="card-body">
                            <form action="{{route('admin.residences.store')}}" enctype="multipart/form-data"
                                  class="browser-default-validation" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="customFile">نام اقامتگاه به
                                                فارسی</label>
                                            <input value="{{$residence->name_fa}}" type="text" class="form-control"
                                                   id="customFile"
                                                   name="name_fa">
                                            <span class="text-danger">@error('name_fa'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label for="select-country">نوع محیط گردشگری</label>
                                            <div class="position-relative">
                                                <select class="form-control selected2 selected2-hidden-accessible"
                                                        name="environment_id">
                                                    @foreach($environments as $environment)
                                                        <option
                                                            {{$environment->id==$residence->environment_id ? 'selected':''}}
                                                            value="{{$environment->id}}">{{$environment->name_fa}}</option>
                                                    @endforeach
                                                </select>
                                                <span
                                                    class="text-danger">@error('environment_id'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">تعداد سرویس بهداشتی
                                                ایرانی</label>
                                            <input value="{{$residence->wc_fa}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="wc_fa">
                                            <span class="text-danger">@error('wc_fa'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">تعداد تخت خواب 2
                                                نفره</label>
                                            <input value="{{$residence->double_bed}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="double_bed">
                                            <span class="text-danger">@error('double_bed'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">ظرفیت مهمانان</label>
                                            <input value="{{$residence->capacity}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="capacity">
                                            <span class="text-danger">@error('capacity'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">قیمت برای هر شب</label>
                                            <input value="{{number_format($residence->price)}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="price">
                                            <span class="text-danger">@error('price'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">توضیح کوتاه فارسی</label>
                                            <textarea
                                                type="text" class="form-control" id="basic-default-name"
                                                name="short_desc_fa">
                                                 {{$residence->short_desc_fa}}
                                            </textarea>
                                            <span
                                                class="text-danger">@error('short_desc_fa'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">توضیح بلند فارسی</label>
                                            <textarea type="text" class="form-control" id="editor1"
                                                      name="long_desc_fa">
                                                 {{$residence->long_desc_fa}}
                                            </textarea>
                                            <span class="text-danger">@error('long_desc_fa'){{$message}}@enderror</span>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">نام اقامتگاه به
                                                انگلیسی</label>
                                            <input value="{{$residence->name_en}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="name_en">
                                            <span class="text-danger">@error('name_en'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="select-country">نوع اقامتگاه</label>
                                            <div class="position-relative">
                                                <select class="form-control selected2 selected2-hidden-accessible"
                                                        name="category_id">
                                                    @foreach($categories as $category)
                                                        <option
                                                            {{$category->id==$residence->category_id ? 'selected':''}}
                                                            value="{{$category->id}}">{{$category->name_fa}}</option>
                                                    @endforeach
                                                </select>
                                                <span
                                                    class="text-danger">@error('category_id'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">تعداد سرویس بهداشتی
                                                فرنگی</label>
                                            <input value="{{$residence->wc_en}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="wc_en">
                                            <span class="text-danger">@error('wc_en'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">تعداد تخت خواب 1
                                                نفره</label>
                                            <input value="{{$residence->single_bed}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="single_bed">
                                            <span class="text-danger">@error('single_bed'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">تعداد حمام</label>
                                            <input value="{{$residence->bath}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="bath">
                                            <span class="text-danger">@error('bath'){{$message}}@enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">تخفیف</label>
                                            <input value="{{$residence->discount}}"
                                                   type="text" class="form-control" id="basic-default-name"
                                                   name="discount">
                                            <span class="text-danger">@error('discount'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">توضیح کوتاه
                                                انگلیسی</label>
                                            <textarea type="text" class="form-control" id="basic-default-name"
                                                      name="short_desc_en">
                                                {{$residence->short_desc_en}}
                                            </textarea>
                                            <span
                                                class="text-danger">@error('short_desc_en'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-default-name">توضیح بلند
                                                انگلیسی</label>
                                            <textarea type="text" class="form-control" id="editor2"
                                                      name="long_desc_en">
                                                {{$residence->long_desc_en}}
                                            </textarea>
                                            <span class="text-danger">@error('long_desc_en'){{$message}}@enderror</span>

                                        </div>

                                    </div>

                                </div>
                                <div class="form-group" style="text-align: left">
                                    <label class="form-label" for="basic-default-name">عکس محصول</label>
                                    <div class="custom-file">
                                        <input name="thumbnail" type="file" class="custom-file-input"
                                               id="customFile"
                                               onchange="mainThumbUrl(this)">
                                        <label class="custom-file-label" for="customFile"></label>
                                        <span
                                            class="text-danger">@error('thumbnail'){{$message}}@enderror</span>
                                        <img src="/images/residences/{{$residence->id}}/{{$residence->thumbnail}}" width="100"
                                             alt="" id="mainThumb">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary text-right">افزودن</button>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control-inline">
                                            <div class="radio mr-1">
                                                <input type="checkbox" name="special_offer" id="checkbox"
                                                       style="position:absolute;bottom:47px;right:12px;">
                                                <label for="checkbox">پیشنهاد شگفت انگیز</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        function mainThumbUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#mainThumb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#multiImage').on('change', function () {
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    var data = $(this)[0].files;
                    $.each(data, function (index, file) {
                        if (/(\.|\/)(gif|jpe?g|png|svg)$/i.test(file.type)) {

                            var fRead = new FileReader();
                            fRead.onload = (function (file) {
                                return function (e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(80).height(80);
                                    $('#preview_img').append(img);
                                };
                            })(file);
                            fRead.readAsDataURL(file);
                        }
                    });
                } else {
                    alert(' your browser doesnt support File API!');
                }
            });
        });
    </script>
@endsection

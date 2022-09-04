@extends('admin.layouts.master')
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <form action="{{route('admin.residences.galleryStore',$residence->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="basic-default-name">گالری عکس</label>
                        <div class="custom-file">
                            <input name="multi_img[]" type="file" class="custom-file-input"
                                   id="multiImage" multiple>
                            <label class="custom-file-label" for="customFile"></label>
                            <span
                                class="text-danger">@error('multi_img'){{$message}}@enderror</span>
                            <div class="row m-1" id="preview_img"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">افزودن</button>
                        </div>
                    </div>
                </form>
                <!-- Decks section start -->
                <section id="decks">
                    <div class="row match-height">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">گالری عکس های محصول {{$residence->name_fa}}</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    <div class="row no-gutters">
                                        @foreach($galleries as $gallery)
                                            @if($gallery->residence_id==$residence->id)
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-content">
                                                            <img class="card-img-top img-fluid" style="width: 500px"
                                                                 src="/images/residences/{{$residence->id}}/gallery/small/{{$gallery->image}}"
                                                                 alt="Card image cap"/>
                                                            <div class="card-body">
                                                                <form
                                                                    action="{{route('admin.residences.galleryDestroy',$gallery->id)}}"
                                                                    method="post">
                                                                    @csrf
                                                                    <button class="btn btn-sm sl btn-danger">حذف
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Decks section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#multiImage').on('change', function () {
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    var data = $(this)[0].files;
                    $.each(data, function (index, file) {
                        if (/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)) {

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

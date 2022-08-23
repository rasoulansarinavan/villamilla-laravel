@extends('admin.layouts.master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">افزودن محیط گردشگری</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical"
                                              action="{{route('admin.environments.update',$environment->id)}}"
                                              method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">نام محیط گردشگری به
                                                                فارسی</label>
                                                            <input type="text" id="first-name-vertical"
                                                                   class="form-control" name="name_fa"
                                                                   value="{{$environment->name_fa}}">
                                                            <span
                                                                class="text-danger">@error('name_fa'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">نام محیط گردشگری به
                                                                انگلیسی</label>
                                                            <input type="text" id="first-name-vertical"
                                                                   class="form-control" name="name_en"
                                                                   value="{{$environment->name_en}}">
                                                            <span
                                                                class="text-danger">@error('name_en'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>تصویر محیط گردشگری</label>
                                                            <div class="custom-file">
                                                                <input name="image" type="file"
                                                                       class="custom-file-input"
                                                                       id="inputGroupFile04">
                                                                <label class="custom-file-label"
                                                                       for="inputGroupFile04">انتخاب تصویر
                                                                    محیط گردشگری</label>
                                                                <span
                                                                    class="text-danger">@error('image'){{$message}}@enderror</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <img src="/images/environments/{{$environment->image}}" width="100" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">
                                                        ثبت
                                                    </button>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <!--/ Zero configuration table -->
        </div>
    </div>
    </div>
    <!-- END: Content-->

@endsection

@section('scripts')

    <script src="/admin/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/admin/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="/admin/app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->

@endsection

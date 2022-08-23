@extends('admin.layouts.master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">لیست محیط های گردشگری</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>نام محیط به فارسی</th>
                                                    <th>نام محیط به انگلیسی</th>
                                                    <th>تصویر</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($environments as $environment)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{$environment->name_fa}}</td>
                                                        <td>{{$environment->name_en}}</td>
                                                        <td>
                                                            <img src="/images/environments/{{$environment->image}}"
                                                                 width="70" alt="">
                                                        </td>
                                                        <td>
                                                            <a class="badge badge-primary"
                                                               href="{{route('admin.environments.edit',$environment->id)}}">ویرایش</a>
                                                            <form
                                                                action="{{route('admin.environments.destroy',$environment->id)}}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="badge badge-danger">حذف</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">افزودن محیط گردشگری</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="{{route('admin.environments.store')}}"
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
                                                                   placeholder="">
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
                                                                   placeholder="">
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

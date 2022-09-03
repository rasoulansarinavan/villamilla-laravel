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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">لیست اقامتگاها</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th> اقامتگاه به فارسی</th>
                                                    <th> اقامتگاه به انگلیسی</th>
                                                    <th>تصویر محصول</th>
                                                    <th>قیمت برای هر شب</th>
                                                    <th>محیط گردشگری</th>
                                                    <th>نوع اقامتگاه</th>
                                                    <th>گالری</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($residences as $residence)
                                                    <tr>
                                                        <td>{{$residence->name_fa}}</td>
                                                        <td>{{$residence->name_en}}</td>
                                                        <td>
                                                            <img src="/images/residences/{{$residence->id}}/{{$residence->thumbnail}}" width="100" alt="">
                                                        </td>
                                                        <td>
                                                             {{number_format($residence->price)}}تومان
                                                        </td>
                                                        <td>
                                                            {{$residence->environment->name_fa}}

                                                        </td>
                                                        <td>
                                                            {{$residence->category->name_fa}}

                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm btn-info" href="{{route('admin.residences.gallery',$residence->id)}}">گالری</a>
                                                        </td>
                                                        <td>
                                                            <a class="badge badge-primary"
                                                               href="{{route('admin.residences.edit',$residence->id)}}">ویرایش</a>
                                                            <form id="delete"
                                                                  action="{{route('admin.residences.destroy',$residence->id)}}"
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
    <script>
        $('#delete').submit(function (event) {
            if (!confirm('در صورت تایید این اقامتگاه حذف میشود')) {
                event.preventDefault();
            }
        })
    </script>
@endsection

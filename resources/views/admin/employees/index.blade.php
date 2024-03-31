@extends('admin.layout.master')

@push('style')
<link rel="stylesheet" href="{{ asset('css/employees.css') }}">
@endpush

@section('content') 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-capitalize">Employees</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize">{{ (Route::current()->getName()) }}</li>
                    </ol>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="/employees/create" class="btn btn-primary btn-sm">Add Employee</a>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-2">
                            <table class="table table-hover text-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th>EID</th>
                                        <th>IMAGE</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>DOB</th>
                                        <th>GENDER</th>
                                        <th>CONTACT NO</th>
                                        <th>ADDRESS</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->eid }}</td>
                                            <td>
                                                <div style="padding-bottom:100%; overflow:hidden; position: relative;">
                                                    <img src="{{ isset($employee->image_path) ? 'images/employees/'.$employee->image_path : 'images/portfolio/employee_icon.png'}}"
                                                        alt="User Avatar"
                                                        class="img-size-50 mr-3 img-circle img img-responsive full-width square_image profile-user-img"
                                                        style="position: absolute">
                                                </div>
                                            </td>
                                            <td>{{ $employee->first_name }}</td>
                                            <td>{{ $employee->last_name }}</td>
                                            <td>{{ $employee->dob }}</td>
                                            <td>{{ $employee->gender }}</td>
                                            <td>{{ $employee->contact_no }}</td>
                                            <td>{{ $employee->address }}</td>

                                            <td>
                                                <a href="/employees/edit/{{$employee->eid}}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="/employees/delete/{{$employee->eid}}"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/dist/js/demo.js') }}"></script>

@endsection

 

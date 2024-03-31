@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ Route::current()->getName() }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{ Route::current()->getName() }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">

                        <!-- Horizontal Form -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Employee</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="/employees/update/{{ $employees->eid }}" class="form-horizontal">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input value="{{ $employees->first_name }}" name="first_name" type="Text"
                                                class="form-control" id="first_name" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input value="{{ $employees->last_name }}" name="last_name" type="Text"
                                                class="form-control" id="last_name" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="dob" class="col-sm-2 col-form-label">DOB</label>
                                        <div class="col-sm-10">
                                            <input value="{{ $employees->dob }}" name="dob" type="Date"
                                                class="form-control" id="dob" placeholder="DOB">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <input value="{{ $employees->gender }}" name="gender" type="Text"
                                                class="form-control" id="gender" placeholder="Gender">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="contact_no" class="col-sm-2 col-form-label">Contact No</label>
                                        <div class="col-sm-10">
                                            <input value="{{ $employees->contact_no }}" name="contact_no" type="Text"
                                                class="form-control" id="contact_no" placeholder="Contact No">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input value="{{ $employees->address }}" name="address" type="Text"
                                                class="form-control" id="address" placeholder="Address">
                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a href="/employees" type="submit" class="btn btn-default">Cancel</a>
                                    <button type="submit" class="btn btn-primary float-right">Update</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->

                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('public/dist/js/demo.js') }}"></script>
@endsection

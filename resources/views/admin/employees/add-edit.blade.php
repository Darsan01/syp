@extends('admin.layout.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Request::path() =="employees/create"?'Create' : 'Update' }} Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
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
                <div class="col-md-12">

                    <!-- Horizontal Form -->
                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">Employee</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form method="POST"
                            action="{{ (isset($employees->eid)) ? route('update.employee',$employees->eid) : route('create.employee')}}"
                            class="form-horizontal" enctype="multipart/form-data">

                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-2">
                                        <div class="text-center">

                                            {{-- @if (isset())
                                                <h1>Success</h1>
                                            @else
                                                <h1>UnASdsd</h1>
                                            @endif --}}
                                            
                                            @if (isset($employees->image_path))
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset('images/employees/'.$employees->image_path) }}" alt="User profile picture">
                                            @else
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset('images/portfolio/employee_icon.png') }}"
                                                    alt="User profile picture">
                                            @endif

                                            <p><input type="file" name="image_path" id="file" onchange="loadFile(event)" style="display: none;"></p>

                                            <p>
                                                <label for="file" style="cursor: pointer;"
                                                    class="btn btn-success">Upload Image</label>
                                            </p>
                                            <p class="align-item-center">
                                                <img class="profile-user-img img-fluid img-circle" id="output" width="400" src=""/>
                                            </p>

                                        </div>
                                    </div>

                                    <div class="col-md-5">


                                        <div class="form-group row">
                                            <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                                            <div class="col-sm-10">
                                                <input name="first_name"
                                                    value="@if(isset($employees->first_name)){{ $employees->first_name }}@endif"
                                                    type="Text" class="form-control" id="first_name"
                                                    placeholder="First Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-sm-3 col-form-label">Last Name</label>
                                            <div class="col-sm-10">
                                                <input name="address"
                                                    value="@if(isset($employees->address)){{ $employees->address }}@endif"
                                                    type="Text" class="form-control" id="address" placeholder="Address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="dob" class="col-sm-3 col-form-label">DOB</label>
                                            <div class="col-sm-10">
                                                <input name="dob"
                                                    value="@if(isset($employees->dob)){{ $employees->dob }}@endif"
                                                    type="Date" class="form-control" id="dob" placeholder="Last Name"
                                                    onchange="calcAge()">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="age" class="col-sm-3 col-form-label">Age</label>
                                            <div class="col-sm-10">
                                                <input name="age"
                                                    value="@if(isset($employees->age)){{ $employees->age }}@endif"
                                                    type="Text" class="form-control" id="age" placeholder="Age">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Gender</label>
                                            <div class="col-sm-10">
                                                <select class="form-control select2" name="gender"
                                                    value="@if(isset($employees->gender)){{ $employees->gender }}@endif">

                                                    <option selected="selected">
                                                        @if(isset($employees->gender)){{ $employees->gender }}@endif
                                                    </option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="cnic" class="col-sm-3 col-form-label">CNIC</label>
                                            <div class="col-sm-10">
                                                <input name="cnic"
                                                    value="@if(isset($employees->cnic)){{ $employees->cnic }}@endif"
                                                    type="Text" class="form-control" id="cnic" placeholder="CNIC">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <div class="form-group row">
                                            <label for="hire_date" class="col-sm-3 col-form-label">Hire Date</label>
                                            <div class="col-sm-10">
                                                <input name="hire_date"
                                                    value="@if(isset($employees->hire_date)){{ $employees->hire_date }}@endif"
                                                    type="Date" class="form-control" id="hire_date"
                                                    placeholder="Hire Date">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="contact_no" class="col-sm-3 col-form-label">Contact No</label>
                                            <div class="col-sm-10">
                                                <input name="contact_no"
                                                    value="@if(isset($employees->contact_no)){{ $employees->contact_no }}@endif"
                                                    type="Text" class="form-control" id="contact_no"
                                                    placeholder="Contact No">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input name="last_name"
                                                    value="@if(isset($employees->last_name)){{ $employees->last_name }}@endif"
                                                    type="Text" class="form-control" id="last_name"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="type" class="col-sm-3 col-form-label">Type</label>
                                            <div class="col-sm-10">
                                                <input name="type"
                                                    value="@if(isset($employees->type)){{ $employees->type }}@endif"
                                                    type="Text" class="form-control" id="type" placeholder="Type">
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="submit"
                                    class="btn btn-primary float-right">{{ Request::path() =="employees/create"?'Create' : 'Update' }}</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->

                <!-- right column -->
                {{-- <div class="col-md-6">

                </div> --}}
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

<script src="{{ asset('public/js/employees.js') }}"></script>

<script>
    var loadFile = function (event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };


    function calcAge() {
        // To calculate age:
        var birthDate = document.getElementById('dob');
        var birthYear = birthDate.getFullYear();

        var currentDate = new Date();
        var currentYear = currentDate.getFullYear();

        age = currentYear - birthYear;

        var d = new Date();
        var n = d.getFullYear();

        function getAge(currentYear,birthYear) {
            age = currentYear - birthYear;
            return age;
        }
        calculatedAge = getAge(currentYear,birthYear);
        alert(calculatedAge);
        document.getElementById('age').value = calculatedAge

    }

</script>



@endsection

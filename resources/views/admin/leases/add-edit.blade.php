@extends('admin.layout.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Request::path() =="leases/create"?'Create' : 'Update' }} Lease</h1>
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
                <div class="col-md-6">

                    <!-- Horizontal Form -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Property</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST"
                            action="{{ (isset($leases->lid)) ? route('update.lease',$leases->lid) : route('create.lease')}}"
                            class="form-horizontal">

                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">EID</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2" name="eid"
                                            value="@if(isset($leases->eid)){{ $leases->eid }}@endif">

                                            <option selected="selected">
                                                @if(isset($leases->eid)){{ $leases->eid }}
                                                @else {{ 'Choose from below options' }}@endif
                                            </option>

                                            @foreach ($employees as $employee)
                                            <option>{{ $employee->first_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">PID</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2" name="pid"
                                            value="@if(isset($leases->pid)){{$leases->pid}}@endif">

                                            <option selected="selected">
                                                @if(isset($leases->pid)){{ $leases->pid }}
                                                @endif
                                            </option>

                                            @foreach ($properties as $property)
                                            <option value="{{ $property->pid }}">
                                                {{ $property->pid }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                                    <div class="col-sm-10">
                                        <input name="duration"
                                            value="@if(isset($leases->duration)){{ $leases->duration }}@endif"
                                            type="Text" class="form-control" id="duration" placeholder="Duration">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lease_start" class="col-sm-2 col-form-label">Lease Start</label>
                                    <div class="col-sm-10">
                                        <input name="lease_start"
                                            value="@if(isset($leases->lease_start)){{ $leases->lease_start }}@endif"
                                            type="Date" class="form-control" id="lease_start" placeholder="Lease Start">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lease_expire" class="col-sm-2 col-form-label">Lease Expire</label>
                                    <div class="col-sm-10">
                                        <input name="lease_expire"
                                            value="@if(isset($leases->lease_expire)){{ $leases->lease_expire }}@endif"
                                            type="Date" class="form-control" id="lease_expire" placeholder="Lease Expire">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rent" class="col-sm-2 col-form-label">Rent</label>
                                    <div class="col-sm-10">
                                        <input name="rent"
                                            value="@if(isset($leases->rent)){{ $leases->rent }}@endif"
                                            type="Number" class="form-control" id="rent" placeholder="Rent">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Desc.</label>
                                    <div class="col-sm-10">
                                        <input name="description"
                                            value="@if(isset($leases->description)){{ $leases->description }}@endif"
                                            type="Text" class="form-control" id="description" placeholder="Description">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="submit"
                                    class="btn btn-primary float-right">
                                    {{ Request::path() =="leases/create"?'Create' : 'Update' }}</button>
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

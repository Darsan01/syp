@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ Request::path() == 'properties/create' ? 'Create' : 'Update' }} Property</h1>
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
                                action="{{ isset($properties->pid) ? route('update.property', $properties->pid) : route('create.property') }}"
                                class="form-horizontal">

                                {{-- action="{{ (isset($properties->pid)) ? route('properties/update/'.$properties->pid) : route('properties/create')}}"
                            class="form-horizontal"> --}}

                                {{-- ($properties){{ route('voyager.posts.update', $properties->pid) }}@else{{ route('voyager.posts.store') }}"
                            --}}

                                {{-- @if ($properties){{'/properties/update/{{ $properties->pid }}' }}
                            @else{{ '/properties/store' }}@endif --}}

                                @csrf
                                <div class="card-body">

                                    {{-- <div class="form-group row">
                                    <label for="location" class="col-sm-2 col-form-label">Location</label>
                                    <div class="col-sm-10">
                                        <input name="location"
                                            value="@if (isset($properties->location)){{ $properties->location }}@endif"
                                type="Text" class="form-control" id="location" placeholder="Location">
                            </div>
                    </div> --}}

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Location</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2" name="location"
                                                value="@if (isset($properties->location)) {{ $properties->location }} @endif">

                                                <option selected="selected">
                                                    @if (isset($properties->location))
                                                        {{ $properties->location }}
                                                    @endif
                                                </option>

                                                @foreach ($locations as $location)
                                                    <option>{{ $location->location }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input name="price"
                                                value="@if (isset($properties->price)) {{ $properties->price }} @endif"
                                                type="Text" class="form-control" id="price" placeholder="Price">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="area" class="col-sm-2 col-form-label">Area</label>
                                        <div class="col-sm-10">
                                            <input name="area"
                                                value="@if (isset($properties->area)) {{ $properties->area }} @endif"
                                                type="Text" class="form-control" id="area" placeholder="Area">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                            <input name="type"
                                                value="@if (isset($properties->type)) {{ $properties->type }} @endif"
                                                type="Text" class="form-control" id="type" placeholder="Type">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2" name="type"
                                                value="@if (isset($properties->type)) {{ $properties->type }} @endif">

                                                <option selected="selected">
                                                    @if (isset($properties->type))
                                                        {{ $properties->type }}
                                                    @endif
                                                </option>
                                                <option>Flat</option>
                                                <option>House</option>
                                                <option>Bangalow</option>
                                                <option>Hut</option>
                                                <option>Shop</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="baths" class="col-sm-2 col-form-label">Baths</label>
                                        <div class="col-sm-10">
                                            <input name="baths"
                                                value="@if (isset($properties->baths)) {{ $properties->baths }} @endif"
                                                type="Number" class="form-control" id="baths" placeholder="Baths">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="rooms" class="col-sm-2 col-form-label">Rooms</label>
                                        <div class="col-sm-10">
                                            <input name="rooms"
                                                value="@if (isset($properties->rooms)) {{ $properties->rooms }} @endif"
                                                type="Number" class="form-control" id="rooms" placeholder="Rooms">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="stories" class="col-sm-2 col-form-label">Stories</label>
                                        <div class="col-sm-10">
                                            <input name="stories"
                                                value="@if (isset($properties->stories)) {{ $properties->stories }} @endif"
                                                type="Number" class="form-control" id="stories" placeholder="Stories">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Desc.</label>
                                        <div class="col-sm-10">
                                            <input name="description"
                                                value="@if (isset($properties->description)) {{ $properties->description }} @endif"
                                                type="Text" class="form-control" id="description"
                                                placeholder="Description">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-default">Cancel</button>
                                    <button type="submit"
                                        class="btn btn-primary float-right">{{ Request::path() == 'properties/create' ? 'Create' : 'Update' }}</button>
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

@extends('admin.layout.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-capitalize">{{ (Route::current()->getName()) }}</h1>
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
                    <a href="/properties/create" class="btn btn-primary btn-sm">Add Property</a>

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
                                        <th>PID</th>
                                        <th>LOCATION</th>
                                        <th>PRICE</th>
                                        <th>AREA</th>
                                        <th>TYPE</th>
                                        <th>BATHS</th>
                                        <th>ROOMS</th>
                                        <th>STORIES</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties as $property)
                                    <tr>
                                        <td>{{ $property->pid }}</td>
                                        <td>{{ $property->location }}</td>
                                        <td>{{ $property->price }}</td>
                                        <td>{{ $property->area }}</td>
                                        <td>{{ $property->type }}</td>
                                        <td>{{ $property->baths }}</td>
                                        <td>{{ $property->rooms }}</td>
                                        <td>{{ $property->stories }}</td>
                                        <td>
                                            <a href="/properties/edit/{{$property->pid}}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/properties/delete/{{$property->pid}}"
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>


<script>
    
    

    // $(function () {  `

    //     $("#example1").DataTable({
    //         "scrollX": true,
    //         "responsive": true,
    //         "lengthChange": false,
    //         "autoWidth": false,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print"]
    //     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    //     $('#example2').DataTable({
    //         "paging": true,
    //         "lengthChange": false,
    //         "searching": false,
    //         "ordering": true,
    //         "info": true,
    //         "autoWidth": false,
    //         "responsive": true,
    //     });
    // });

</script>

@endsection

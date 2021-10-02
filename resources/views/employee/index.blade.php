@include('admin.head')
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

<link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Table--}}
                    <div class="fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 inline">
                                <h2 class="pull-left">Employees Details</h2>

                                {{-- create  --}}
                                @include('employee.create')
                                {{-- end of create--}}

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Full name</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Degree</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($employees as $employee )
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>
                                                        <a href="{{ route('employee.show', [$employee]) }}" class="link-primary">{{ $employee->full_name }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="tel:+998{{ $employee->phone }}">+998{{ $employee->phone }}</a>
                                                    </td>
                                                    <td>{{ $employee->category }}</td>
                                                    <td>{{ $employee->degree }}</td>
                                                    <td style="padding: 1, 0, 1, 1;">

                                                        {{-- Update button --}}
                                                        <a href="{{ route('employee.edit', [$employee]) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i>edit</a>
                                                        {{-- Update button --}}

                                                        <form action="{{ route('employee.destroy', [$employee]) }}" method="POST" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of Table--}}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

             <!-- Footer -->
            @include('admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('admin.js_link')
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

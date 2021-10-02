@include('admin.head')
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

                    <div class="container">
                        <div class="main-body">
                              <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                          <h4>{{ $employee->full_name }}</h4>
                                          <p class="text-secondary mb-1"><a href="https://{{ $employee->email }}">{{ $employee->email }}</a></p>
                                          <p class="text-muted font-size-sm"><a href="tell:+998{{ $employee->phone }}">+998{{ $employee->phone }}</a></p>

                                          {{-- Update button --}}
                                          <a href="{{ route('employee.edit', [$employee]) }}" class="btn btn-primary">edit</a>
                                          {{-- End update button --}}

                                          {{-- Delete button --}}
                                          <form action="{{ route('employee.destroy', [$employee]) }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        {{-- End delete button --}}

                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                        <p>Website Markup</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Mobile Template</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>One Page</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-8">
                                  <div class="card mb-3">
                                    <div class="card-body">


                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Category</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $employee->category }}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Degree</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $employee->degree }}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $employee->address }}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Paspord seriya</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <a href="#"> {{ $employee->pasport_seriya }} </a>

                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Description</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $employee->description }}
                                        </div>
                                      </div>
                                      <hr>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>

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

                <div class="container">
                    <div class="main-body">
                        <div class="row">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{-- <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                            <div class="mt-3">
                                                <h4>John Doe</h4>
                                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                                <button class="btn btn-primary">Follow</button>
                                                <a href="https://jummayevnurbek279@gmail.com" target="_blank" class="btn btn-outline-primary">Message</a>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="card">
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
                                </div>
                            </div> --}}
                            <div class="col-lg-8">
                                <div class="card">
                                    <form action="{{route('employee.update', [$employee])}}" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf

                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Full Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="full_name" class="form-control" value="{{ $employee->full_name }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="email" class="form-control" value="{{ $employee->email }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="number" name="tell" class="form-control" max="999999999" min="330000000"  value="{{ $employee->phone }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Category</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="category" class="form-control" value="{{ $employee->category }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Degree</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select name="degree" id="inputState" class="form-control" value="{{ $employee->degree }}">
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>

                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="address" class="form-control" value="{{ $employee->address }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Paspord seriya</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="pasport_seriya" maxlength="9" minlength="9" class="form-control" value="{{ $employee->pasport_seriya }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Paspord photo</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input class="form-control" name="pasport_photo" type="file" id="formFile" value="{{ $employee->pasport_photo }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Description</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <textarea class="form-control" name="description" id="message-text"></textarea value="{{  $employee->description }}" >
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success d-flex justify-content-center">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                @include('admin.footer')
                <!-- End of Footer -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('admin.js_link')

</body>

</html>

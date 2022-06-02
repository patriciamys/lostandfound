@if(Session::has('username'))

@else
    <script>window.location = "/"; </script>
@endif

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/img/png_del.png') }}" type="image/gif" />
    <title>History</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{url('datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <img src="{{ asset('/img/png_del.png') }}" alt="..." width="50" class="mr-3 shadow-sm">
                <div class="sidebar-brand-text mx-3">LOST & FOUND</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Home -->
            <li class="nav-item">
                <a class="nav-link" href="index">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Nav Item - Post Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-plus"></i>
                    <span>Post</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Post:</h6>
                        <a class="collapse-item" href="lostform">Lost</a>
                        <a class="collapse-item" href="foundform">Found</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - History -->
            <li class="nav-item active">
                <a class="nav-link" href="history">
                    <i class="fas fa-fw fa-history"></i>
                    <span>History</span></a>
            </li>

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="profil">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item - About -->
            <li class="nav-item">
                <a class="nav-link" href="about">
                    <i class="fas fa-info-circle"></i>
                    <span>About</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                 <!-- Topbar -->
                 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{( \Illuminate\Support\Facades\Session::get('nama') )}}</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">History</h1>
                    </div>

                    <div class="dropdown-divider"></div>
                    <br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>
                                    {{ $message }}
                                </p>
                            </div>
                        @endif
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Your Lost and Found</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Item</th>
                                            <th>Lost/Found</th>
                                            <th>Date</th>
                                            <th>Place</th>
                                            <th>Description</th>
                                            <th>Picture</th>
                                            <th>Founder/<br>Owner</th>
                                            <th>Status</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Item</th>
                                            <th>Lost/Found</th>
                                            <th>Date</th>
                                            <th>Place</th>
                                            <th>Description</th>
                                            <th>Picture</th>
                                            <th>Founder/<br>Owner</th>
                                            <th>Status</th>
                                            <th>Tools</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nama_item }}</td>
                                            <td>{{ $row->lostandfound }}</td>
                                            <td>{{ $row->date }}</td>
                                            <td>{{ $row->place }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>
                                                <center>
                                                    <img src="{{ URL::to('uploads/' . $row->picture) }}" class="card-img-top" alt="...">
                                                </center>
                                            </td>
                                            <td>{{ $row->founderorowner }}</td>
                                            <td>{{ $row->status }}</td>
                                            <td>
                                                <a class="btn btn-warning mb-2" href="/lostandfound/editItem/{{ $row-> id_barang }}" role="button">Edit</a>
                                                <!-- <a href="/lostandfound/deleteHistory/{{ $row->id_barang }}" type="button" class="btn btn-danger">Delete</a> -->
                                                <a href="/lostandfound/deleteHistory/{{ $row->id_barang }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{$row->id_barang}}">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="deleteModal-{{$row->id_barang}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                        <a href="/lostandfound/deleteHistory/{{ $row->id_barang }}" class="btn btn-primary">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Lost and Found Copyright &copy; Kelompok 9 Proyek II Pabwe. All rights reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{url('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('jquery/jquery.min.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{url('datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{url('js/demo/datatables-demo.js')}}"></script>

</body>

</html>
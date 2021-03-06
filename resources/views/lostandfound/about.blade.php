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
    <title>Lost & Found</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">

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
                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Post</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Post:</h6>
                        <a class="collapse-item active" href="lostform">Lost</a>
                        <a class="collapse-item" href="foundform">Found</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - History -->
            <li class="nav-item">
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
            <li class="nav-item active">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{( \Illuminate\Support\Facades\Session::get('nama') )}}</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
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
                        
                        <h1 class="h3 mb-0 text-gray-800">About</h1>
                    </div>               
                    <hr>
                    <p><b>- Description -</b></p>
                    <p>
                        Aplikasi berbasis web ini dibuat untuk memudahkan mahasiswa/mahasiswi Institut Teknologi Del
                        Banyaknya barang kehilangan maupun barang yang ditemukan oleh mahasiswa/i di kampus, sehingga menyulitkan mahasiswa dalam
                        mencari barang mereka yang hilang, dan menyulitkan mahasiswa dalam mengembalikan barang yang mereka temukan.
                        Oleh karena itu, aplikasi ini dapat memudahkan mahasiswa/i dalam mengatasi hal tersebut. 
                    </p>
                    <p><b>- How It Works? -</b></p>
                    <p>
                        Aplikasi ini bekerja dengan cara mengimput data barang yang hilang dan barang yang mereka temukan.
                        Mahasiswa/i akan login ke dalam aplikasi ini dengan menggunakna username dan password yang telah mereka buat sebelumnya di menu register.
                        Setelah mahasiswa/i login, maka akan dibawa ke halaman Home. Disini akan terlihat barang barang yang hilang dan barang yang ditemukan.
                        Jika ingin menginput data kedalam aplikasi ini, maka dapat mengakses tab Post, lalu memilih apakah ingin menginput barang hilang (Lost) atau barang yang ditemukan (Found).
                        Setelah itu, sistem akan meminta data dari barang yang akan dimasukkan. Jika kita memilih tab Lost maka akan diminta data berupa
                        Nama, Last Seen Location (lokasi terakhir dilihat), Last Seen Date (tanggal terakhir dilihat), Description, dan Image untuk memasukkan gambar yang ada.
                        Jika kita memilih tab Found maka akan diminta data berupa Nama, Location Found (lokasi ditemukan), Date Found (tanggal ditemukan), Description, dan Image untuk memasukkan gambar yang ada.
                        Pada menu History, akan dilihat data data yang sudah di input. Pada menu ini kita dapat melihat data yang terperinci seperti Item, Lost/Found,
                        Date, Place, Description, Picture, Founder/Owner, Status, dan Tools (edit/delete). Pada menu Profile terdapat data yang sesuai dengan biodata diri sipengguna.
                    </p>
                    <p><b>- Authors -</b></p>
                    <p>
                        1. 11S19042 - Risky Yan Simanjuntak<br>
                        2. 11S19064 - Patricia Melissa Yolanda Sibarani<br>
                        3. 11S19067 - Cynthia Veronika Pardede<br>                        
                    </p>

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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
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

</body>

</html>
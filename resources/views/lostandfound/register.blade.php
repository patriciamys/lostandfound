<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/img/png_del.png') }}" type="image/gif" />
    <title>Lost and Found - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img src="{{ asset('img/lost.jpg') }}" width="500" height="600"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
						<br><br><br><br>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Lost and Found</h1>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="user" method="post" action="{{ url('lostandfound/registerproses') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" name="fullname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Fullname">
                                    </div>                               
                                </div>
								<div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Password">
                                    </div> 
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                
                            </form>
                            <hr>
                        
                            <div class="text-center">
                                <a class="small" href="/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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
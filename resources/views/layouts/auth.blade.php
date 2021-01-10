<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8" />
        <title>Zeals Schools</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Zealarax School Management System" name="description" />
        <meta content="" name="Zealarax Technologies" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}"> 
        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            @yield('content')
                        </div><!--end card-->
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page --> 

        


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>        

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>
        
    </body>

</html>
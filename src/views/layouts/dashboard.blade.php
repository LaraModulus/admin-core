<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
        <link href="{{asset('assets/laramod/dashboard/sb/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('assets/laramod/dashboard/sb/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('assets/laramod/dashboard/sb/dist/css/sb-admin-2.css')}}" rel="stylesheet">



    <!-- Custom Fonts -->
    <link href="{{asset('assets/laramod/dashboard/sb/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/laramod/dashboard/bower_components/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/laramod/dashboard/bower_components/angular-bootstrap/ui-bootstrap-csp.css')}}" rel="stylesheet">
    <script src="{{asset('assets/laramod/dashboard/bower_components/angular/angular.min.js')}}"></script>
    <script src="{{asset('assets/laramod/dashboard/bower_components/requirejs/require.js')}}"></script>
    <script src="{{asset('assets/laramod/dashboard/bower_components/angular-i18n/angular-locale_'.config('app.locale').'.js')}}"></script>
    <script src="{{asset('assets/laramod/dashboard/angular-sanitize.js')}}"></script>
    <script src="{{asset('assets/laramod/dashboard/bower_components/angular-bootstrap/ui-bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/laramod/dashboard/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js')}}"></script>
    <script src="{{asset('assets/laramod/dashboard/bower_components/angular-sweetalert/SweetAlert.min.js')}}"></script>
    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>angular.module("App").constant("CSRF_TOKEN", '{!! csrf_token() !!}');</script>
</head>

<body data-ng-app="App">

    <div id="wrapper">
        <!-- Navigation -->
        @include('admincore::partials.nav')

        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @yield('modals')
    <!-- jQuery -->
    <script src="{{asset('assets/laramod/dashboard/sb/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/laramod/dashboard/sb/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('assets/laramod/dashboard/sb/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>


    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/laramod/dashboard/sb/dist/js/sb-admin-2.js')}}"></script>
    <script src="{{asset('assets/laramod/dashboard/bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>

    @yield('js')
    <script>
        $(function(){
           $('body').on('click', ':not(.sa-confirm-button-container) .require-confirm', function(){
              return confirm('Are you sure?');
           });
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('vendor/css/metisMenu.min.css')}}" rel="stylesheet">
        <!-- Timeline CSS -->
        <link href="{{asset('vendor/css/timeline.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('vendor/css/startmin.css')}}" rel="stylesheet">
        <!-- DataTables CSS -->
        <link href="{{asset('vendor/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{asset('vendor/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset('vendor/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="wrapper">
      @include('template.navbaradmin')
      @yield('main')
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('vendor/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('vendor/js/metisMenu.min.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{asset('vendor/js/raphael.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('vendor/js/startmin.js')}}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{asset('vendor/js/dataTables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/js/dataTables/dataTables.bootstrap.min.js')}}"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
        });
    </script>
  </body>
</html>

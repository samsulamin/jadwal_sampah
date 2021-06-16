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
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin=""/>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="crossorigin=""/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/><link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
      <style>
        #map { width:auto;height:333px;padding:0;margin:0; }

        .scrollbar-ripe-malinka::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
          background-color: #F5F5F5;
          border-radius: 10px; }

        .scrollbar-ripe-malinka::-webkit-scrollbar {
          width: 12px;
          background-color: #F5F5F5; }

        .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
          border-radius: 10px;
          -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
          background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
          background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }

        .square::-webkit-scrollbar-track {
          border-radius: 0 !important; }

        .square::-webkit-scrollbar-thumb {
          border-radius: 0 !important; }

        .thin::-webkit-scrollbar {
          width: 6px; }

        .example-1 {
          position: relative;
          overflow-y: scroll;
          height: 350px; }
      </style>
  </head>
  <body>
    <div id="wrapper">
      @include('template.navbardesa')
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
    @yield('script')
  </body>
</html>

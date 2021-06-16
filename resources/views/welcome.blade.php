<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('vendor/css/metisMenu.min.css')}}" rel="stylesheet">
        <!-- Timeline CSS -->
        <link href="{{asset('vendor/css/timeline.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('vendor/css/startmin.css')}}" rel="stylesheet">
        <style>
            body {
                /*background: url("{{asset('vendor/img/poci.jpg')}}") no-repeat center center fixed; */
                background-color: #000000;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <img src="{{asset('vendor/img/tegal2.png')}}" style="height:130px; width:auto;" alt="...">
                <h3> <b>Pemerintah Kabupaten Tegal</b></h3>
                <h4> <b>pengangkutan Sampah Perumahan</b></h4>
                <div class="m-b-md">
                    <hr>
                    <a href="{{ route('login') }}" class="btn btn-primary"><b>Login </b></a>
                </div>
            </div>
        </div>
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
    </body>
</html>

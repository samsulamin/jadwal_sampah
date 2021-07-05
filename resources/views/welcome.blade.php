<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pengangkutan Sampah</title>

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
            a,
            a:focus,
            a:hover {
                color: #fff;
            }

            /* Custom default button */
            .btn-default,
            .btn-default:hover,
            .btn-default:focus {
                color: #333;
                text-shadow: none; /* Prevent inheritence from `body` */
                background-color: #fff;
                border: 1px solid #fff;
            }


            /*
            * Base structure
            */

            html,
            body {
                /*css for full size background image*/
                /* background: url(http://p1.pichost.me/i/66/1910819.jpg) no-repeat center center fixed;  */
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                
                height: 100%;
                background-color: #000000;
                color: #fff;
                text-align: center;
                text-shadow: 0 1px 3px rgba(0,0,0,.5);
            }

            /* Extra markup and styles for table-esque vertical and horizontal centering */
            .site-wrapper {
                display: table;
                width: 100%;
                height: 100%; /* For at least Firefox */
                min-height: 100%;
                -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
                    box-shadow: inset 0 0 100px rgba(0,0,0,.5);
            }
            .site-wrapper-inner {
                display: table-cell;
                vertical-align: top;
            }
            .cover-container {
                margin-right: auto;
                margin-left: auto;
            }

            /* Padding for spacing */
            .inner {
                padding: 30px;
            }


            /*
            * Header
            */
            .masthead-brand {
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .masthead-nav > li {
                display: inline-block;
            }
            .masthead-nav > li + li {
                margin-left: 20px;
            }
            .masthead-nav > li > a {
                padding-right: 0;
                padding-left: 0;
                font-size: 16px;
                font-weight: bold;
                color: #fff; /* IE8 proofing */
                color: rgba(255,255,255,.95);
                border-bottom: 2px solid transparent;
            }
            .masthead-nav > li > a:hover,
            .masthead-nav > li > a:focus {
                background-color: transparent;
                border-bottom-color: #a9a9a9;
                border-bottom-color: rgba(255,255,255,.25);
            }
            .masthead-nav > .active > a,
            .masthead-nav > .active > a:hover,
            .masthead-nav > .active > a:focus {
                color: #fff;
                border-bottom-color: #fff;
            }

            @media (min-width: 768px) {
                .masthead-brand {
                    float: left;
                }
                .masthead-nav {
                    float: right;
                }
            }


            /*
            * Cover
            */

            .cover {
                padding: 0 20px;
            }
            .cover .btn-lg {
                padding: 10px 20px;
                font-weight: bold;
            }

            /*
            * Footer
            */

            .mastfoot {
                color: #999; /* IE8 proofing */
                color: rgba(255,255,255,.5);
            }
            /*
            * Affix and center
            */
            @media (min-width: 768px) {
            /* Pull out the header and footer */
                .masthead {
                    position: fixed;
                    top: 0;
                }
                .mastfoot {
                    position: fixed;
                    bottom: 0;
                }
                /* Start the vertical centering */
                .site-wrapper-inner {
                    vertical-align: middle;
                }
                /* Handle the widths */
                .masthead,
                .mastfoot,
                .cover-container {
                    width: 100%; /* Must be percentage or pixels for horizontal alignment */
                }
            }

            @media (min-width: 992px) {
                .masthead,
                .mastfoot,
                .cover-container {
                    width: 700px;
                }
            }
        </style>
    </head>
    <body class="text-center">
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <ul class="nav masthead-nav">
                                <li>
                                <a data-toggle="modal" data-target="#staticBackdrop"><i class='fas fa-user-plus'></i> Registrasi Desa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner cover">
                              <!-- /.row -->
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                <i class="fa fa-check fa-fw"></i>{{session('message')}}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning" role="alert">
                                <i class="fa fa-check fa-fw"></i>{{session('warning')}}
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <img src="{{asset('vendor/img/rash.png')}}" style="height:150px; width:auto;" alt="...">
                        <h3 class="cover-heading"> <b>Pengangkutan Sampah Perumahan</b></h3>
                        <hr>
                        <div class="m-b-md">
                        <!-- <a href="{{ route('login') }}" class="btn btn-primary"><b>Login </b></a> -->
                        <p class="lead"><a class="btn btn-lg btn-primary" href="{{ route('login') }}">Sign In</a></p>
                    </div>
                    <div class="mastfoot">
                        <div class="inner">         
                            <p>© Mohammad Samsul Amin <a href="http://getbootstrap.com/">Bootstrap</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm text-left">
                <form action="{{url('regisdesa')}}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header" style="color:black;">
                            <h5 class="modal-title" id="staticBackdropLabel">Registrasi Warga</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="color:black;">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Desa</label>
                                <select class="form-control" id="desa" name="desa">
                                @foreach($datadesa as $ds)
                                <option value="{{$ds->id}}">{{$ds->desa}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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

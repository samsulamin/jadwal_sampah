<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('desa-home')}}">SAMPAHDESA</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    {{--<ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-android fa-fw"></i> Android</a></li>
    </ul>--}}

    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{url('desa-profile')}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off fa-fw"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="{{url('desa-home')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{url('desa-notifikasi')}}"><i class="fa fa-bell fa-fw"></i> Laporan Warga</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-database fa-fw"></i> Data<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('desa-petugas')}}">Data Petugas</a>
                        </li>
                        <li>
                            <a href="{{url('desa-pengajuan-warga')}}">Data Pengajuan Warga</a>
                        </li>
                        <li>
                            <a href="{{url('desa-warga')}}">Data Warga</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{url('desa-jadwal')}}"><i class="fa fa-calendar fa-fw"></i> Jadwal Pengangkutan</a>
                </li>
                <li>
                    <a href="{{url('desa-laporan')}}"><i class="fa fa-list-alt fa-fw"></i> Data Laporan</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-refresh fa-fw"></i> Recycle<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('desa-recycle-petugas')}}">Data Petugas</a>
                        </li>
                        <li>
                            <a href="{{url('desa-recycle-warga')}}">Data Warga</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{url('desa-profile')}}"><i class="fa fa-info-circle fa-fw"></i> Profile</a>
                </li>
                {{--<li>
                    <a href="#"><i class="fa fa-info-circle fa-fw"></i> Profile<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('desa-profile')}}">Profile</a>
                        </li>
                        <li>
                            <a href="{{url('desa-ganti-password')}}/{{Auth::user()->desa_id}}">Ganti Password</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>--}}
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off fa-fw"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
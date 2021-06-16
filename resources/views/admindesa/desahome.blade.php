@extends('template.templatedesa')
@section('main')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dashboard</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            @foreach($countpetugas as $cp)
                                            <div class="huge">{{$cp->jml_petugas}}</div>
                                            @endforeach
                                            <div>Data Petugas</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('data-petugas')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Lihat Data</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            @foreach($countwarga as $cw)
                                            <div class="huge">{{$cw->jml_warga}}</div>
                                            @endforeach
                                            <div>Data Warga</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('data-warga')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Lihat Data</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-list-alt fa-fw"></i> Laporan
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-html="true" title="print"><i class="fa fa-print fa-fw"></i></button>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Rt/Rw</th>
                                                <th>Tanggal Lapor</th>
                                                <th>Tanggal Angkut</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           {{-- <tr class="odd gradeX">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <span class="label label-success">Success</span>
                                                </td>
                                            </tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" >
                    <div class="panel panel-primary example-1 scrollbar-ripe-malinka">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Laporan Warga
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            @foreach($notif as $n)
                            <div class="list-group">
                                <a href="" class="list-group-item">
                                    <i class="fa fa-bell fa-fw"></i> | {{$n->desa_id}} | {{$n->warga_id}} 
                                    <span class="label label-warning pull-right">Tunggu</span>
                                </a>
                            </div>
                            @endforeach
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <a href="{{url('desa-notifikasi')}}" class="btn btn-primary btn-block">Lihat Semua</a>
                        </div>
                    </div>
                </div>
            </div>
          <!-- /.row -->
        </div>
      <!-- /.container-fluid -->
    </div>
@endsection
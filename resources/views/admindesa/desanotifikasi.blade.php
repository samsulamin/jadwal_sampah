@extends('template.templatedesa')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Laporan Warga</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    <i class="fa fa-check fa-fw"></i>{{session('message')}}
                </div>
            @endif
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Laporan Warga
                            {{--<div class="pull-right">
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-html="true" title="print"><i class="fa fa-print fa-fw"></i></button>
                            </div>--}}
                        </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Desa</th>
                                        <th>ID Warga</th>
                                        <th>Tanggal Lapor</th>
                                        <th>Ket.</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notif as $n)
                                        <tr class="text-center">
                                            <td>{{$n->desa_id}}</td>
                                            <td>{{$n->warga_id}}</td>
                                            <td>{{$n->created_at}}</td>
                                            <td>
                                                <span class="label label-warning">Tunggu</span>
                                            </td>
                                            <td>
                                                <form method="post" action="{{url('desa-angkut')}}/{{$n->id}}">
                                                    {{ csrf_field() }}
                                                    <button class="btn btn-success btn-xs rounded-pill"><i class='fas fa-people-carry'></i> Angkut </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-8 -->
              {{--<div class="col-lg-4">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-bell fa-fw"></i> Notifications Panel
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="list-group">
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-comment fa-fw"></i> New Comment
                                      <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                      <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-envelope fa-fw"></i> Message Sent
                                      <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-tasks fa-fw"></i> New Task
                                      <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                      <span class="pull-right text-muted small"><em>11:32 AM</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                      <span class="pull-right text-muted small"><em>11:13 AM</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                      <span class="pull-right text-muted small"><em>10:57 AM</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                      <span class="pull-right text-muted small"><em>9:49 AM</em>
                                      </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-money fa-fw"></i> Payment Received
                                      <span class="pull-right text-muted small"><em>Yesterday</em>
                                      </span>
                              </a>
                          </div>
                          <!-- /.list-group -->
                          <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel .chat-panel -->
              </div>--}}
              <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </div>
@endsection
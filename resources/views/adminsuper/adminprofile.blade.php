@extends('template.templateadmin')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Profile</h3>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="panel panel-yellow">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-home fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                @foreach($countdesa as $cd)
                                  <div class="huge">{{$cd->jml_desa}}</div>
                                @endforeach
                                  <div>Desa</div>
                              </div>
                          </div>
                      </div>
                      <a href="{{url('data-desa')}}">
                          <div class="panel-footer">
                              <span class="pull-left">Lihat Data</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
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
            <div class="panel panel-primary">
                <div class="panel-heading">Profil</div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h4>{{Auth::user()->name}}</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a commodo mauris, vitae vulputate mi. Nulla vel ligula felis. Suspendisse potenti. Mauris odio tellus, congue vel est quis, tincidunt pharetra augue. Pellentesque vehicula finibus mauris a sagittis.</p>
                </div>
                <!-- /.panel-body -->
            </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </div>
@endsection
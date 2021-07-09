@extends('template.templatedesa')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Data Warga</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Edit Data Warga
                          <div class="pull-right">
                                <div class="pull-right">
                                </div>
                            </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                        <form action="{{url('update-desawarga')}}" method="post">
                            <div class="modal-body">  
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label for="desa">Desa</label>
                                            <select class="form-control" id="desa" name="desa">
                                                <option disabled selected hidden> Pilih Desa</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="rt">RT</label>
                                                    <input type="text" class="form-control" id="rt" name="rt" placeholder="RT">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="rw">RW</label>
                                                    <input type="text" class="form-control" id="rw" name="rw" placeholder="RW">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lat">Lat</label>
                                                    <input type="text" class="form-control" id="lat" name="lat" placeholder="Latittude">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="long">Long</label>
                                                    <input type="text" class="form-control" id="long" name="long" placeholder="Longitude">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            </div>
                        </form>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </div>
@endsection
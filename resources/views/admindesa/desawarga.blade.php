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
                          <i class="fa fa-bar-chart-o fa-fw"></i> Data Warga
                          <div class="pull-right">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-html="true" title="print"><i class="fa fa-print fa-fw"></i></button>
                                    {{--<button type="button" class="btn btn-xs btn-success" data-toggle="modal"  data-target="#staticBackdrop" data-html="true" title="Tambah Warga"><i class="fa fa-plus fa-fw"></i></button>--}}
                                </div>
                            </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>ID Desa</th>
                                      <th>NIK</th>
                                      <th>Nama</th>
                                      <th>Email</th>
                                      <th>RT/RW</th>
                                      <th>Lat/Long</th>
                                      <!--<th>Pilihan</th>-->
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($warga as $w)
                                  <tr class="odd gradeX">
                                      <td>{{$w->id}}</td>
                                      <td>{{$w->desa_id}}</td>
                                      <td>{{$w->nik}}</td>
                                      <td>{{$w->namawarga}}</td>
                                      <td>{{$w->email}}</td>
                                      <td>{{$w->rt}}/{{$w->rw}}</td>
                                      <td>{{$w->latittude}},{{$w->longitude}}</td>
                                      <!--<td class="text-center">
                                        <a class="btn btn-danger btn-sm">Hapus</a>
                                      </td>-->
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
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

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Warga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('post-desawarga')}}" method="post">
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
                                    <label for="desa">Desa</label>
                                    <select class="form-control" id="desa" name="desa">
                                        <option disabled selected hidden> Pilih Desa</option>
                                        <option>1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-7">
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
                                            <label for="lon">Long</label>
                                            <input type="text" class="form-control" id="lon" name="lon" placeholder="Longitude">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-4 col-form-label">Lihat Alamat</label>
                                    <div class="col-sm-8" id="search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-1 small" placeholder="Cari Lokasi Alamat ..."
                                                aria-label="Search" aria-describedby="basic-addon2" name="addr" value="" id="addr" >
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" onclick="addr_search();">
                                                <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="results"></div>
                                    </div>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
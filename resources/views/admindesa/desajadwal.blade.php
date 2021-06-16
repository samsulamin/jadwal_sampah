@extends('template.templatedesa')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Jadwal</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
            @if (session('warning'))
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-check fa-fw"></i>{{session('warning')}}
                </div>
            @endif
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
                            <i class="fa fa-list-alt"></i> jadwal
                            <div class="pull-right">
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-html="true" title="print"><i class="fa fa-print fa-fw"></i></button>
                                <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#staticBackdrop">Buat Jadwal</button>
                            </div>
                        </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead class=" text-center">
                                  <tr>
                                      <th>ID Desa</th>
                                      <th>Minggu</th>
                                      <th>Senin</th>
                                      <th>Selasa</th>
                                      <th>Rabu</thh>
                                      <th>Kamis</th>
                                      <th>Jumat</th>
                                      <th>Sabtu</th>
                                      <th>Edit</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($jadwal as $j)
                                  <tr class="odd gradeX text-center">
                                      <td>{{$j->desa_id}}</td>
                                      <td>{{$j->sunday}}</td>
                                      <td>{{$j->monday}}</td>
                                      <td>{{$j->tuesday}}</td>
                                      <td>{{$j->wednesday}}</td>
                                      <td>{{$j->thrusday}}</td>
                                      <td>{{$j->friday}}</td>
                                      <td>{{$j->saturday}}</td>
                                      <td class="text-center">
                                            <a href="{{url('edit-jadwal')}}/{{$j->id}}" class="btn btn-warning btn-sm">Edit</a>
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
              <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </div>

  <!--modal data add-->
  
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Buat Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('post-desa-jadwal')}}" method="post">
                    <div class="modal-body">  
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nik">ID Desa</label>
                                    <input type="text" class="form-control" id="desa_id" name="desa_id" value="{{Auth::user()->desa_id}}" placeholder="ID Desa" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nama">Nama  Desa</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->name}}" placeholder="Nama" readonly>
                                </div>
                            </div>
                        </div>

                        <label for="nik">Buat Jadwal Pengangkutan</label>
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <td>Minggu</td>
                                    <td>Senin</td>
                                    <td>Selasa</td>
                                    <td>Rabu</td>
                                    <td>Kamis</td>
                                    <td>Jumat</td>
                                    <td>Sabtu</td>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="minggu" id="minggu" value="Sunday">
                                            <label class="form-check-label" for="minggu">Ya</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="senin" id="senin" value="Monday">
                                            <label class="form-check-label" for="senin">Ya</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="selasa" id="selasa" value="Tuesday">
                                            <label class="form-check-label" for="selasa">Ya</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rabu" id="rabu" value="Wednesday">
                                            <label class="form-check-label" for="rabu">Ya</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kamis" id="kamis" value="Thursday">
                                            <label class="form-check-label" for="kamis">Ya</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jumat" id="jumat" value="Friday">
                                            <label class="form-check-label" for="jumat">Ya</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sabtu" id="sabtu" value="Saturday">
                                            <label class="form-check-label" for="sabtu">Ya</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="minggu" id="minggu" value="">
                                            <label class="form-check-label" for="minggu">Tidak</label>
                                        </div>
                                    </td>
                                    <td>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="senin" id="senin" value="">
                                            <label class="form-check-label" for="senin">Tidak</label>
                                        </div>
                                    </td>
                                    <td>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="selasa" id="selasa" value="">
                                            <label class="form-check-label" for="selasa">Tidak</label>
                                        </div>
                                    </td>
                                    <td>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rabu" id="rabu" value="">
                                            <label class="form-check-label" for="rabu">Tidak</label>
                                        </div>
                                    </td>
                                    <td>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kamis" id="kamis" value="">
                                            <label class="form-check-label" for="kamis">Tidak</label>
                                        </div>
                                    </td>
                                    <td>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jumat" id="jumat" value="">
                                            <label class="form-check-label" for="jumat">Tidak</label>
                                        </div>
                                    </td>
                                    <td>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sabtu" id="sabtu" value="">
                                            <label class="form-check-label" for="sabtu">Tidak</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
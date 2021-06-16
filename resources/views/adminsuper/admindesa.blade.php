@extends('template.templateadmin')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Data Desa</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Data Desa
                            <div class="pull-right">
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-html="true" title="print"><i class="fa fa-print fa-fw"></i></button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Desa</th>
                                        <th>ID Kecamatan</th>
                                        <th>Nama Desa</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($desa as $desa)
                                    <tr class="odd gradeX">
                                        <td>{{$desa->id}}</td>
                                        <td>{{$desa->kecamatan_id}}</td>
                                        <td>{{$desa->desa}}</td>
                                        <td class="text-center">
                                            <a href="{{url('edit-desa')}}/{{$desa->id}}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{url('hapus-desa')}}/{{$desa->id}}" class="btn btn-danger btn-sm">Hapus</a>
                                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#staticBackdrop{{$desa->id}}">Buat Akun</button>
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

    @foreach($datadesa as $ds)
    <div class="modal fade" id="staticBackdrop{{$ds->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Akun Desa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('post-desa')}}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">  
                        <div class="form-group">
                            <label for="email"> ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{$ds->id}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email"> Desa</label>
                            <input type="text" class="form-control" id="desa" name="desa" value="{{$ds->desa}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Masukan Email Desa</label>
                            <input type="email" class="form-control" id="email"  name="email"  aria-describedby="emailHelp">
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
    @endforeach
@endsection
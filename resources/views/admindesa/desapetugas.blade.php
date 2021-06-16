@extends('template.templatedesa')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Data Petugas</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <!-- /.row -->
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    <i class="fa fa-check fa-fw"></i>{{session('message')}}
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
                            <i class="fa fa-bar-chart-o fa-fw"></i> Data Petugas
                            <div class="pull-right">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-html="true" title="print"><i class="fa fa-print fa-fw"></i></button>
                                    <button type="button" class="btn btn-xs btn-success" data-toggle="modal"  data-target="#staticBackdrop" data-html="true" title="Tambah Petugas"><i class="fa fa-plus fa-fw"></i></button>
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
                                      <th>Nama</th>
                                      <th>Email</th>
                                      <th>Pilihan</th>
                                  </tr>
                              </thead>
                              <tbody>   
                                    @foreach($petugas as $p)
                                    <tr class="odd gradeX">
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->desa_id}}</td>
                                        <td>{{$p->nama}}</td>
                                        <td>{{$p->email}}</td>
                                        <td class="text-center">
                                            <a href="{{url('edit-petugas')}}/{{$p->id}}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{url('hapus-petugas')}}/{{$p->id}}" class="btn btn-danger btn-sm">Hapus</a>
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

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('post.petugas')}}" method="post">
                    <div class="modal-body">  
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama"  name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <input type="hidden" class="form-control" id="desa_id"  name="desa_id" value="{{ Auth::user()->desa_id }}">
                        {{--<div class="form-group">
                            <label for="desa">Jenis Kelamin</label>
                            <select class="form-control" id="jk" name="jk">
                                <option disabled selected hidden> Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <select class="form-control" id="desa" name="desa">
                                <option disabled selected hidden> Pilih Desa</option>
                                <option value="{{ Auth::guard('admin')->user()->desaid }}">{{ Auth::guard('admin')->user()->name }}</option>
                            </select>
                        </div>--}}
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
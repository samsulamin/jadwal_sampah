@extends('template.templatedesa')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Data Petugas Restore</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
            @if (session('message'))
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-warning fa-fw"></i>{{session('message')}}
                </div>
            @endif
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                            <i class="fa fa-refresh fa-fw"></i> Data Petugas Restore
                        </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>ID Desa</th>
                                      <th>Nama Petugas</th>
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
                                        <a href="{{url('kembalikan-petugas')}}/{{$p->id}}" class="btn btn-info btn-sm">Restore</button>
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

@endsection
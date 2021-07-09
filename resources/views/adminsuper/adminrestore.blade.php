@extends('template.templateadmin')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Data Restore Desa</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Data Restore Desa
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Desa</th>
                                        <th>ID Kecamatan</th>
                                        <th>Nama Desa</th>
                                        <th>Restore</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($desa as $desa)
                                    <tr class="odd gradeX">
                                        <td>{{$desa->id}}</td>
                                        <td>{{$desa->kecamatan_id}}</td>
                                        <td>{{$desa->desa}}</td>
                                        <td class="text-center">
                                            <a href="{{url('kembalikan-desa')}}/{{$desa->id}}" class="btn btn-info btn-sm">Restore</a>
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
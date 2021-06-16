@extends('template.templatedesa')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Data Warga Restore</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                            <i class="fa fa-refresh fa-fw"></i> Data Warga Restore
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
                                      <th>Pilihan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    {{--
                                    <tr class="odd gradeX">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <a class="btn btn-danger btn-sm">Restore</a>
                                        </td>
                                    </tr>
                                    --}}
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
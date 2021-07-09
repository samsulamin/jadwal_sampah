@extends('template.templatedesa')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Laporan</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-list-alt"></i> Laporan
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
                                        <th>ID Warga</th>
                                        <th>Tanggal Lapor</th>
                                        <th>Tanggal Angkut</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($laporan as $l)
                                    <tr class="odd gradeX">
                                        <td>{{$l->desa_id}}</td>
                                        <td>{{$l->warga_id}}</td>
                                        <td>{{$l->created_at}}</td>
                                        <td>{{$l->updated_at}}</td>
                                        <td class="text-center">
                                            <span class="label label-success">Success</span>
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
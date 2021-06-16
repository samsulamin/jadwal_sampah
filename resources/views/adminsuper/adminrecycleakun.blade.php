@extends('template.templateadmin')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Restore Account Desa</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
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
                            <i class="fa fa-bar-chart-o fa-fw"></i> Restore Account Desa
                            <div class="pull-right">
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-html="true" title="print"><i class="fa fa-print fa-fw"></i></button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ID Desa</th>
                                        <th>Email</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($desa as $desa)
                                    <tr class="odd gradeX">
                                        <td>{{$desa->id}}</td>
                                        <td>{{$desa->desa_id}}</td>
                                        <td>{{$desa->email}}</td>
                                        <td class="text-center">
                                            <a href="{{url('kembalikan-desa-akun')}}/{{$desa->desa_id}}" class="btn btn-info btn-sm">Restore</a>
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
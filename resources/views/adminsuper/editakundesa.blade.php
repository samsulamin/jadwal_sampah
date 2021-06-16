@extends('template.templateadmin')
@section('main')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="page-header">Akun Desa</h3>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
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
                            <i class="fa fa-bar-chart-o fa-fw"></i> Edit Account Desa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="{{url('edit-desa-akun')}}/{{$desa->id}}" method="post"> 
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="desa">Desa</label>
                                <input type="text" class="form-control"value="{{$desa->desa}}" placeholder="Desa" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$desa->email}}" placeholder="Email" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="{{$desa->email}}" placeholder="Password">
                                </div>
                                <hr>
                                <div class="pull-right">
                                    <a href="{{url('data-desa-akun')}}" class="btn btn-danger btn-sm">Batal</a>
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
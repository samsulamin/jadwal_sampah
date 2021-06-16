@extends('template.templateadmin')
@section('main')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Ganti Password</h3>
                </div>
            </div>
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    <i class="fa fa-check fa-fw"></i>{{session('message')}}
                </div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-gear fa-fw"></i>Ganti Password</div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form action="{{url('ganti-password')}}/{{$user->desa_id}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="passwordlama">Password Lama</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password Lama">
                        </div>
                        <div class="form-group">
                            <label for="passwordbaru">Password Baru</label>
                            <input type="password" class="form-control" name="passwordbaru" id="passwordbaru" placeholder="Password Baru">
                        </div>
                        <div class="form-group">
                            <label for="konfirmasipassword">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="konfirmasipassword" id="konfirmasipassword" placeholder="Konfirmasi Password">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </div>
@endsection
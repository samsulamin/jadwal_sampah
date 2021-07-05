<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use App\Admin;
use App\User;
use App\Kecamatan;
use App\Kelurahan;
use DB;

class adminDataController extends Controller
{
    public function addDataDesa(Request $request){
        $this->validate($request,[
    		'email'     => 'required',
        ],
        [
            'email.required'     => 'Email Desa Harus Diisi',
        ]);

        $email = $request->email;
        $iddesa = $request->id;
        $ds = DB::table('users')->where('email', '=', $email)->count();
        $id = DB::table('users')->where('desa_id', '=', $iddesa)->count();
        //$desadftar = DB::table('users')->where('desa_id', '=', $iddesa)->where('status', '=', 1);
        if($ds > 0){
            return redirect('/data-desa')->with('warning', 'Anda tidak bisa menambahkan Account, Email Sudah Terdaftar');
        }else if($id > 0){
            return redirect('/data-desa')->with('warning', 'Desa Ini Sudah Terdaftar dan Sudah Memiliki Akun.');
        }else{
            $desa = Desa::where('id',$request->id)
            ->update([
                'desa'         => $request->desa,
                'kabupaten'    => 'Tegal',
                'email'        => $request->email,
                'password'     => bcrypt('qwertyuiop'),
                'status'       => 1
            ]);
            User::create([
                'desa_id'   => $request->id,
                'name'      => $request->desa,
                'email'     => $request->email,
                'password'  => bcrypt('qwertyuiop'),
                'role'      => 'desa',
                'status'    => 1,
                //'api_token' => Str::random(60)
            ]);
        
            return redirect('/data-desa')->with('message', 'Berhasil Menambah Akun');
        }
    }

    public function editDataDesa($id)
    {
        $kecamatan = Kecamatan::all();
        $desa = Desa::find($id);
        $ds = Desa::all();
        return view('adminsuper.editdesa', compact('kecamatan', 'desa', 'ds'));
    }
    
    public function updateDesa(Request $request){
        $this->validate($request,[
    		'kecamatan'=> 'required',
    		'desa'     => 'required',
        ],
        [
            'kecamatan.required'=> 'Anda Harus Memilih Kecamatan',
            'desa.required'     => 'Anda Harus Memilih Desa',
        ]);
        //$desa = new \App\Desa;
        $desa = Desa::where('id',$request->id)
            ->update([
            'kecamatan_id'=> $request->kecamatan,
    		'desa'        => $request->desa
        ]);
        $user = User::where('desa_id',$request->id)
            ->Update([
            'desa_id'   => $request->id,
    		'name'      => $request->desa,
            //'api_token' => Str::random(60)
        ]);
    	return redirect('/data-desa')->with('message', 'Berhasil diubah');
    }

    public function editakundesa($id)
    {
        $kecamatan = Kecamatan::all();
        $desa = Desa::find($id);
        $ds = Desa::all();
        return view('adminsuper.editakundesa', compact('kecamatan', 'desa', 'ds'));
    }
    
    public function updateakundesa(Request $request){
        $this->validate($request,[
    		'email'=> 'required',
    		'password'=> 'required|min:6|max:10',
        ],
        [
            'emal.required'    => 'Email Harus diisi',
            'password.required'=> 'Password Harus diisi',
            'password.min'     => 'Password minimal 6 ',
            'password.max'      => 'Password maximal 10',
        ]);
        //$desa = new \App\Desa;
        $desa = Desa::where('id',$request->id)
            ->update([
            'email'   => $request->email,
            'password'=> bcrypt($request->password),
        ]);
        $user = User::where('desa_id',$request->id)
            ->Update([
                'email'      => $request->email,
                'password'=> bcrypt($request->password),
            //'api_token' => Str::random(60)
        ]);
    	return redirect('data-desa-akun')->with('message', 'Berhasil diubah');
    }
    public function registrasiDesa(Request $request)
    {
        $this->validate($request,[
    		'email'     => 'required',
    		'password'  => 'required',
        ],
        [
            'email.required'     => 'Email Desa Harus Diisi',
            'password.required'  => 'Password Desa Harus Diisi',
            'password.min'       => 'Masukkan Password minimal 6 !',
            'password.max'       => 'Masukkan Password maximal 10 !',
        ]);

        $email = $request->email;
        $iddesa = $request->id;
        $ds = DB::table('users')->where('email', '=', $email)->count();
        $id = DB::table('users')->where('desa_id', '=', $iddesa)->count();
        //$desadftar = DB::table('users')->where('desa_id', '=', $iddesa)->where('status', '=', 1);
        
        if($ds > 0){
            return redirect('/')->with('warning', 'Anda tidak bisa menambahkan Account, Email Sudah Terdaftar');
        }else if($id > 0){
            return redirect('/')->with('warning', 'Desa Ini Sudah Terdaftar dan Sudah Memiliki Akun.');
        }else{
            $desa = Desa::where('id',$request->id)
            ->update([
                'desa'         => $request->desa,
                'kabupaten'    => 'Kabupaten Tegal',
                'email'        => $request->email,
                'password'     => $request->password,
                'status'       => 1
            ]);
            User::create([
                'desa_id'   => $request->id,
                'name'      => $request->desa,
                'email'     => $request->email,
                'password'  => $request->password,
                'role'      => 'desa',
                'status'    => 1,
                //'api_token' => Str::random(60)
            ]);
        
            return redirect('/')->with('message', 'Berhasil Menambah Akun');
        }
    }
}

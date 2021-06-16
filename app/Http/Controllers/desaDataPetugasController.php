<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Petugas;

class desaDataPetugasController extends Controller
{
    
    public function addDataPetugas(Request $request)
    {
        $this->validate($request,[
    		'desa_id'  => 'required',
    		'nama' => 'required',
    		'email'   => 'required',
        ],
        [
            'desa_id.required'=> 'Anda Harus Memilih Desa',
            'nama.required'  => 'Nama Petugas Harus Diisi',
            'email.required' => 'Email Harus Diisi',
        ]);

        $petugas=Petugas::create([
            'desa_id' => $request->desa_id,
            'nama'    => $request->nama,
            'email'   => $request->email,
            'password'=> bcrypt('qwertyuiop'),
            'status'  => 1
        ]);

        User::create([
            'desa_id'   => $petugas->desa_id,
    		'name'      => $request->nama,
    		'email'     => $request->email,
            'password'  => bcrypt('qwertyuiop'),
            'role'      => 'petugas',
            'status'    => 1,
            //'api_token' => Str::random(60)
        ]);
        return redirect('desa-petugas')->with('message', 'Berhasil Menambah Data Petugas');
    }
    
    public function editpetugas($id)
    {
        $petugas = Petugas::find($id);
        return view('admindesa.editpetugas', compact('petugas'));
    }
    
    public function updatepetugas(Request $request)
    {
        $this->validate($request,[
    		'nama'    => 'required',
    		'email'   => 'required',
    		'password'=> 'required|min:6|max:10',
        ],
        [
            'nama.required'     => 'Nama Petugas Harus Diisi',
            'email.required'    => 'Email Harus Diisi',
            'password.required' => 'Password Harus Diisi',
            'password.min'      => 'Password min 6',
            'password.max'      => 'Password max 10',
        ]);

        $desa = new \App\Petugas;
        $desa = Petugas::where('id',$request->id)
        ->update([
            'nama' => $request->nama,
            'email'   => $request->email,
            'status'  => 1
        ]);

        $user = User::where('desa_id',$request->id)
            ->Update([
    		'name'      => $request->nama,
    		'email'     => $request->email,
            'password'  => bcrypt($request->password),
            //'api_token' => Str::random(60)
        ]);
        
    	return redirect('desa-petugas')->with('message', 'Data Berhasil Diubah');
    }

}

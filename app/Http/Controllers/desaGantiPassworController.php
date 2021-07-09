<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;
use App\Petugas;
use App\Desa;
use App\User;
use Auth;
use DB;

class desaGantiPassworController extends Controller
{
    public function desagantipassword(Request $request)
    {   
        $this->validate($request,[
    		'paswordlama'  => 'required',
    		'passwordbaru' => 'required',
        ],
        [
            'passwordlama.required' => 'Password Lama Harus Diisi',
            'passwordbaru.required' => 'Password Baru Harus Diisi',
        ]);

        $desa = new \App\Desa;
        $passwordlama = Auth::user()->password;
        $passlama = $request->passwordlama;

        if ($passlama == $passwordlama) {
            return redirect('desa-ganti-password')->with('message', 'Password Lama Anda Tidak Cocok');
        }else{
            $user = User::where('desa_id',$request->id)
                ->Update([
                'name'      => $request->nama,
                'email'     => $request->email,
                'password'  => bcrypt($request->password),
                //'api_token' => Str::random(60)
            ]);
            $desa = Desa::where('id',$request->id)
            ->update([
                'nama' => $request->nama,
                'email'   => $request->email,
                'status'  => 1
            ]);
            return redirect('desa-home')->with('message', 'Password Berhasil');
        }
    }
}

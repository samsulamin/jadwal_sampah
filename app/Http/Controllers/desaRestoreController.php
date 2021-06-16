<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use App\User;
use App\Warga;
class desaRestoreController extends Controller
{
    public function hapuspetugas($id)
    {
        $petugas = Petugas::find($id);
        $hapus = Petugas::where('id',$id)
            ->Update([
            'status'  => 0
            //'api_token' => Str::random(60)
        ]);
        $petugas->delete();
        $user = User::where('desa_id',$id)
            ->Update([
            'status'  => 0
            //'api_token' => Str::random(60)
        ]);

        return redirect('desa-recycle-petugas')->with('message', 'Data Telah Dihapus');
    }
    
    public function index()
    {
        return view('admindesa.restorewarga');
    }

    public function indexpetugas()
    {
        $petugas = Petugas::onlyTrashed()->get();
        return view('admindesa.restorepetugas', ['petugas' => $petugas]);
    }

    public function kembalikanpetugas($id)
    {
        $petugas = Petugas::onlyTrashed()->where('id',$id);
        $petugas->restore();
        $hapus = Petugas::where('id',$id)
            ->Update([
                'status'  => 1
            //'api_token' => Str::random(60)
            ]);
        $user = User::where('desa_id',$id)
            ->Update([
                'status'  => 1
            //'api_token' => Str::random(60)
            ]);
        return redirect('desa-petugas')->with('message', 'Data Berhasil Dikembalikan');
    }


    public function hapuspengajuan($id)
    {
        $petugas = Warga::find($id);
        $petugas->delete();

        return redirect('desa-pengajuan-warga')->with('message', 'Data Telah Dihapus');
    }
        
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Desa;

class adminRestoreController extends Controller
{
    public function indexrestoredesa()
    {
        $desa = Desa::onlyTrashed()->get();
        return view('adminsuper.adminrestore', compact('desa'));
    }

    public function hapusdesa($id)
    {
        $desa = Desa::find($id);
        $desa->delete();
        $user = User::where('desa_id',$id)
            ->Update([
                'status' => 0,
            //'api_token' => Str::random(60)
        ]);

        return redirect('data-desa')->with('message', 'Data Telah Dihapus');
    }

    public function kembalikandesa($id)
    {
        $desa = Desa::onlyTrashed()->where('id',$id);
        $desa->restore();
        $user = User::where('desa_id',$id)
            ->Update([
                'status' => 1,
            //'api_token' => Str::random(60)
        ]);
        return redirect('data-desa')->with('message', 'Data Desa Berhasil Dikembalikan');
    }


    public function indexrestoreakun()
    {
        $desa = User::where('status', 0)->where('role', 'desa')->get();
        return view('adminsuper.adminrecycleakun', compact('desa'));
    }

    public function hapusakundesa($id)
    {
        $desa = Desa::find($id);
        //$desa->delete();
        $user = User::where('desa_id',$id)
            ->Update([
                'status' => 0,
            //'api_token' => Str::random(60)
        ]);

        return redirect('admin-recycle-akun')->with('message', 'Data Telah Dihapus');
    }

    public function kembalikanakun($id)
    {
        $user = User::where('desa_id',$id)
            ->Update([
                'status' => 1,
            //'api_token' => Str::random(60)
        ]);
        return redirect('data-desa-akun')->with('message', 'Data Desa Berhasil Dikembalikan');
    }
}

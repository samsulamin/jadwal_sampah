<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifikasi;

class notifikasiController extends Controller
{
    public function notifikasi()
    {
        $notif = Notifikasi::where('status', 1)->get();
        return view('admindesa.desanotifikasi', compact('notif'));
    }

    public function angkut(Request $request){
        Notifikasi::where('id',$request->id)
            ->update([
            'status'=> 0
        ]);
    	return redirect('desa-notifikasi')->with('message', 'Berhasil Diangkut');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use DB;

class desaJadwalController extends Controller
{
    public function postjadwal(Request $request)
    {
        $id = $request->desa_id;
        //$ds = DB::select("SELECT email FROM users where email='$email'");
        $ds = DB::table('jadwal')->where('desa_id', '=', $id)->count();
        if($ds > 0){
            return redirect('desa-jadwal')->with('warning', 'Anda tidak bisa membuat jadwa, Anda hanya bisa mengedit!');
        }else{
            $desa = new \App\Jadwal;
            $desa = Jadwal::create([
                'desa_id'  => $request->desa_id,
                'sunday'   => $request->minggu,
                'monday'   => $request->senin,
                'tuesday'  => $request->selasa, 
                'wednesday'=> $request->rabu, 
                'thrusday' => $request->kamis, 
                'friday'   => $request->jumat, 
                'saturday' => $request->sabtu
            ]);
            return redirect('desa-jadwal')->with('message', 'Berhasil Membuat Jadwal Pengangkutan');
        }
    }

    public function editjadwal($id)
    {
        $jadwal = Jadwal::find($id);
        return view('admindesa.desajadwaledit',compact('jadwal'));
    }

    public function editdesajadwal(Request $request)
    {
        $desa = new \App\Jadwal;
        $desa = Jadwal::where('id',$request->id)->Update(
            [
                'desa_id'  => $request->desa_id,
                'sunday'   => $request->minggu,
                'monday'   => $request->senin,
                'tuesday'  => $request->selasa, 
                'wednesday'=> $request->rabu, 
                'thrusday' => $request->kamis, 
                'friday'   => $request->jumat, 
                'saturday' => $request->sabtu
            ]
        );
        return redirect('desa-jadwal')->with('message', 'Berhasil Edit Jadwal Pengangkutan');
    }
}

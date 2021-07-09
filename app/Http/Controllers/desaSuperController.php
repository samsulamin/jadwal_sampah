<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use App\Warga;
use App\Jadwal;
use App\Notifikasi;
use App\User;
use Auth;
use DB;
class desaSuperController extends Controller
{
    //

    public function index(){
        $countwarga = DB::select("SELECT COUNT(namawarga) as jml_warga from warga where status = 1");
        $countpetugas = DB::select("SELECT COUNT(nama) as jml_petugas from petugas where status = 1");
        $notif = Notifikasi::where('status', 1)->get();
        return view('admindesa.desahome', compact('countwarga', 'countpetugas', 'notif'));
    }
    public function desapetugas()
    {
        $petugas = Petugas::all();
        return view('admindesa.desapetugas', compact('petugas'));
    }
    public function desapengajuanwarga()
    {
        $warga = Warga::where('status', 0)->get();
        return view('admindesa.desapengajuanwarga', compact('warga'));
    }

    public function desawarga()
    {
        $id = Auth::user()->desa_id;
        $warga = Warga::where('status', 1)->where('desa_id', $id)->get();
        return view('admindesa.desawarga', compact('warga'));
    }

    public function desajadwal()
    {
        $id = Auth::user()->desa_id;
        $jadwal = Jadwal::where('desa_id', $id)->get();
        return view('admindesa.desajadwal',compact('jadwal'));
    }
    public function desalaporan()
    {
        $laporan = Notifikasi::where('status', 0)->get();
        return view('admindesa.desalaporan', compact('laporan'));
    }
    public function desaprofile()
    {
        $id = Auth::user()->desa_id;
        $countwarga = DB::select("SELECT COUNT(namawarga) as jml_warga from warga where status='1' and desa_id = $id");
        $countpetugas = DB::select("SELECT COUNT(nama) as jml_petugas from petugas where status='1'");
        return view('admindesa.desaprofile', compact('countwarga', 'countpetugas'));
    }

    public function gantipassword($id)
    {
        $user = User::find($id);
        return view('admindesa.desagantipassword', compact('user'));
    }
}

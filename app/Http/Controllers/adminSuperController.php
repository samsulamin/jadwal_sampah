<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use App\Petugas;
use App\Warga;
use App\User;
use DB;
use Auth;

class adminSuperController extends Controller
{
    //
    public function index()
    {
        $countdesa = DB::select("SELECT COUNT(desa) as jml_desa from desa");
        $countwarga = DB::select("SELECT COUNT(namawarga) as jml_warga from warga where status = 1");
        $countpetugas = DB::select("SELECT COUNT(nama) as jml_petugas from petugas where status = 1");
        return view('adminsuper.home', compact('countdesa','countwarga', 'countpetugas'));
    }
    public function datadesa()
    {
        $desa = Desa::all();
        $datadesa = Desa::all();
        return view('adminsuper.admindesa', compact('desa','datadesa'));
    }
    public function akundesa()
    {
        $desa = User::where('role', 'desa')->where('status', 1)->get();
        return view('adminsuper.admindesaakun', compact('desa'));
    }
    public function datapetugas()
    {
        $petugas = Petugas::where('status', 1)->orderBy('desa_id')->get();
        return view('adminsuper.adminpetugas', compact('petugas'));
    }
    public function datawarga()
    {
        $warga = Warga::where('status', 1)->get();
        return view('adminsuper.adminwarga', compact('warga'));
    }
    public function laporan()
    {
        return view('adminsuper.adminlaporan');
    }

    public function profile()
    {
        $countdesa = DB::select("SELECT COUNT(desa) as jml_desa from desa");
        $countwarga = DB::select("SELECT COUNT(namawarga) as jml_warga from warga where status = 1");
        $countpetugas = DB::select("SELECT COUNT(nama) as jml_petugas from petugas where status = 1");
        return view('adminsuper.adminprofile', compact('countdesa','countwarga', 'countpetugas'));
    }

}

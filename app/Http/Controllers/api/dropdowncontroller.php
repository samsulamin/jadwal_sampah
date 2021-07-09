<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kecamatan;
use App\Desa;

class dropdowncontroller extends Controller
{
    public function datakecamatan(Request $request){
        $kecamatan = Kecamatan::get();
        return $kecamatan;
        // return response([
        //     'success' => true,
        //     'message' => 'List Semua Posts',
        //     'data' => $kecamatan
        // ], 200);
    }
    public function datadesa(Request $request){
        $desa = Desa::where('status',1)->get();
        // return response([
        //     // 'success' => true,
        //     // 'message' => 'List Semua Desa',
        //     'data' => $desa
        // ], 200);
        return $desa;
    }
}

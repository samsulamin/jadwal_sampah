<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Warga;
use App\Notifikasi;
use DB;

class wargaController extends Controller
{

    public function cekEmail(Request $request)
    {
        $warga = DB::select("SELECT email FROM warga");
       // $warga = $wargas->get();
        return $warga->email;
    }
    // public function cekEmail(Request $request)
    // {
    //     $warga = Warga::all();
    //     $data = json_decode($warga);
    //     return $data;
    // }


    public function cekNik(Request $request)
    {
        $warga = DB::select("SELECT nik FROM warga");
       // $warga = $wargas->get();
        return $warga->nik;
    }

    public function index(){
        $available = $this->cekEmail($email->email);
        $availablenik = $this->cekNik($email->nik);
        return $available && $availablenik;
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'nik'       => 'required|min:16|max:16',
            'namawarga' => 'required',
            // 'rt'        => 'required|numeric',
            // 'rw'        => 'required|numeric',
            'email'     => 'required',
            'password'  => 'required|min:6|max:10',
        ],
            [
                'nik.required'       => 'Masukkan NIK !',
                'nik.min'            => 'Masukkan NIK minima 16 !',
                'nik.max'            => 'Masukkan NIK maximal 16 !',
                'namawarga.required' => 'Masukkan Nama Warga !',
                'rt.required'        => 'Masukkan RT !',
               //'rt.numeric'         => 'RT Hanya Angka !',
                //'rw.required'        => 'Masukkan RW !',
                'rw.numeric'         => 'RW Hanya Angka !',
                'email.required'     => 'Masukkan Email !',
                'password.required'  => 'Masukkan Email !',
                'password.min'       => 'Masukkan Password minimal 6 !',
                'password.max'       => 'Masukkan Password maximal 10 !',
            ]
        );

        $email  = $request->email;
        $nik    = $request->nik;
        //$ds = DB::select("SELECT email FROM users where email='$email'");
        $ds = DB::table('warga')->where('email', '=', $email)->count();
        $dsnik = DB::table('warga')->where('nik', '=', $nik)->count();

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],401);
        } else {
            if($ds > 0){
                return response()->json([
                    'success' => false,
                    'message' => 'Email Sudah Terdaftar!,Gunakan Email Terverifikasi',
                ], 111);
            }elseif($dsnik > 0){
                return response()->json([
                    'success' => false,
                    'message' => 'NIK Sudah Terdaftar!, Gunakan NIK ANDA.!',
                ], 112);
            }else{
                $warga = Warga::create([
                    'desa_id'   => $request->input('desa_id'),
                    'nik'       => $request->input('nik'),
                    'namawarga' => $request->input('namawarga'),
                    'rt'        => $request->input('rt'),
                    'rw'        => $request->input('rw'),
                    'latittude' => $request->input('latittude'),
                    'longitude' => $request->input('longitude'),
                    'email'     => $request->input('email'),
                    'password'  => $request->input('password'),
                    'status'    => 0
                ]);
                if ($warga) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Data Warga Berhasil Disimpan!',
                        'data'    => $warga
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Data Warga Gagal Disimpan!',
                    ], 401);
                }

            }
        }
    }

    public function wargaGet(Request $request){
        $id = $request->id;
        $data = Warga::where('id', '=', $id)->get();
        return $data;
        // return response([
        //     'success' => true,
        //     'message' => 'List Data ID Desa',
        //     'data' => $data
        // ], 200);
    }

    public function histori(Request $request){
        
        if($request->user()->email){
            $data = Notifikasi::where('email', $request->user()->email)->orderBy('id', 'DESC')->get();
            return $data;
            // return response([
            //     'success' => true,
            //     'message' => 'List Data ID Desa',
            //     'data' => $data
            // ], 200);
        }else{
            return response([
                'data' => 'NotFound'
            ], 401);
        }
    }

    public function warga(Request $request){
        
        if($request->user()->email){
            $data = Warga::where('email', $request->user()->email)->get();
            return $data;
            // return response([
            //     'success' => true,
            //     'message' => 'List Data ID Desa',
            //     'data' => $data
            // ], 200);
        }else{
            return response([
                'data' => 'NotFound'
            ], 401);
        }
    }
}

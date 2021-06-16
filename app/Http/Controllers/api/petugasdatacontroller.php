<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Warga;
use App\User;
use Illuminate\Support\Facades\Validator;

class petugasdatacontroller extends Controller
{
    public function datapengajuan(Request $request){
        
        if($request->user()->desa_id){
            $data = Warga::where('status', 0)
                ->where('desa_id', $request->user()->desa_id)->get();
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

    public function updatePengajuan(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'nik'   => 'required',
            'namawarga'   => 'required',
        ],
            [
                'nik.required' => 'Masukkan nik Post !',
                'namawarga.required' => 'Masukkan namawarga Post !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],401);

        } else {

            $post = Warga::whereId($request->input('id'))->update([
                'desa_id'     => $request->input('desa_id'),
                'nik'         => $request->input('nik'),
                'namawarga'   => $request->input('namawarga'),
                'email'       => $request->input('email'),
                //'latittude'   => $request->input('latittude'),
                //'longitude'   => $request->input('longitude'),
                'status'    => 1,
            ]);

            User::create([
                'desa_id'   => $request->input('desa_id'),
                'name'      => $request->input('namawarga'),
                'email'     => $request->input('email'),
                'password'  => bcrypt('qwertyuiop'),
                'role'      => 'warga',
                'status'    => 1,
                //'api_token' => Str::random(60)
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Diupdate!',
                ], 401);
            }

        }

    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon as time;
use DB;


class notifikasiController extends Controller
{
    
    public function notifikasi(Request $request)
    {
       
    }

    public function createlaporan(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'desa_id'   => 'required',
            //'latitude'   => 'required',
            //'longitude'   => 'required',
        ],
            [
                'email.required' => 'Masukkan Email Anda !',
                'desa_id.required'  => 'Masukkan ID Desa Anda !',
                //'latitude.required' => 'Masukkan Latitude !',
                //'longitude.required'=> 'Masukkan Longitude !',
            ]
        );

        $desa_id = $request->desa_id;
        $mytime=time::now();
        $date=$mytime->toRfc850String();
        $today= substr($date, 0, strrpos($date, ","));
        $sunday     = DB::table('jadwal')->where('sunday', '=', $today)->where('desa_id', '=', "$desa_id")->count();
        $monday     = DB::table('jadwal')->where('monday', '=', $today)->where('desa_id', '=', $desa_id)->count();
        $tuesday    = DB::table('jadwal')->where('tuesday', '=', $today)->where('desa_id', '=', $desa_id)->count();
        $wednesday  = DB::table('jadwal')->where('wednesday', '=', $today)->where('desa_id', '=', $desa_id)->count();
        $thrusday   = DB::table('jadwal')->where('thrusday', '=', $today)->where('desa_id', '=', $desa_id)->count();
        $friday     = DB::table('jadwal')->where('friday', '=', $today)->where('desa_id', '=', $desa_id)->count();
        $saturday   = DB::table('jadwal')->where('saturday', '=', $today)->where('desa_id', '=', $desa_id)->count();

        $email = $request->email;
        //$ds = DB::select("SELECT email FROM users where email='$email'");
        $ds = DB::table('notifikasi')->where('email', '=', $email)->where('status', '1')->count();
        // if($ds > 0){
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Anda Sudah Melapor, Tunggu hingga Laporan diproses!',
        //         'hari' => $today
        //     ], 402);
        // }else{
            if ($sunday ) {
                if($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);

                }else {
                    $notif = Notifikasi::create([
                        'email'   => $request->input('email'),
                        'desa_id'  => $request->input('desa_id'),
                        //'latitude'  => $request->input('latitude'),
                        //'longitude' => $request->input('longitude'),
                        'status'    => '1'
                    ]);
                    if ($notif) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Post Berhasil Disimpan!',
                            'data'    => $notif,
                            'hari'    => $today
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Post Gagal Disimpan!',
                        ], 401);
                    }
                }
            }  else if ($monday ) {
                if($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);

                }else {
                    $notif = Notifikasi::create([
                        'email'   => $request->input('email'),
                        'desa_id'  => $request->input('desa_id'),
                        //'latitude'  => $request->input('latitude'),
                        //'longitude' => $request->input('longitude'),
                        'status'    => '1'
                    ]);
                    if ($notif) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Post Berhasil Disimpan!',
                            'data'    => $notif,
                            'hari'    => $today
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Post Gagal Disimpan!',
                        ], 401);
                    }
                }
            } else if ($tuesday) {
                if($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);

                }else {
                    $notif = Notifikasi::create([
                        'email'   => $request->input('email'),
                        'desa_id'  => $request->input('desa_id'),
                        //'latitude'  => $request->input('latitude'),
                        //'longitude' => $request->input('longitude'),
                        'status'    => '1'
                    ]);
                    if ($notif) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Post Berhasil Disimpan!',
                            'data'    => $notif,
                            'hari'    => $today
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Post Gagal Disimpan!',
                        ], 401);
                    }
                }
            } else if ($wednesday ) {
                if($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);

                }else {
                    $notif = Notifikasi::create([
                        'email'   => $request->input('email'),
                        'desa_id'  => $request->input('desa_id'),
                        //'latitude'  => $request->input('latitude'),
                        //'longitude' => $request->input('longitude'),
                        'status'    => '1'
                    ]);
                    if ($notif) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Post Berhasil Disimpan!',
                            'data'    => $notif,
                            'hari'    => $today
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Post Gagal Disimpan!',
                        ], 401);
                    }
                }
            } else if ($thrusday ) {
                if($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);

                }else {
                    $notif = Notifikasi::create([
                        'email'   => $request->input('email'),
                        'desa_id'  => $request->input('desa_id'),
                        //'latitude'  => $request->input('latitude'),
                        //'longitude' => $request->input('longitude'),
                        'status'    => '1'
                    ]);
                    if ($notif) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Post Berhasil Disimpan!',
                            'data'    => $notif,
                            'hari'    => $today
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Post Gagal Disimpan!',
                        ], 401);
                    }
                }
            } else if ($friday ) {
                if($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);

                }else {
                    $notif = Notifikasi::create([
                        'email'   => $request->input('email'),
                        'desa_id'  => $request->input('desa_id'),
                        //'latitude'  => $request->input('latitude'),
                        //'longitude' => $request->input('longitude'),
                        'status'    => '1'
                    ]);
                    if ($notif) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Post Berhasil Disimpan!',
                            'data'    => $notif,
                            'hari'    => $today
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Post Gagal Disimpan!',
                        ], 401);
                    }
                }
            } else if ($saturday ) {
                if($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);

                }else {
                    $notif = Notifikasi::create([
                        'email'   => $request->input('email'),
                        'desa_id'  => $request->input('desa_id'),
                        //'latitude'  => $request->input('latitude'),
                        //'longitude' => $request->input('longitude'),
                        'status'    => '1'
                    ]);
                    if ($notif) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Post Berhasil Disimpan!',
                            'data'    => $notif,
                            'hari'    => $today
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Post Gagal Disimpan!',
                        ], 401);
                    }
                }
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Jadwal Laporan Anda Bukan Hari ini.!',
                    'cek'=>$mytime,
                    'ini'=> $date
                ], 401);
            }
        }
    }


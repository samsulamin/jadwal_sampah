<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\ResponseHandler;
use App\User;
use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

class logincontroller extends Controller
{
    private $user;
    private $respHandler;
    public function __construct()
    {
        $this->user = new User();
        $this->respHandler = new ResponseHandler();
    }

    public function login(Request $request)
    {
        if(\Auth::attempt([
            'email'     => $request->email, 
            'password'  => $request->password
        ])){
            $user = \Auth::user();
            $token = $user->createToken('user')->accessToken;
            $data['token']  = $token;
            $data['user']   = $user;
            $data['value'] = 1;
            return response()->json([
                'success'   => true,
                'data'      => $data,
                'pesan'     => 'Login Sukses'
            ],200);
        }else{
            $data['success'] = false;
            $data['pesan'] = 'cek email dan password';
            return response()->json([
                'success'   => false,
                'data'      => $data,
                'pesan'     => 'Login Gagal,coba lagi'
            ],401);
        }
    }

    public function loginwarga(Request $request)
    {
        if(\Auth::attempt([
            'email'     => $request->email, 
            'password'  => $request->password
        ])){
            $user = \Auth::user();
            $token = $user->createToken('user')->accessToken;
            $data['token']  = $token;
            $data['user']   = $user;
            $data['value'] = 1;
            return response()->json([
                'success'   => true,
                'data'      => $data,
                'pesan'     => 'Login Sukses'
            ],200);
        }else{
            $data['success'] = false;
            $data['pesan'] = 'cek email dan password';
            return response()->json([
                'success'   => false,
                'data'      => $data,
                'pesan'     => 'Login Gagal, coba lagi'
            ],401);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\ApiUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return ResponseFormatter::success($user,'Data User Berhasil Diambil');
    }

    public function show($id)
    {
        $user = User::find($id);
        if($user){
            $user->first();
            return ResponseFormatter::success($user,'Data User Ditemukan');
        }else{
            return ResponseFormatter::error(null,'Data User Tidak Ditemukan',404);
        }
    }

    public function store(ApiUserRequest $request)
    {
        if($request->email != ''){
            $user = User::create([
                'name' => $request->name,
                'email'=> $request->email,
                'password' => Hash::make($request->password)
            ]);

            return ResponseFormatter::success($user,'Data User Berhasil Dibuat');
        }else{
            return ResponseFormatter::error(null,'Cek Kembali Data Anda',404);
        }
    }

    public function update(ApiUserRequest $request)
    {
        $user = User::find($request->id);
        if($user){
            $user->update([
                'name' => $request->name,
                'email'=> $request->email,
                'password' => Hash::make($request->password)
            ]);
            return ResponseFormatter::success($user,'Data User Berhasil Diubah');
        }else{
            return ResponseFormatter::error(null,'Data User Tidak Ditemukan',404);
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
            return ResponseFormatter::success($user,'Data User Berhasil Dihapus');
        }else{
            return ResponseFormatter::error(null,'Data User Tidak Ditemukan',404);
        }
    }
}

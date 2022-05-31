<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    

    public function profile_overview()
    {
        $id = session()->get('id');
        $users = User::where('id',$id)->first();
        return view('admin.users.profile-overview', compact('users'));
    }

    public function profile_setting()
    {
        $id = session()->get('id');
        $users = User::where('id',$id)->first();
        return view('admin.users.profile-setting', compact('users'));
    }

    public function change_pass()
    {
        return view('admin.users.change-pass');
    }

    public function update_profile(request $request)
    {
        $id = session()->get('id');
        $update = User::where('id',$id)->update([
            'name'  => $request->name, 
            'telp' => $request->telp,
            'alamat' => $request->alamat
        ]);
        if($update){
            $response = array(
                'status' => 'success', 'errors' => 'update profile', 'msg' => 'Update profile anda berhasil !', 'item' => ''
            );
        }else{
            $response = array(
                'status' => 'error', 'errors' => 'update profile', 'msg' => 'Update profile anda gagal !', 'item' => ''
            );
        }
        return response()->json($response);
        
    }

    public function kategori()
    {
        return view('admin.kategori');
    }
}

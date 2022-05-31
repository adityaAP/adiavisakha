<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Session;
use Hash;


class MainloginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'login_action', 'check_login', 'coba', 'refreshCaptcha']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::check()==true) {
            return redirect()->route('home.dashboard');
        } else {
            return view('auth.mainlogin');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function login_action(Request $request)
    {
        $response = array(
            'status' => 'failed', 'errors' => 'login', 'msg' => 'Failed to login. check your identity first', 'item' => ''
        );
        /** VALIDATION */
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100',
            'password' => 'required|max:100'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'errors'=>$validator->errors()->all(), 'msg' => 'Gagal Login. Cek kembali data anda', 'item' => '']);
        } else {
            // LOGIN ATTEMP
            $credentials = ['email' => $request->email, 'password' => $request->password];
            if(Auth::attempt($credentials)){
                $users = User::where('id', auth()->user()->id)->first();
                Session::put('email',$users->email);
                Session::put('name',$users->name);
                Session::put('role',$users->role);
                Session::put('id',$users->id);
                Session::put('token',$users->token);
                Session::put('alamat',$users->alamat);
                $response = array(
                    'status' => 'success', 'errors' => '', 'msg' => 'Login berhasil, Silahkan tunggu...', 'item' => ''
                );
            } else {
                $response = array(
                    'status' => 'failed', 'errors' => 'login', 'msg' => 'Gagal Login. Cek kembali data anda', 'item' => ''
                );
            }
        } /** END OF VALIDATION */
        return response()->json($response);
    }

    public function check_login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $data = DB::select("SELECT * FROM users WHERE username = '$username'");
        if (!isset($data[0])) {
            $arr = ['response' => 0];
        } else if (Hash::check($password, $data[0]->password)) {
            $arr = ['response' => (int)$data[0]->id];
        } else {
            $arr = ['response' => 0];
        }
        return response()->json($arr);
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('mini')]);
    }
}

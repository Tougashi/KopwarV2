<?php

namespace App\Http\Controllers;
use App\Models\Logs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
        
    }
    
  //    Authentication

  public function authenticate(Request $request)
  {

      $request->flashOnly(['username']);
      $user = User::where('username', $request->username)->where('password', base64_encode($request->password))->first();

    //   // dd('berhasil login');
    //   $credentials = $request->validate([
    //       'username' => ['required', 'username'],
    //       'password' => ['required'] 
    //   ]); s

      if ($user) {

         Auth::login($user);
          $request->session()->regenerate();
          return redirect()->intended('/beranda');
          }else {
          return back()->withErrors([ 
              'username' => 'Masukkan Username atau Password dengan benar !',
          ]);
      }
  }



  public function logout(Request $request)
  {
      Auth::logout();
      request()->session()->invalidate();
      request()->session()->regenerateToken();
      return redirect('/');
  }
 
 }



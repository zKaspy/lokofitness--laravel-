<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function register(Request $req) {
         $validator = Validator::make($req->all(), [
            'name' => 'required','string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255',
            'password' => 'required', 'string', 'min:6', 'confirmed',
          ]);
   
          if (DB::table('users')->where('email', $req->input('email'))->first()) {
            return redirect()->route('auth')->with('error-email', '');
          }

         /* if ($validator->passes()) {
            return redirect()->route('auth')->with('error-email', '');
          } */

          if ($validator->fails()) {
              return redirect()->route('auth')->with('error-data', '');
          }

          $user = User::create([
           'name' => $req->input('name'),
           'email' => $req->input('email'),
           'password' => bcrypt($req->input('password'))
          ]);
   
          Auth::login($user);

          return redirect()
                 ->route('index');
    }
    public function login(Request $req) {
        $validator = Validator::make($req->all(), [
          'email' => 'required', 'string', 'email', 'max:255',
          'password' => 'required', 'string', 'min:6', 'confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('auth')->with('error-empty', '');
        }

        if (!Auth::attempt($req->only(['email','password']))) {
            return redirect()->route('auth')->with('error-auth', '');
        }

        return redirect()
                ->route('index');
     }
}

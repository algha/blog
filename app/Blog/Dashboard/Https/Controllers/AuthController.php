<?php
namespace App\Blog\Dashboard\Https\Controllers;

use Auth;
use Hash;
use Session;
use App\Blog\Base\Models\User;
use Illuminate\Http\Request;
use App\Blog\Base\Https\Controllers\Controller;

class AuthController extends Controller
{

    public function Login(Request $request){
      return view("admin::login");
    }

    public function LoginPost(Request $request){
      $email = $request->get('email');
      $password = $request->get('password');

      $user = User::where('email', $email)->first();

      if (!$user) {
        Session::flash('message', 'user is not exists.');
        return redirect()->back();
      }

      if (!Hash::check($password, $user->password)) {
        Session::flash('message', 'email and password is not match.');
        return redirect()->back();
      }

      Auth::login($user, $request->has('stay-login'));

      return redirect()->route("dashboard.home");
    }



}

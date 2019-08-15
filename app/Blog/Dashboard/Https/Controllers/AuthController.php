<?php
namespace App\Blog\Dashboard\Https\Controllers;

use Auth;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Blog\Base\Https\Controllers\Controller;

class AuthController extends Controller
{

    public function Login(Request $request){

      $email = $request->get('email');
      $password = $request->get('password');

      $user = User::where('email', $email)->first();

      if (!$user) {
        return $this->sendError('メールアドレスを見つかれませんでした。');
      }

      if (!Hash::check($password, $user->password)) {
        return $this->sendError('メールアドレスかパスワードが間違っています。');
      }

      $user->hotel = Hotel::find(77);

      return $this->sendJson($user, 'ログインできました。');
    }

}

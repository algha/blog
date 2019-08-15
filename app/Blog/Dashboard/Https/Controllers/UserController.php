<?php
namespace App\Blog\Dashboard\Https\Controllers;

use Illuminate\Http\Request;
use App\Blog\Base\Models\User;
use App\Blog\Base\Https\Controllers\Controller;

class UserController extends Controller
{

    public function List(Request $request, Int $id = null){
      $users = User::paginate();
      return $users;
    }

    public function Edit(Request $request){

      return "edit";
    }

    public function Delete(Request $request){

      return "delete";
    }

}

<?php
namespace App\Blog\Dashboard\Https\Controllers;

use Illuminate\Http\Request;
use App\Blog\Base\Models\Post;
use App\Blog\Base\Https\Controllers\Controller;

class PostsController extends Controller
{

    public function List(Request $request, Int $id = null){
      $posts = Post::paginate();
      return $posts;
    }

    public function Edit(Request $request){

      return "edit";
    }

    public function Delete(Request $request){

      return "delete";
    }

}

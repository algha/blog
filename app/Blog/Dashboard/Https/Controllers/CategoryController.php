<?php
namespace App\Blog\Dashboard\Https\Controllers;

use Illuminate\Http\Request;
use App\Blog\Base\Models\Category;
use App\Blog\Base\Https\Controllers\Controller;

class CategoryController extends Controller
{

    public function List(Request $request, Int $id = null){
      $categories = Category::paginate();
      return $categories;
    }

    public function Edit(Request $request){

      return "edit";
    }

    public function Delete(Request $request){

      return "delete";
    }

}

<?php
namespace App\Blog\Dashboard\Https\Controllers;

use Illuminate\Http\Request;
use App\Blog\Base\Https\Controllers\Controller;

class DashboardController extends Controller
{

    public function Home(Request $request){

      return "home";
    }

}

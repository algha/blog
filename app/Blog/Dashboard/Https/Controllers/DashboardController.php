<?php
namespace App\Blog\Dashboard\Https\Controllers;

use File;
use Illuminate\Http\Request;
use App\Blog\Base\Https\Controllers\Controller;

class DashboardController extends Controller
{

    public function Home(Request $request){
      return view('admin::app', [
        'ssr' => $this->render()
      ]);
    }

    private function render() {
      $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));
       $app_source = File::get(public_path('js/app-server.js'));
       $v8 = new \V8Js();
       ob_start();
       $v8->executeString('var process = { env: { VUE_ENV: "server", NODE_ENV: "production" }}; this.global = { process: process };');
       $v8->executeString($renderer_source);
       $v8->executeString($app_source);
       return ob_get_clean();
  }
  
}

<?php

namespace App\Blog\Base\Https\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public $data = [];

    public function __construct(Request $request){

    }

    protected function sendJson($response, $message = "", $code = 1){
      $data["message"] = $message;
      $data["code"] = $code;
      $data["response"] = $response;
      return response()->json($data, 200);
    }

    protected function sendError($message, $response = null, $code = 0){
        return $this->sendJson($response, $message, $code);
    }

    protected function sendMetaJson($meta, $message = "", $code = 1){
      $data["message"] = $message;
      $data["meta"] = $meta;
      $data["code"] = $code;
      return response()->json($data, 200);
    }
}

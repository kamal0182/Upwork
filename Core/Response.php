<?php 
namespace app\Core;
class Response {
    public function setStatusCode(int $code)
    {
      return http_response_code($code);
    }
}


?>
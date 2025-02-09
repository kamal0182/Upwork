<?php
 namespace app\Controller;

use app\Core\Application;
use app\Core\Request;
use app\Models\RegisterModel as ModelsRegisterModel;
use RegisterModel;

class AuthController extends Controller
{
    
    public function register (Request $request){
    //    echo "ascasc";
       $registerModel = new ModelsRegisterModel;
       if($request->isPost()){
        
        $registerModel->loadData($request->getBody());
        if($registerModel->validate() && $registerModel->register()){
            return "Success";
        }
        return $this->render("register",[
        'model' => $registerModel]);
       }
        $this->setLayout("Auth"); 
        return $this->render("register",[
            'model' => $registerModel]);    
    }
    public function login (){
        $this->setLayout("Auth"); 
        return $this->render("Login");
    }    
   
}
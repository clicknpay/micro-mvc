<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class Dashboard extends Controller {

    public static function init() {
       
        if(!empty($_SESSION)){
            $data['page']='dashboard';
            parent::view('dashboard_view',$data);
        
        }else{
            header('location:'.URL_PATH.'page/login/error');
            
        }
  
    }
    
    public static function logout() {
        
        Session::destroy();
        header('location:'.URL_PATH.'page/login');

    }

} 

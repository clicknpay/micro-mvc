<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class Bootstrap {

    public static function init() {
        
        Session::start();
        
        try{
        
        if(!empty($_GET['url'])){

            $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            $file = C_PATH.ucfirst(strtolower($url[0])).'.php';

            if(file_exists($file)){
                require $file;
                
            } else {
                throw new Exception(Error::init(1000),1000);
                return false;
            }
            
            if(!empty($url[2])){
                $M = method_exists($url[0], $url[1]) ? TRUE : FALSE;
                if($M == TRUE){
                    $url[0]::$url[1]($url[2]);  
                } else {
                    throw new Exception(Error::init(1000),1000);
                    return false;                    
                }
                
                
            }elseif(!empty($url[1])){
                $M = method_exists($url[0], $url[1]) ? TRUE : FALSE;
                if($M == TRUE){
                    $url[0]::$url[1]();  
                } else {
                    throw new Exception(Error::init(1000),1000);
                    return false;                    
                }                
                
                
            }else{
                $url[0]::init();
            }

        } else {
 
            Index::init();

        }

        
    } catch( Exception $e ) {

    $code = $e->getCode();
    $f = Error::errorLog($e);
    if($f == false):
        header('location:/page/error');
    else:
        header("location:/page/error/$code");
    endif;
    
    
    }        
        
        
    }

}
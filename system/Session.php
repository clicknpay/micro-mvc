<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class Session {
    
    
    private static $_session = false;


    public static function start() {
        
        if(static::$_session == false){
            session_start();
            static::$_session = true;            
        }
    }    

    public static function setVal($ary) {
        
        foreach ($ary as $key => $value) {
            $_SESSION[$key] = $value;
        }
        
        
    }
    
    public static function getVal($key) {
        
        if(!empty($_SESSION[$key]))
            return $_SESSION[$key];
        
        else 
            return false;            
        
    }
    
    public static function display() {
        
        echo '<pre>';
         print_r($_SESSION);
        echo '</pre>';
        
    }  
    
    public static function destroy() {
        
        $_SESSION = array();
        session_destroy();          
        
    }    

}
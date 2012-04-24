<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class Controller {

    public static function view($page, $arg=FALSE) {
        
        $data = (object)$arg;
        View::init($page,$arg);
    }
    
    public static function model($model,$method,$arg=false) {
        
        return $model::$method($arg);
    }    

}

<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class Page_Model extends Model{

    
    public function test($arg=false) {
        
        return 'page model :'.$arg;
        
    }

}

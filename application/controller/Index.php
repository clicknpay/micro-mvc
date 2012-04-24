<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class index extends Controller {

    public static function init() {
        
        $data['page']='index';
        parent::view('page_view',$data);
    }

}

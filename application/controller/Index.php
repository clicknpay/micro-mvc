<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class Index extends Controller {

    public function __construct() {
        
        $data['page']='index';
        $this->view('page_view',$data);
    }

}

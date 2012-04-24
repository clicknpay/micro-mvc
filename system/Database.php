<?php if ( ! defined('B_PATH')) exit('No direct script access allowed');

class Database extends PDO{

    protected $DB_TYPE = 'mysql';
    protected $DB_HOST = 'localhost';
    protected $DB_NAME = 'mircomvc_demo';
    protected $DB_USER = 'admin';
    protected $DB_PASS = 'Good4Now';
    
    
    public function __construct() {
        
        parent::__construct($this->DB_TYPE.':host='.$this->DB_HOST.';dbname='.$this->DB_NAME, $this->DB_USER, $this->DB_PASS);
    }

}
<?php

class Api extends Controller{

    public function __construct() {
     
        // Session::init();
        $this->adminModel = $this->modeladmin("login");
        $this->accountModel= $this->modeladmin("account");
        
    }
    function index(){
        echo "welcome API";

    }

    function addbooking(){
        
    }

} 

?>
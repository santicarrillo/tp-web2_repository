<?php
<<<<<<< HEAD
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AuthView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showFormLogin($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('formLogin.tpl');
    }

    function showError($msg, $url=null){
        $this->smarty->assign("msj", $msg);
        $this->smarty->assign("url", $url);
        $this->smarty->assign("error.tpl");
=======

class AuthView {
    public function showLogin($error = null) {
        require './templates/login.phtml';
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    }
}
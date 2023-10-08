<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class EscuderiasView {
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }


    function showEscuderias($escuderias) {
        $this->smarty->assign('count', count($escuderias));
        $this->smarty->assign('escuderias', $escuderias);
        $this->smarty->display('escuderiasList.tpl');
        
    }
}

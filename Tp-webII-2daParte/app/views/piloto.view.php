<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class PilotoView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }


    public function showFormula1($formula1) {

        $this->smarty->assign('count', count($formula1));
        $this->smarty->assign('formula1', $formula1);

        $this->smarty->display('pilotosList.tpl');
    }

    function showPilotos(){
        header("Location: " .BASE_URL."pilotos");
    }

    function showPiloto(){
        header("Location: ".BASE_URL."pilotos");
    }

    function showAllEscuderias($escuderias, $pilotos){
        $this->smarty->assign("pilotos", $pilotos);
        $this->smarty->assign("escuderias", $escuderias);
        $this->smarty->display('pilotobyescuderia.tpl');
    }

    function showAll($pilotos){
        $this->smarty->assign("pilotos", $pilotos);
        $this->smarty->display('pilotobyescuderia.tpl');
    }

    function showform($id){
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('id', $id);
        $this->smarty->display('edit-pilotos.tpl');
    }

    function editPiloto($piloto){
        $this->smarty->assign("piloto", $piloto);
        $this->smarty->display('edit-pilotos.tpl');
    }

    function success($success, $msg = null){
        $this->smarty->assign("success", $success);
        if (!empty($msg)) {
            $this->smarty->assign("msg", $msg);
        }
        $this->smarty->display('success.tpl');
    }
    
    


}
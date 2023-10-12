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

    function showAll($pilotos){
        $this->smarty->assign("pilotos", $pilotos);
        $this->smarty->display('pilotobyescuderia.tpl');
    }
    

    function printEdit($editarpiloto, $pilotos){
        $this->smarty->assign('count', count($pilotos));
        $this->smarty->assign('editarpiloto', $editarpiloto);
        $this->smarty->assign('piloto', $pilotos);

        $this->smarty->display('edit-pilotos.tpl');
    }
    
    


}
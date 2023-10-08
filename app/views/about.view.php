<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AboutView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }


    function showAbout($calendarios) {
        $this->smarty->assign('count', count($calendarios));
        $this->smarty->assign('libros', $calendarios);
        // mostrar el tpl
        $this->smarty->display('about.tpl');
        
?>
    <ul class="list-group">
    <?php foreach($calendarios as $calendario) { ?>
       
        <li class="list-group-item item-task" >
            <div>
                 <?php echo $calendario->fecha ?>  <?php echo $calendario->circuito?>   <?php echo $calendario->podio ?>
            </div>
        </li>
        
    <?php } ?>
    </ul>

<?php

    }
}

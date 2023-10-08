<?php
    require_once './app/views/escuderia.view.php';

    class EscuderiasController {
        private $view;

        public function __construct() {
            $this->view = new EscuderiasView();
        } 

        public function showEscuderias() {
            $this->view->showEscuderias();
        }
    }
?>
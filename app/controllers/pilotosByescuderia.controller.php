<?php 
require_once './app/models/pilotosByescuderia.model.php';
require_once './app/views/pilotosByescuderia.view.php';
require_once './app/helpers/auth.helper.php';

class PilotosByEscuderiaController {
   
    private $model;
    private $view;
    
    public function __construct() {
        $this->model = new PilotosByEscuderiaModel();
        $this->view = new PilotosByEscuderiaView();
    }

    public function showPilotosByEscuderia() {
        $escuderias = $this->model->getPilotosByEscuderia();
        $this->view->showPilotosByEscuderia($escuderias);    
    }

}
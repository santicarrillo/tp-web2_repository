<?php
require_once './app/models/piloto.model.php';
require_once './app/views/piloto.view.php';
require_once './app/models/escuderia.model.php';

class PilotoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new PilotoModel();
        $this->view = new PilotoView();
        
    }

    public function showFormula1(){
        $formula1 = $this->model->getAllFormula1();
        $this->view->showFormula1($formula1);
    }

    public function showPilotos($id) {
        $pilotos = $this->model->getPilotos($id);
        $this->view->showPilotos($pilotos);
    }

    public function showPiloto() {
        $formula1 = $this->model->getAllFormula1();
        $this->view->showPiloto($formula1);
        
    }


    function showAll(){
        $pilotos = $this->model->getAll();

        $this->view->showAll($pilotos);
    }
    
    

    public function addPiloto() {
        $nombre = $_POST['nombre'];
        $campeonato = $_POST['campeonato'];
        $puntos = $_POST['puntos'];

        if (empty($nombre) || empty($campeonato) || empty($puntos)) {
            $this->view->showError("Debe completar todos los campos");
            return;
        }

        $id = $this->model->insertPiloto($nombre, $campeonato, $puntos);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            $this->view->showError("Error al insertar la tarea");
        }
    }



    function removePiloto($id) {
        $this->model->deletePilotoById($id);
        header('Location: ' . BASE_URL);
    }
    


    function editar($id){
        if((isset($_POST))&&(!empty($_POST))){
            $nombre = $_POST['nombre'];
            $campeonato = $_POST['campeonato']; 
            $puntos = $_POST['puntos'];

        $this->model->updatePiloto($id, $nombre, $campeonato, $puntos);
        header("Location: " . BASE_URL . 'pilotosList');
        }
    }
    function editPilotos($id) {
        $nombre = $_POST['nombre'];
        $campeonato = $_POST['campeonato']; 
        $puntos = $_POST['puntos'];

        $editarpiloto = $this->model->editPiloto($nombre, $campeonato, $puntos, $id);
        $piloto = $this->model->getAllPilotos();
        
        $this->view->printEdit($editarpiloto, $piloto);
        header("Location: " . BASE_URL . 'pilotosList');
        
    }

}
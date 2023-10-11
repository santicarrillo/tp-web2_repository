<?php
require_once './app/models/piloto.model.php';
require_once './app/views/piloto.view.php';
<<<<<<< HEAD
require_once './app/models/escuderia.model.php';
=======
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8

class PilotoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new PilotoModel();
        $this->view = new PilotoView();
        
    }

<<<<<<< HEAD
=======
    //se llama a la base de datos
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    public function showFormula1(){
        $formula1 = $this->model->getAllFormula1();
        $this->view->showFormula1($formula1);
    }

<<<<<<< HEAD
    public function showPilotos($id) {
        $pilotos = $this->model->getPilotos($id);
=======
    //se llama a la tabla pilotos de la base de datos
    public function showPilotos($id) {
        // obtengo tareas del controlador
        $pilotos = $this->model->getPilotos($id);
        
        // muestro a los pilotos desde la vista
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        $this->view->showPilotos($pilotos);
    }

    public function showPiloto() {
        $formula1 = $this->model->getAllFormula1();
        $this->view->showPiloto($formula1);
        
    }

<<<<<<< HEAD

    function showAll(){
        $pilotos = $this->model->getAll();

        $this->view->showAll($pilotos);
    }
    
    

    public function addPiloto() {
=======
    //metodo de agregar pilotos
    public function addPiloto() {

        // obtengo los datos del usuario
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        $nombre = $_POST['nombre'];
        $campeonato = $_POST['campeonato'];
        $puntos = $_POST['puntos'];

<<<<<<< HEAD
=======
        // validaciones
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
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

<<<<<<< HEAD


=======
    //se llama al metodo para remover o eliminar a los pilotos mediante el id
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    function removePiloto($id) {
        $this->model->deletePilotoById($id);
        header('Location: ' . BASE_URL);
    }
    
<<<<<<< HEAD


=======
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    function editar($id){
        if((isset($_POST))&&(!empty($_POST))){
            $nombre = $_POST['nombre'];
            $campeonato = $_POST['campeonato']; 
            $puntos = $_POST['puntos'];

        $this->model->updatePiloto($id, $nombre, $campeonato, $puntos);
<<<<<<< HEAD
        header("Location: " . BASE_URL . 'pilotosList');
        }
    }
    function editPilotos($id) {
=======
        header("Location: " . BASE_URL . 'list');
        }
    }
    function editPilotos($id) {
        //validar entrada de datos
        
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        $nombre = $_POST['nombre'];
        $campeonato = $_POST['campeonato']; 
        $puntos = $_POST['puntos'];

        $editarpiloto = $this->model->editPiloto($nombre, $campeonato, $puntos, $id);
        $piloto = $this->model->getAllPilotos();
        
        $this->view->printEdit($editarpiloto, $piloto);
<<<<<<< HEAD
        header("Location: " . BASE_URL . 'pilotosList');
=======
        header("Location: " . BASE_URL . 'list');
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        
    }

}
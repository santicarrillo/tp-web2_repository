<?php

class EscuderiasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=formula1;charset=utf8', 'root', '');
    }

    public function getAllEscuderias() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
     
        $query = $this->db->prepare("SELECT * FROM escuderias");
        $query->execute();
        // 3. obtengo los resultados
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
       
        return $escuderias;
    }
    
    /**
     * Devuelve la lista de categorias completa.
     */

    function addEscuderia() {

        $equipos = $_POST['equipos'];
        $pilotos = $_POST['pilotos'];
        $puntos_equipo = $_POST['puntos_equipo'];
        $pos_equipos = $_POST['pos_equipos'];


        $this->model->insertEscuderia($equipos, $pilotos, $puntos_equipo, $pos_equipos);
        header("Location: " . BASE_URL); 
    }
}

    


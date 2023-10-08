<?php

class AboutModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=formula1;charset=utf8', 'root', '');
    }

    /**
     * Obtiene y devuelve de la base de datos todas las tareas.
     */
    function getAbouts() {
        $query = $this->db->prepare('SELECT * FROM calendario');
        $query->execute();

        // $tasks es un arreglo de tareas
        $calendarios = $query->fetchAll(PDO::FETCH_OBJ);

        return $calendarios;
    }


    public function getAllAbouts() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM calendario");
        $query->execute();

        // 3. obtengo los resultados
        $calendarios = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $calendarios;
    }

}
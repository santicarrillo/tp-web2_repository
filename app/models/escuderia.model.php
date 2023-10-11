<?php

class EscuderiasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=formula1;charset=utf8', 'root', '');
    }

<<<<<<< HEAD
    function getAllFormula1() {
        $query = $this->db->prepare('SELECT * FROM escuderias');
        $query->execute();

        // $tasks es un arreglo de tareas
        $formula1 = $query->fetchAll(PDO::FETCH_OBJ);

        return $formula1;
    }

    public function getAllEscuderias() {
        $query = $this->db->prepare("SELECT * FROM escuderias");
        $query->execute();

=======
    public function getAllEscuderias() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
     
        $query = $this->db->prepare("SELECT * FROM escuderias");
        $query->execute();
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        // 3. obtengo los resultados
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
       
        return $escuderias;
    }
<<<<<<< HEAD

    function getEscuderias() {
        $query = $this->db->prepare('SELECT * FROM escuderias');
        $query->execute();

        // $tasks es un arreglo de tareas
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ);

        return $escuderias;
    }

    function insertEscuderia($equipos, $pilotos, $img = null, $puntos_equipo, $pos_equipos) {
        $pathImg = null;
        if ($img){
            $pathImg = $this->uploadImg($img);
        }
        $query = $this->db->prepare('INSERT INTO escuderias (equipos, pilotos, img, puntos_equipo, pos_equipos) VALUES(?,?,?,?,?)');
        $query->execute([$equipos, $pilotos, $puntos_equipo, $pos_equipos]);

        return $this->db->lastInsertId();
    }

    private function uploadImg($img){
        $target = 'img/' . uniqid() . '.jpg';
        move_uploaded_file($img, $target);
        return $target;
    }

    function getMore($id) {
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM escuderias WHERE id = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $escuderias = $query->fetch(PDO::FETCH_OBJ); 
        
        return $escuderias;
    }

    function deleteEscuderiaById($id) {
        $query = $this->db->prepare('DELETE FROM escuderias WHERE id = ?');
        $query->execute([$id]);
    }

    function updateEscuderia($id, $equipos, $pilotos, $puntos_equipo, $pos_equipos) {    
        $query = $this->db->prepare('UPDATE escuderias SET equipos=?, $pilotos=?, puntos_equipo=?, pos_equipos=? WHERE id = ?');
        $query->execute([$id, $equipos, $pilotos, $puntos_equipo, $pos_equipos]);
    }


    public function editEscuderia($id, $equipos, $pilotos, $puntos_equipo, $pos_equipos) {
        $editarpilotos = $this->db->prepare("UPDATE escuderias SET equipos = ?, pilotos = ?, puntos_equipo = ?, pos_equipo = ? WHERE id=?");
       
        $editarpilotos->execute([$equipos, $pilotos, $puntos_equipo, $pos_equipos, $id]); //nombre-de-la-columna = valor[, nombre-de-la-columna=valor]
       
        return $editarpilotos;
=======
    
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
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    }
}

    


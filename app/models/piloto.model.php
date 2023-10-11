<?php

class PilotoModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=formula1;charset=utf8', 'root', '');
    }

    function getAllFormula1() {
        $query = $this->db->prepare('SELECT * FROM pilotos');
        $query->execute();
<<<<<<< HEAD
=======

        // $tasks es un arreglo de tareas
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        $formula1 = $query->fetchAll(PDO::FETCH_OBJ);

        return $formula1;
    }

    public function getAllPilotos() {
        $query = $this->db->prepare("SELECT * FROM pilotos");
        $query->execute();
        
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $pilotos;
    }


<<<<<<< HEAD
    function getAll() {
        $query = $this->db->prepare("SELECT * FROM pilotos");
        $query->execute();
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $pilotos;
    }


=======
    //Obtiene y devuelve de la base de datos todas las tareas.
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    function getPilotos() {
        $query = $this->db->prepare('SELECT * FROM pilotos');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

<<<<<<< HEAD

=======
    
    //Inserta la tarea en la base de datos
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    function insertPiloto($nombre, $campeonato, $puntos) {
        $query = $this->db->prepare('INSERT INTO pilotos (nombre, campeonato, puntos) VALUES(?,?,?)');
        $query->execute([$nombre, $campeonato, $puntos]);

        return $this->db->lastInsertId();
    }

    
<<<<<<< HEAD


=======
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    function deletePilotoById($id) {
        $query = $this->db->prepare('DELETE FROM pilotos WHERE id = ?');
        $query->execute([$id]);
    }

    
<<<<<<< HEAD


=======
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    function getPiloto($id){
        $query = $this->db->prepare("SELECT * FROM pilotos WHERE id=?");
        $query->execute([$id]);
        $pilotos = $query->fetch(PDO::FETCH_OBJ);
        return $pilotos;
    }


<<<<<<< HEAD


=======
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    function updatePiloto($id, $nombre, $campeonato, $puntos) {    
        $query = $this->db->prepare('UPDATE pilotos SET nombre=?, $campeonato=?, puntos=? WHERE id = ?');
        $query->execute([$id, $nombre, $campeonato, $puntos]);
    }


<<<<<<< HEAD


    public function editPiloto($id, $nombre, $campeonato, $puntos) {
        $editarpilotos = $this->db->prepare("UPDATE escuderias SET equipos = ?, pilotos = ?, puntos_equipo = ?, pos_equipo = ? WHERE id=?");
        $editarpilotos->execute([$nombre, $campeonato, $puntos, $id]); //nombre-de-la-columna = valor[, nombre-de-la-columna=valor]
=======
    public function editPiloto($id, $nombre, $campeonato, $puntos) {
        $editarpilotos = $this->db->prepare("UPDATE escuderias SET equipos = ?, pilotos = ?, puntos_equipo = ?, pos_equipo = ? WHERE id=?");
       
        $editarpilotos->execute([$nombre, $campeonato, $puntos, $id]); //nombre-de-la-columna = valor[, nombre-de-la-columna=valor]
       
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        return $editarpilotos;
    }

}
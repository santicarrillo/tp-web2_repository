<?php
require_once 'config.php';
class EscuderiasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset='.DB_Charset,DB_USER,DB_PASS );
    }

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

        // 3. obtengo los resultados
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
       
        return $escuderias;
    }

    function getEscuderias() {
        $query = $this->db->prepare('SELECT * FROM escuderias');
        $query->execute();

        // $tasks es un arreglo de tareas
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ);

        return $escuderias;
    }

    function getEscuderia($id){
        $query = $this->db->prepare('SELECT * FROM escuderias WHERE id = ?');
        $query->execute([$id]);
        $escuderia = $query->fetch(PDO::FETCH_OBJ);
        
        return $escuderia;
    }

    function insertEscuderia($equipos, $pilotos, $description, $puntos_equipo, $pos_equipos) {
        $query = $this->db->prepare('INSERT INTO escuderias (equipos, pilotos, description, puntos_equipo, pos_equipos) VALUES(?,?,?,?,?)');
        $query->execute([$equipos, $pilotos, $description, $puntos_equipo, $pos_equipos]);
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

    function editEquipoById($equipos,$pilotos,$puntos_equipo,$description,$pos_equipos,$id){
        $query = $this->db->prepare('UPDATE `escuderias` SET equipos = ? , pilotos = ? , puntos_equipo = ? , description = ? , pos_equipos = ? WHERE id = ?');
        $query->execute([$equipos,$pilotos,$puntos_equipo,$description,$pos_equipos,$id]);
    }  
    
    function getAll(){
        $query = $this->db->prepare("SELECT * FROM escuderias");
        $query->execute();

        $escuderias = $query->fetchAll(PDO::FETCH_OBJ);
        return $escuderias;
    }

    function getByEscuderias($id){
        $query = $this->db->prepare("SELECT * FROM escuderias WHERE id = ?");
        $query->execute([$id]);
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ);

        return $escuderias;
    }
}


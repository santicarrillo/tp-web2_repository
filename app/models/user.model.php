<?php

class UserModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=formula1;charset=utf8', 'root', '');
    }

<<<<<<< HEAD
    public function getUserByEmail($email) {
=======
    public function getByEmail($email) {
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
}
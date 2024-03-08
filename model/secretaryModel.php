<?php

class SecretaryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function deleteSecretary($id)
    {
        $query = $this->db->prepare('DELETE FROM secretaria WHERE nro_secretaria = ?');

        $query->execute([$id]);
    }

    function getSecretarias($idSecretaria = null)
    {
        if (isset($idSecretaria)) {
            $query = $this->db->prepare('SELECT * FROM secretaria WHERE nro_secretaria = ?');
            $query->execute([$idSecretaria]);
            $secretarias = $query->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            $query = $this->db->prepare('SELECT * FROM secretaria');
            $query->execute();
    
            $secretarias = $query->fetchAll(PDO::FETCH_OBJ);
        }
        
        return $secretarias;
    }
    function insertSecretary($nombre, $apellido)
    {
        $query = $this->db->prepare('INSERT INTO secretaria ( nombre, apellido) 
                                     VALUES (?, ?)');

        $query->execute([$nombre, $apellido]);
    }

    /*function getSecretaryByUsername($nombre_usuario_secretaria) {
        $query = $this->db->prepare('SELECT * FROM secretaria WHERE nombre_usuario_secretaria = ?');
        $query->execute([$nombre_usuario_secretaria]);

        $secretary = $query->fetch(PDO::FETCH_OBJ);

        return $secretary;
    }

    function getSecretaryIdByUsername($nombre_usuario_secretaria) {
        $query = $this->db->prepare('SELECT nro_secretaria FROM secretaria WHERE nombre_usuario_secretaria = ?');
        $query->execute([$nombre_usuario_secretaria]);

        $secretaryId = $query->fetch(PDO::FETCH_OBJ);

        return $secretaryId;
    }



    public function getUserSecretaria($username)
    {
        $query = $this->db->prepare('SELECT * FROM secretaria WHERE nombre_usuario_secretaria = ?');
        $query->execute([$username]);

        $secretaria = $query->fetch(PDO::FETCH_OBJ);
        
        return $secretaria;
    }

    public function getSecretaryById($idSecretaria){
        $query = $this->db->prepare('SELECT * FROM secretaria WHERE nro_secretaria = ?');
        $query->execute([$idSecretaria]);

        $secretaria = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $secretaria;
    }*/

}


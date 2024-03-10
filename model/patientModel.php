<?php

class PatientModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getPacientes ($dni =null) {
        if (isset($dni)) {
            $query = $this->db->prepare('SELECT * FROM paciente WHERE dni = ?');
            $query->execute([$dni]);
            $pacientes = $query->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            $query = $this->db->prepare('SELECT * FROM paciente');
            $query->execute();

            $pacientes = $query->fetchAll(PDO::FETCH_OBJ);
        }

        return $pacientes;
    }

    public function getUserPaciente($dni)
    {
        $query = $this->db->prepare('SELECT * FROM paciente WHERE dni = ?');
        $query->execute([$dni]);

        $paciente = $query->fetch(PDO::FETCH_OBJ);

        return $paciente;
    }

    function insertPatient($dni, $nombre, $apellido, $direccion, $telefono, $email, $obra_social = null, $nro_afiliado = null )
    {
        $query = $this->db->prepare('INSERT INTO paciente (dni, nombre, apellido, direccion, telefono, email, obra_social,nro_afiliado) 
                                     VALUES ( ?, ?, ?, ?, ?, ?, ?,?)');

        $query->execute([$dni,$nombre, $apellido, $direccion, $telefono, $email, $obra_social, $nro_afiliado]);
    }


    public function getPatientByDni($dni)
    {
        $query = $this->db->prepare('SELECT * FROM paciente WHERE dni = ?');
        $query->execute([$dni]);

        $patient = $query->fetch(PDO::FETCH_OBJ);

        return $patient;
    }


}
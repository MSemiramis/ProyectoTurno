<?php

class TurnoModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }


    public function getTurnos($nro_paciente = null) {
        if (isset($nro_paciente)) {
            $query = $this->db->prepare('SELECT * FROM turno WHERE nro_paciente = ?');
            $query->execute([$nro_paciente]);
            $turnos = $query->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            $query = $this->db->prepare('SELECT * FROM turno');
            $query->execute();

            $turnos = $query->fetchAll(PDO::FETCH_OBJ);
        }

        return $turnos;
    }
    function insertTurno( $medico, $paciente, $fecha, $detalle)
    {
        $query = $this->db->prepare('INSERT INTO turno (nro_medico, nro_paciente, fecha_turno, detalle) 
                                     VALUES ( ?, ?, ?, ?)');

        $query->execute([ $medico, $paciente, $fecha, $detalle]);
    }

    public function obtenerTurnos($nro_paciente = null) {
        if (isset($nro_paciente)) {
            $query = $this->db->prepare('SELECT * FROM turno WHERE $nro_paciente = ?');
            $query->execute([$nro_paciente]);
            $turnos = $query->fetchAll(PDO::FETCH_OBJ);
        }

        return $turnos;
    }
}



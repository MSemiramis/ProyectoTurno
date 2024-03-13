<?php

class TurnoModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }


    public function getTurnos($dni= null) {
        if (isset($dni)) {
            $query = $this->db->prepare('SELECT * FROM turno WHERE dni= ?');
            $query->execute([$dni]);
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
        $query = $this->db->prepare('INSERT INTO turno (nro_medico, dni, fecha_turno, detalle) 
                                     VALUES ( ?, ?,?, ?)');

        $query->execute([ $medico, $paciente, $fecha, $detalle]);
    }

    public function obtenerTurnos($dni) {

            $query = $this->db->prepare('SELECT t.*,CONCAT(m.nombre, " " , m.apellido) AS nombreApellido_medico
                                                FROM turno t
                                                JOIN medico m ON t.nro_medico = m.nro_medico
                                                WHERE t.dni = ?');
            $query->execute([$dni]);
            $turnos = $query->fetchAll(PDO::FETCH_OBJ);

        return $turnos;


    }
    public function agendaTurnosMedico($nro_medico) {

        $query = $this->db->prepare('SELECT t.*,CONCAT(p.nombre, " " , p.apellido) AS nombreApellido_paciente
                                            FROM turno t
                                            JOIN paciente p ON t.dni = p.dni
                                            WHERE t.nro_medico = ?');
        $query->execute([$nro_medico]);
        $turnos = $query->fetchAll(PDO::FETCH_OBJ);

        return $turnos;
    }


}



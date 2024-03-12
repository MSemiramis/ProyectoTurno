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

    public function obtenerTurnos($nro_paciente) {

            $query = $this->db->prepare('SELECT t.*,CONCAT(m.nombre, " " , m.apellido) AS nombreApellido_medico
                                                FROM turno t
                                                JOIN medico m ON t.nro_medico = m.nro_medico
                                                WHERE t.nro_paciente = ?');
            $query->execute([$nro_paciente]);
            $turnos = $query->fetchAll(PDO::FETCH_OBJ);

        return $turnos;


    }
    public function agendaTurnosMedico($nro_medico) {
echo "numero de medico ".$nro_medico;
        $query = $this->db->prepare('SELECT t.*,CONCAT(p.nombre, " " , p.apellido) AS nombreApellido_paciente
                                            FROM turno t
                                            JOIN paciente p ON t.nro_paciente = p.nro_paciente
                                            WHERE t.nro_medico = ?');
        $query->execute([$nro_medico]);
        $turnos = $query->fetchAll(PDO::FETCH_OBJ);

        return $turnos;
    }

}



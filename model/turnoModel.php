<?php

class turnoModel
{
    private $db;

    public function getTurnos($nro_turno) {
        if (isset($nro_turno)) {
            $query = $this->db->prepare('SELECT * FROM turno WHERE nro_turno = ?');
            $query->execute([$nro_turno]);
            $turnos = $query->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            $query = $this->db->prepare('SELECT * FROM turno');
            $query->execute();

            $turnos = $query->fetchAll(PDO::FETCH_OBJ);
        }

        return $turnos;
    }


}
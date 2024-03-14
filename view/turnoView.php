<?php

require_once 'libs/smarty-4.1.1/libs/Smarty.class.php';

class TurnoView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showAddTurno($dataTurnos, $medicos) {
        $this->smarty->assign('turnos', $dataTurnos);
        $this->smarty->assign('medicos', $medicos);
        $this->smarty->display('templates/newTurno.tpl');

    }

    public function obtenerTurnos($dataTurnos)
    {
        $this->smarty->assign('turnos', $dataTurnos);
        $this->smarty->assign('paciente');
        $this->smarty->display('templates/verTurnos.tpl');
    }

    public function agendaTurnos($dataTurnos)
    {
        $this->smarty->assign('turnos', $dataTurnos);
        $this->smarty->assign('medico');
        $this->smarty->display('templates/medicAgenda.tpl');
    }


}

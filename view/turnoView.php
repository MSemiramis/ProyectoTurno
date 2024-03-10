<?php

require_once 'libs/smarty-4.1.1/libs/Smarty.class.php';

class turnoView{

    function showAddTurno($dataTurnos) {
        $this->smarty->assign('turnos', $dataTurnos);
        $this->smarty->display('templates/newTurno.tpl');

    }
}

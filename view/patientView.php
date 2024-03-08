<?php

require_once 'libs/smarty-4.1.1/libs/Smarty.class.php';

class PatientView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showPage() {
        $this->smarty->assign('title', 'Home');
        $this->smarty->display('templates/firstPage.tpl');
    }

   function showPatients($patients){

        $this->smarty->assign('patients', $patients);
        $this->smarty->assign('title', 'Pacientes');
        $this->smarty->display('templates/patient.tpl');
    }

    function showAddPatient($dataPacientes) {
        $this->smarty->assign('pacientes', $dataPacientes);
        $this->smarty->display('templates/newPatient.tpl');

    }

    public function showLoginPaciente()
    {
        $this->smarty->assign('title', 'LoginPaciente');
        $this->smarty->display('templates/loginPaciente.tpl');
    }

    public function homePaciente($dataPaciente)
    {
        $this->smarty->assign('title', 'Home');
        $this->smarty->assign('dataPaciente', $dataPaciente);
        $this->smarty->display('templates/homePaciente.tpl');
    }

    public function detallesPaciente($dataPaciente)
    {
        $this->smarty->assign('title', 'Home');
        $this->smarty->assign('dataPaciente', $dataPaciente);
        $this->smarty->display('templates/detallesPaciente.tpl');
    }

}
<?php

require_once 'libs/smarty-4.1.1/libs/Smarty.class.php';

class AuthView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showFormLogin($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/loginPaciente.tpl');
    }
    function showFormLoginMedic($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    function showFormAddPatient($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/newPatient.tpl');
    }

    public function showAsignar($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/secretaria.tpl');
    }
}
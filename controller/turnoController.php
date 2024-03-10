<?php

require_once 'model/medicModel.php';
require_once 'model/secretaryModel.php';
require_once 'view/medicView.php';
require_once './helpers/auth.helper.php';
require_once 'model/turnoModel.php';
require_once 'view/turnoView.php';

class turnoController{

    function showNewTurnoForm()
    {
        $dataturnos = $this->model->getTurnos();
        $this->view->showAddTurno($dataturnos);
    }
}
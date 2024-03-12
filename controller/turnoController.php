<?php

require_once 'model/medicModel.php';
require_once 'model/patientModel.php';
require_once 'view/medicView.php';
require_once './helpers/auth.helper.php';
require_once 'model/turnoModel.php';
require_once 'view/turnoView.php';

class TurnoController
{

    private $view;
    private $model;
    private $modelM;
    private $modelP;
    private $authHelper;

    public function __construct()
    {
        $this->model = new TurnoModel();
        $this->modelM = new MedicModel();
        $this->modelP = new PatientModel();
        $this->view = new TurnoView();
        $this->authHelper = new AuthHelper();
    }

    function showNewTurnoForm()
    {
        $dataTurnos = $this->model->getTurnos();
        $medicos = $this->modelM->getMedicos();
        $this->view->showAddTurno($dataTurnos, $medicos);
    }

    function addNewTurno()
    {
        if (!empty($_POST['nro_medico']) && !empty($_SESSION['USER_ID']) && !empty($_POST['fecha_turno']) && !empty($_POST['detalle'])) {

            $medico = $_POST['nro_medico'];
            $paciente = $_SESSION['USER_ID'];// Este esl numero del paciente asignado en el login
            $fecha = $_POST['fecha_turno'];
            $detalle = $_POST['detalle'];

            $this->model->insertTurno($medico, $paciente, $fecha, $detalle);
            header("Location: " . BASE_URL . "verTurno");

        } else {
            // $this->authView->showError('Error en el registro.');
        }
    }

    public function showVerTurno()

    {
        $paciente = $_SESSION['USER_ID'];
        $dataTurnos = $this->model->obtenerTurnos($paciente);
        $this->view->obtenerTurnos($dataTurnos);
    }

    public function showMedicAgenda()
    {
        $medico = $_SESSION['USER_ID'];
        $dataTurnos = $this->model->agendaTurnosMedico($medico);
        $this->view->agendaTurnos($dataTurnos);
    }

}
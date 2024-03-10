<?php

require_once 'model/patientModel.php';
require_once 'model/medicModel.php';
require_once 'view/patientView.php';
require_once 'view/authView.php';
require_once './helpers/auth.helper.php'; 

class PatientController
{
    private $view;
    private $model;
    private $modelS;
    private $authView;

    public function __construct()
    {

        $this->model = new PatientModel();
        $this->modelS = new MedicModel();
        $this->view = new PatientView();
        $this->authHelper = new AuthHelper();
    }

    function showNewPatientForm()
    {
        $dataPacientes = $this->model->getPacientes();
        $this->view->showAddPatient($dataPacientes);
    }
    function showNewTurnoForm()
    {
        $dataturnos = $this->model->getTurnos();
        $this->view->showAddTurno($dataturnos);
    }

    function addTurnos()
    {

    }

    function addPatient()
    {
        if (!empty($_POST['dni']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['direccion']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['obra-social']) && !empty($_POST['nro-afiliado'])) {

            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $obra_social = $_POST['obra-social'];
            $nro_afiliado = $_POST['nro-afiliado'];
            //se le pregunta a la BD si hay un paciente con ese numero de dni (si no retorna nada es que no hay)
            $user = $this->model->getPatientByDni($dni);

            if (empty($user)) {
                $this->model->insertPatient($dni, $nombre, $apellido, $direccion, $telefono, $email, $obra_social, $nro_afiliado);
                header("Location: " . BASE_URL . "pacientes");
            } else {
                header("Location: " . BASE_URL . "nuevoPaciente");
            }
        } else {
            $this->authView->showFormLogin('Error en el registro.');
        }
    }

    public function displayLoginPaciente()
    {
        $this->view->showLoginPaciente();
    }

    public function loginPaciente()
    {
        if (!empty($_POST['dni'])) {
            $dni = $_POST['dni'];
            $userPaciente = $this->model->getUserPaciente($dni);
            if ($userPaciente != null) {
                $this->authHelper->loginPaciente($userPaciente);
                header("Location: " . BASE_URL . "home-paciente" . "/" . $userPaciente->dni);
            } else {
                $this->view->showLoginPaciente();
            }
        } else {
            $this->authView->showFormLogin('Error en el inicio de sesión.');

        }
    }

    public function displayHomePaciente($dni)
    {
        if (isset($dni)) {
            $dataPaciente = $this->model->getPatientByDni($dni);
            $this->view->homePaciente($dataPaciente);
        } else {
            header("Location: " . BASE_URL . "loginPaciente");
        }
    }
    public function displayDetallesPaciente($dni)
    {
        if (isset($dni)) {
            $dataPaciente = $this->model->getPatientByDni($dni);
            $this->view->detallesPaciente($dataPaciente);
        } else {
            header("Location: " . BASE_URL . "loginPaciente");
        }
    }

    function logout()
    {
        session_destroy();
        $this->authHelper->logout();
    }


}

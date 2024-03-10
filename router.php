<?php

require_once './controller/authController.php';
require_once './controller/medicController.php';
require_once './controller/patientController.php';
require_once './controller/secretaryController.php';
require_once './controller/turnoController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'main';
}


$params = explode('/', $action);

$medicController = new MedicController();
$patientController = new PatientController();
$secretaryController = new SecretaryController();
$authController = new AuthController();
$turnoController = new turnoController();



switch ($params[0]) {
    case 'main':
        $medicController->showMain();
        break;
    case 'admin':
        $medicController->showFirstPage();
        break;
    case 'secretariaHome';
        $secretaryController->displaySecretariesList();
        break;
    case 'nuevoMedico':
        $medicController->showNewMedicForm();
        break;
    case 'nuevoPaciente':
        $patientController->showNewPatientForm();
        break;
    case 'nuevaSecretaria':
        $secretaryController->showNewSecretaryForm();
        break;
    case 'agregarSecretaria':
        $secretaryController->addSecretary();
        break;
    case 'agregarMedico':
        $medicController->addMedic();
        break;
    case 'agregarPaciente':
        $patientController->addPatient();
        break;
    case 'eliminarSecretaria':
        $secretaryController->eraseSecretary($params[1]);
        break;
    case 'eliminarMedico':
        $medicController->eraseMedic($params[1]);
        break;
    case 'secretarias':
        $secretaryController->displaySecretariesList();
        break;
    case 'secretaria':
        $secretaryController->displaySecretariaParticular($params[1]);
        break;
    case 'elegirMedico':
        $medicController->displayMedicsList($params[1]);
        break;
    case 'medicos':
        $medicController->displayMedics();
        break;
    case 'asignarMedico':
        $medicController->asignarSecretaria($params[1], $params[2]);
        break;
    case 'agendaMedico':
        $medicController->showMedicAgenda();
        break;
    case 'medicAgenda':
        $medicController->displayMedicsList();
        break;
    case 'login':
        $medicController->displayLogin();
        break;
    case 'loginMedico':
        $medicController->loginMedico();
        break;
    case 'logout':
        $medicController->logout();
        break;
    case 'home-medico':
        $medicController->displayHomeMedico($params[1]);
        break;
    case 'detallesCuenta':
        $medicController->displayDetallesMedico($params[1]);
        break;
    case 'loginPaciente':
        $patientController->displayLoginPaciente();
        break;
    case 'loginPatient':
       $patientController->loginPaciente();
        break;
    case 'logout':
       $patientController->logout();
        break;
    case 'home-paciente':
       $patientController->displayHomePaciente($params[1]);
        break;
    case 'detallesCuentaPaciente':
        $patientController->displayDetallesPaciente($params[1]);
        break;
    case 'sacarTurno':
        $turnoController->showNewTurnoForm();
        break;
    case 'nuevoTurno':
        $turnoController->addNewTurno();
        break;
    case 'verTurno':
        $turnoController->showVerTurno($params[1]);;
        break;
    default:
        echo '404 - Página no encontrada';
        break;
}

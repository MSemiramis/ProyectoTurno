<?php

require_once 'model/patientModel.php';
require_once 'model/medicModel.php';
require_once 'view/patientView.php';
require_once './helpers/auth.helper.php'; 

class PatientController
{
    private $view;
    private $model;
    private $modelS;

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


    function addPatient()
    {
echo"asd";
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
                header("Location: " . BASE_URL . "nuevoPaciente2");
            }
        } else {

            header("Location: " . BASE_URL . "nuevoPaciente");
        }
    }



    public function displayLoginPaciente()
    {
        $this->view->showLoginPaciente();
    }

    public function loginPaciente()
    {
        echo("<script>console.log('PHP: " . "x" . "');</script>");
        // Verifica si se ha enviado el formulario de inicio de sesión
        if (!empty($_POST['dni'])) {
            // Obtiene el DNI enviado a través del formulario
            $dni = $_POST['dni'];

            // Obtiene el usuario paciente correspondiente al DNI
            $userPaciente = $this->model->getUserPaciente($dni);

            // Depuración: imprime el valor de $userPaciente

            // Verifica si se encontró un usuario paciente y si el DNI coincide
            if ($userPaciente && $dni === $userPaciente->dni) {
                // Depuración: imprime un mensaje para verificar que se ingresó a este bloque
                echo "Usuario paciente encontrado y DNI coincidente.";

                // Realiza el inicio de sesión del paciente
                $this->authHelper->loginPaciente($userPaciente);

                // Redirige a la página de inicio del paciente
                header("Location: " . BASE_URL . "home-Paciente" . "/" . $userPaciente->nro_paciente);
            } else {
                // Depuración: imprime un mensaje para verificar que se ingresó a este bloque
                echo "No se encontró un usuario paciente o el DNI no coincide.";

                // Muestra nuevamente el formulario de inicio de sesión
                $this->view->showLoginPaciente();
            }
        }
    }


    public function displayHomePaciente($idPaciente)
    {
        if (isset($idPaciente)) {
            $dataPaciente = $this->model->getPatientById($idPaciente);
            $this->view->homePaciente($dataPaciente);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }
    public function displayDetallesPaciente($idPaciente)
    {
        if (isset($idPaciente)) {
            $dataPaciente = $this->model->getPatientByDni($idPaciente);
            $this->view->detallesPaciente($dataPaciente);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function logout()
    {
        session_destroy();
        $this->authHelper->logout();
    }



}

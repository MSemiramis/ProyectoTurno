<?php

require_once 'model/secretaryModel.php';
require_once 'model/medicModel.php';
require_once 'view/secretaryView.php';
require_once './helpers/auth.helper.php';

class SecretaryController{
    
    private $view;
    private $model;
    private $modelM;
    private $authHelper;

    public function __construct()
    {
        $this->model = new SecretaryModel();
        $this->modelM = new MedicModel();
        $this->view = new SecretaryView();
        $this->authHelper = new AuthHelper();
    }

    function eraseSecretary($id)
    {
        $this->model->deleteSecretary($id);
        header("Location: " . BASE_URL . "secretarias");
    }
    
    function displaySecretariesList(){
        $secretaries = $this->model->getSecretarias();
        $this->view->showSecretaries($secretaries);
    }

    function showNewSecretaryForm() {
         $dataSecretarias = $this->model->getSecretarias();
         $this->view->showAddSecretary($dataSecretarias);

    }
    function displaySecretariaParticular($idSecretaria){
        $dataSecretaria = $this->model->getSecretarias($idSecretaria);
        $medics = $this->modelM->getMedicos($idSecretaria);
        $this->view->showSecretaria($dataSecretaria, $medics);
    }

    function addSecretary(){
        if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];

            $this->model->insertSecretary($nombre, $apellido);

            header("Location: " . BASE_URL . "secretarias");
        } else {

            header("Location: " . BASE_URL . "nuevaSecretaria");
        }   
    }
/*
    public function displayLogin()
    {
        $this->view->showLogin();
    }

    function logout()
    {
        session_destroy();
        $this->authHelper->logout();
    }

    public function loginSecretaria()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userSecretaria = $this->model->getUserSecretaria($username);

            if ($userSecretaria && password_verify($password, $userSecretaria->contrasenia)) {
                $this->authHelper->loginSecretaria($userSecretaria);
                header("Location: " . BASE_URL . "home-Secretaria" . "/" . $userSecretaria->nro_secretaria);
            } else {
                $this->view->showLogin();
            }
        }
    }

    public function displayHomeSecretaria($idSecretaria)
    {
        if (isset($idSecretaria)) {
            $dataSecretaria = $this->model->getSecretaryById($idSecretaria);
            $this->view->homeSecretaria($dataSecretaria);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    public function displayDetallesSecretaria($idSecretaria)
    {
        if (isset($idSecretaria)) {
            $dataSecretaria = $this->model->getSecretaryById($idSecretaria);
            $this->view->detallesSecretaria($dataSecretaria);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }*/
}


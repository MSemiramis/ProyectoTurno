<?php

class AuthHelper
{
    function __construct()
    {
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function login($user)
    {
        $_SESSION['USER_ID'] = $user->nro_medico;
        $_SESSION['USER_NAME'] = $user->nombre_usuario;
    }


    public function loginPaciente($userPaciente)
    {
        $_SESSION['USER_ID'] = $userPaciente->dni;
        $_SESSION['USER_NAME'] = $userPaciente->nombre;
    }

    public function loginSecretaria($userSecretaria)
    {
        $_SESSION['USER_ID'] = $userSecretaria->nro_secretaria;
        $_SESSION['USER_NAME'] = $userSecretaria->nombre_usuario_secretaria;
   }

    function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL . "main");
    }

}

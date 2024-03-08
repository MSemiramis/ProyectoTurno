<?php

require_once 'libs/smarty-4.1.1/libs/Smarty.class.php';

class AuthView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

}
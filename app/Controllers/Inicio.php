<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inicio extends Controller
{
    public function index()
    {
        echo View('templates/header');
        echo View('inicio/index');
        echo View('templates/footer');
    }
}


?>
<?php

namespace App\Controllers;

class Configuracion extends BaseController {

    public function index(): string {
      return view('administrador/configuracion');
    }
    
}
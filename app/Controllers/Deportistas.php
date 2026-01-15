<?php

namespace App\Controllers;

class Deportistas extends BaseController {

    public function index(): string {
      return view('administrador/deportistas');
    }

}
<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view("plantilla/header")
               .view("productos/body")
               .view("plantilla/footer");
    }
}
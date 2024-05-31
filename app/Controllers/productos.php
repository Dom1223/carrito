<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT nombre, precio, stock FROM productos");
        $resultado = $query->getResult();
        $datos = ["productos" => $resultado];

        $datos['cabezera']= view('template/cabezera');
        $datos['pie']= view('template/piepagina');

        return view("productos/lista", $datos);
    }
    public function crear(){

        $datos['cabezera']= view('template/cabezera');
        $datos['pie']= view('template/piepagina');

        return view('productos/crear', $datos);
    }
}
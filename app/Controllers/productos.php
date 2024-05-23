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

        return view("productos/body", $datos);
    }
}
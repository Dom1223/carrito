<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use app\Models\tabla;

class productos extends Controller
{
    
    public function inicio()
    {
        return view('inicio');

    }

    public function index()
    {
        $db = \config\Database::connect();

        $query = $db->query("SELECT nombre, precio, stock FROM productos");
        $resultado = $query->getResult();
        $datos = ["productos" => $resultado];

            // Verifica si se solicita específicamente JSON
        if ($this->request->getGet('format') === 'json') {
            // Devuelve los datos en formato JSON
            return $this->response->setJSON($datos);
        } else {
        
            $datos['cabezera'] = view('template/cabezera');
            $datos['pie'] = view('template/piepagina');
            
            return view("productos/lista", $datos);
        }
    }

    public function crear(){

        $datos['cabezera']= view('template/cabezera');
        $datos['pie']= view('template/piepagina');

        return view('productos/crear', $datos);
    }
    public function guardar() {

        $tabla= new tabla();

        if ($imagen=$this->request->getFile("imagen")){

            $nuevoNombre= $imagen->getRandomName();

            $datos=["nombre" =>$this->request->getVar("nombre"),
                    "imagen"=>$nuevoNombre
            ];
        $tabla->insert($datos);

        }

        echo "imagen ingresada";

        $nombre= $this->request->getVar('nombre');
        print_r($nombre);

        $precio= $this->request->getvar('precio');
        print_r($precio);

        $stock= $this->request->getVar('stock');
        print_r($stock);

 
    }
    public function borrar($productos=null){

        echo "Borrar registro".$productos;
    }
}
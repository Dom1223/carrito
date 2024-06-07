<?php
namespace App\Controllers;

use App\Models\ProductModel1;
use CodeIgniter\Controller;

class Carrito extends Controller
{
    public function index()
    {
        $model = new ProductModel1();
        $data['productos'] = $model->findAll();
        
        echo view('inicio', $data);
    }

    public function agregar($id)
    {
        $session = session();
        $model = new ProductModel1();
        $producto = $model->find($id);
        
        $carrito = $session->get('carrito');
        
        if (!$carrito) {
            $carrito = [];
        }
        
        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                'id' => $producto['id'],
                'Nombre' => $producto['Nombre'],
                'Descripcion' => $producto['Descripcion'],
                'precio' => $producto['precio'],
                'cantidad' => 1,
            ];
        }
        
        $session->set('carrito', $carrito);
        
        return redirect()->to('/');
    }

    public function ver()
    {
        $session = session();
        $data['carrito'] = $session->get('carrito');
        
        echo view('carrito', $data);
    }

    public function eliminar($id)
    {
        $session = session();
        $carrito = $session->get('carrito');
        
        if (isset($carrito[$id])) {
            unset($carrito[$id]);
        }
        
        $session->set('carrito', $carrito);
        
        return redirect()->to('/carrito/ver');
    }
}

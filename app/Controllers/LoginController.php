<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $session = session();

        $username = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $user = $userModel->where('usuario', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'user_id' => $user['id'],
                    'user_name' => $user['nombre'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/proyecto/carrito/public');  // Redirigir a la página principal
            } else {
                $session->setFlashdata('error', 'Contraseña incorrecta');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('error', 'Usuario no encontrado');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

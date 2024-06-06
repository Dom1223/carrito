<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class Cart extends Controller
{
    protected $cart;

    public function __construct()
    {
        helper('form', 'url');
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        echo view('cart_view', $data);
    }

    public function add()
    {
        $data = array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => $this->request->getPost('price'),
            'name'    => $this->request->getPost('name')
        );
        $this->cart->insert($data);
        return redirect()->to('/cart');
    }

    public function remove($rowid)
    {
        $this->cart->remove($rowid);
        return redirect()->to('/cart');
    }

    public function update()
    {
        $data = array();
        foreach ($this->request->getPost() as $key => $value) {
            if (strpos($key, 'qty') === 0) {
                $rowid = substr($key, 3);
                $data[] = array(
                    'rowid' => $rowid,
                    'qty'   => $value
                );
            }
        }
        $this->cart->update($data);
        return redirect()->to('/cart');
    }

    public function clear()
    {
        $this->cart->destroy();
        return redirect()->to('/cart');
    }
}
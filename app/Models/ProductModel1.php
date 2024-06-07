<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel1 extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nombre', 'Descripcion', 'stock', 'precio'];
}

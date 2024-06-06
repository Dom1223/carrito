<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla extends Model
{
    protected $table = 'productos';       // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';         // Clave primaria
    protected $allowedFields = ['id','nombre', 'imagen', 'Descripción', 'precio', 'stock']; // Campos permitidos para inserción/actualización
}
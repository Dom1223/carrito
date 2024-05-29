<?php

namespace App\Models;

use CodeIgniter\Model;

class clienteModelo extends Model
{
    protected $table = "cliente";
    protected $primarykey = "id";
    protected $returntype = "array";
    protected $allowedfields = ["nombre","apellido","telefono","correo"];
    protected $usetimestamps = true;
    protected $createdfield = "created_at";
    protected $updatedfield = "update_at";

    protected $validationrules = ["nombre" => "required|alpha_space|min_length[3]|max_length[75]",
                                "apellido" => "required|alpha_space|min_length[3]|max_length[75]",
                                "telefono" => "required|alpha_space|min_length[8]|max_length[8]",
                                "correo" => "permit_empty|valid_email|max_length[85]",];

    protected $skipvalidation = false;

}
<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
    // Especificamos la tabla que este modelo utilizará en la base de datos.
    protected $table = "roles";

    // La clave primaria de la tabla (en este caso, id).
    protected $primarykey = "id";

    // Habilitamos el uso de las marcas de tiempo automáticas (created_at, updated_at).
    //protected $useTimestamps = true;

    // Campos que se pueden insertar o actualizar en la base de datos de manera masiva
    protected $allowedFields = ["nombre_rol"];

  

}

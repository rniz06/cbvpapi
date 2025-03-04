<?php

namespace App\Models\Vistas;

use Illuminate\Database\Eloquent\Model;

class VtPersonal extends Model
{
    // La vista aun no maneja softdeletes
    
    protected $connection = "db_personal";

    protected $table = "vt_personales";

    protected $primaryKey = 'idpersonal';
}

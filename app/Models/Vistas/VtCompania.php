<?php

namespace App\Models\Vistas;

use Illuminate\Database\Eloquent\Model;

class VtCompania extends Model
{
    // La vista aun no maneja softdeletes
    
    protected $connection = "db_companias";

    protected $table = "vt_companias";

    protected $primaryKey = 'idcompanias';
}

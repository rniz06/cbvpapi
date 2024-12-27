<?php

namespace App\Models\Vistas;

use Illuminate\Database\Eloquent\Model;

class VtResolucion extends Model
{
    protected $connection = "db_resoluciones";

    protected $table = "vista_resoluciones";

    protected $primaryKey = 'id_resolucion';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
    protected $table = 'tb-servicio';
    protected $primaryKey = 'id_servicio';
    public $timestamps = 'false';

}

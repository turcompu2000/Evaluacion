<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conductor extends Model
{
    use HasFactory;
    protected $table = 'tb-conductor';
    protected $primaryKey = 'id';
    protected $timestamps = 'false';
}

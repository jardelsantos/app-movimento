<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimentoModel extends Model
{
    use HasFactory;

    protected $table = 'movimento';
    protected $fillable = [
        'nome','km','dia'
    ];
    protected $casts = [
        'dia'=> 'date'
    ];
}

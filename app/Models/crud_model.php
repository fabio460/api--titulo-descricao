<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descricao',
    ];
}

<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    protected $fillable = ['id', 'NOME', 'SOBRENOME', 'DATA_DE_NASCIMENTO', 'NATURALIDADE', 'HOBBY'];
}

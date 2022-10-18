<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    //QUANDO A TABLE NÃO CORRESPODEM AO NOME DO MODEL 
    protected $table = 'fornecedores';
}

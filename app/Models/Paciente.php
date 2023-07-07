<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'ativo', 'celular', 'data_nascimento', 'sexo', 'cpf', 'endereco', 'cep', 'bairro', 'complemento', 'cidade', 'estado'];

    public function calculaIdade($dataNascimento){
        $data = new DateTime($dataNascimento);
        $resultado = $data->diff( new DateTime( date('d-m-Y') ) );
        return $resultado->format( '%Y anos' );
    }
}

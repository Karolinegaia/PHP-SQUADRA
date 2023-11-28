<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = 'CODIGO_PESSOA';
    protected $fillable = ['CODIGO_PESSOA', 'NOME', 'SOBRENOME', 'IDADE', 'LOGIN', 'SENHA', 'STATUS'];


    public function enderecos()
    {
        return $this->hasMany('App\Endereco', 'CODIGO_PESSOA', 'CODIGO_PESSOA');
    }
}

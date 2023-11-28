<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = 'CODIGO_ENDERECO';
    protected $fillable = ['CODIGO_ENDERECO', 'CODIGO_PESSOA', 'CODIGO_BAIRRO', 'NOME_RUA', 'NUMERO', 'COMPLEMENTO', 'CEP'];


    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa', 'CODIGO_PESSOA', 'CODIGO_PESSOA');
    }
    public function bairro()
    {
        return $this->belongsTo('App\Bairro', 'CODIGO_BAIRRO', 'CODIGO_BAIRRO');
    }
}

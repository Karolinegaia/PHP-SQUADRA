<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    protected $table = 'bairros';
    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = 'CODIGO_BAIRRO';
    protected $fillable = ['CODIGO_MUNICIPIO', 'CODIGO_BAIRRO', 'NOME', 'SIGLA', 'STATUS'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio', 'CODIGO_MUNICIPIO', 'codigoMunicipio');
    }
    public function enderecos()
    {
        return $this->hasMany('App\Endereco', 'foreing_key', 'CODIGO_ENDERECO');
    }
}

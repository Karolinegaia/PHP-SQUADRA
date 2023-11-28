<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $primaryKey = 'CODIGO_MUNICIPIO';

    public $incrementing = true;
    
    protected $fillable = ['CODIGO_MUNICIPIO', 'CODIGO_UF', 'NOME', 'STATUS'];
    public $timestamps = false;
    
    public function uf()
    {
        return $this->belongsTo('App\Uf', 'foreign_key', 'CODIGO_UF');
    }
    public function bairros()
    {
        return $this->hasMany('App\Bairro', 'CODIGO_MUNICIPIO', 'CODIGO_MUNICIPIO');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BairroController extends Controller
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

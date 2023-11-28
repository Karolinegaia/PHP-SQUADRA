<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UF extends Model
{
    protected $table = 'ufs';
    public $incrementing = true;
    protected $primaryKey = 'CODIGO_UF';
    protected $fillable = ['CODIGO_UF', 'NOME', 'SIGLA', 'STATUS'];
    public $timestamps = false;
    public function municipios()
    {
        return $this->hasMany('App\Municipio', 'foreign_key', 'CODIGO_UF');
    }
}

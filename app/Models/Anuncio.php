<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'titulo',
        'descricao',
        'tipo',
        'idEmpresa',
        'setorAtividade',
        'regiao',
        'localidade',
        'contactos',
        'habilitacoesMinimas',
        'nrReports'
    ];
    
    public function criador(){
        return $this->belongsTo(User::class,'anuncio_id','id');
    }
}

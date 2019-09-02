<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastroPjSocio extends Model
{
    protected $table = 'company_socio';
    protected $fillable = [
        'nomesocio', 'cpfsocio', 'pep','partido','documento','selfie','comprovante','procuracao',
        'nomesocio1', 'cpfsocio1', 'pep1','partido1','documento1','selfie1','comprovante1',
        'nomesocio2', 'cpfsocio2', 'pep2','partido2','documento2','selfie2','comprovante2',
        'nomesocio3', 'cpfsocio3', 'pep3','partido3','documento3','selfie3','comprovante3',
        'telefone',
    ];
}

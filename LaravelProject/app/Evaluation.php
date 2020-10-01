<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'note ',  
    ];

    public function etudiant() 
    {
        return $this->belongsTo('App\Etudiant'); 
    }

    public function examen() 
    {
        return $this->belongsTo('App\Examen'); 
    }
}

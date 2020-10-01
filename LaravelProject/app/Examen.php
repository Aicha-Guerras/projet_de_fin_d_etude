<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $fillable = [
        'titre_ressource' , 'examen_sujet ', 'type', 'cour_id' , 'examen_id'
    ];

    public function cour() 
    {
        return $this->belongsTo('App\Cour' , 'cour_id'); 
    }

    public function exercices() 
    {
        return $this->hasMany('App\Exercice' , 'examen_id'); 
    }
}

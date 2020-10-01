<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $table = 'cours';

    protected $fillable = [
        'titre_cour ', 'description', 'enseignant_id' 
    ];

    public function enseignant() 
    { 
        return $this->belongsTo('App\Enseignant' , 'enseignant_id'); 
    }

    public function etudiants() 
    {
        return $this->belongsToMany('App\Etudiant' , 'inscriptions' , 'cour_id' , 'etudiant_id'); 
    }

    public function lecons() 
    {
        return $this->hasMany('App\Lecon' , 'cour_id'); 
    }

    public function examens() 
    {
        return $this->hasMany('App\Examen' , 'cour_id'); 
    }
}

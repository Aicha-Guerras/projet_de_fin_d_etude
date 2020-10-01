<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = [
        'prenom', 'nom', 'email', 'genre', 'date_de_naissance', 'pays', 'password',
    ];

    public function cours() 
    { 
        return $this->hasMany('App\Cour' , 'enseignant_id'); 
    }
}

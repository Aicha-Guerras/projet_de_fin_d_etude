<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'etudiant_id ', 'cour_id', 
    ];

    public function cour() 
    {
        return $this->belongsTo('App\Cour'); 
    }

    public function etudiant() 
    {
        return $this->belongsTo('App\Etudiant'); 
    }

}

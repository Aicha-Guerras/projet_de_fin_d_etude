<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecon extends Model
{

    protected $table ='lecons';

    protected $fillable = [
        'titre_ressource' , 'titre_lecon ', 'contenu', 'cour_id'
    ];

    public function cour() 
    {
        return $this->belongsTo('App\Cour', 'cour_id'); 
    }

}

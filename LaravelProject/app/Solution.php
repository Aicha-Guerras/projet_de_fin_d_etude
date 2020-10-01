<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'reponce ',  
    ];

    public function etudiant() 
    {
        return $this->belongsTo('App\Etudiant'); 
    }

    public function exercice() 
    {
        return $this->belongsTo('App\Exercice'); 
    }
}

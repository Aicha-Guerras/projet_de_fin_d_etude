<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
    use Notifiable;

        protected $guard = 'etudiant';

        protected $fillable = [
                'name', 'prenom', 'genre', 'date_de_naissance', 'pays','email', 'password',
        ];
        

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function cours() 
        {
            return $this->belongsToMany('App\Cour','inscriptions','etudiant_id','cour_id'); 
        }

        public function exercices() 
        {
            return $this->belongsToMany('App\Exercice'); 
        }
        public function examens() 
        {
            return $this->belongsToMany('App\Examen'); 
        }
}

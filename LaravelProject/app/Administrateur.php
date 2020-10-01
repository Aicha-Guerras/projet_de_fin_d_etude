<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

class Administrateur extends Authenticatable
{
    use Notifiable;

        protected $guard = 'admin';

        /* protected $fillable = [
            'prenom', 'nom', 'email', 'genre', 'dateDeNaissance', 'pays', 'motDePasse',
        ];*/

        protected $fillable = [
            'prenom', 'name', 'email', 'genre', 'dateDeNaissance', 'pays', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function sendPasswordResetNotification($token)
        {
            $this->notify(new AdminResetPasswordNotification($token));
        }
}

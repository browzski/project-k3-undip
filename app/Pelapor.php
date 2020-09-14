<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Pelapor extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $table = 'pelapor';
    protected $fillable = ['nama', 'nik', 'alamat', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}

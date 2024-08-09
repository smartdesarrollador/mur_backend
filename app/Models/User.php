<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/* 5.- LOGIN_REGISTER_BASICO-V1-P1 */
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
/* /5.- LOGIN_REGISTER_BASICO-V1-P1 */
use App\Models\Rol;

/* 6.- LOGIN_REGISTER_BASICO-V1-P1 */
// colocar: implements JWTSubject
class User extends Authenticatable implements JWTSubject
{
/* /6.- LOGIN_REGISTER_BASICO-V1-P1 */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
/* 7.- LOGIN_REGISTER_BASICO-V1-P1 */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

     public function getJWTCustomClaims()
    {
        return [];
    }
/* /7.- LOGIN_REGISTER_BASICO-V1-P1 */

    public function rol()
    {
        return $this->belongsToMany(Rol::class, 'roles_usuarios', 'id_user', 'id_rol');
    }

    /* public function Empleador()
    {
        return $this->hasOne(Empleador::class);
    }

    public function Trabajador()
    {
        return $this->hasOne(Trabajador::class);
    } */
    
}

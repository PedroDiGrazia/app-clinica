<?php

namespace App\Models;

<<<<<<< Updated upstream
// use Illuminate\Contracts\Auth\MustVerifyrs;
=======
>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Secretaria extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
<<<<<<< Updated upstream
    protected $table = 'secretaria';
=======
    protected $table = 'secretaria'; // Defina explicitamente a tabela
>>>>>>> Stashed changes
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
<<<<<<< Updated upstream
        'rs',
=======
        'registrosec',
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        'rs_verified_at' => 'datetime',
=======
        'registrosec_verified_at' => 'datetime',
>>>>>>> Stashed changes
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Secretaria extends Model
{
<<<<<<< Updated upstream
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'secretaria'; // Defina explicitamente a tabela
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'registrosec',
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
        'registrosec_verified_at' => 'datetime',
    ];
=======
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function user(): HasOne {
        return $this->hasOne(User::class);
    }
>>>>>>> Stashed changes
}

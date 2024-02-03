<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'email',
        'password',
        'tipo',
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

    /**
     * Métodos do User, para controle de acesso;
     */
    public function roles () {
        return $this->belongsToMany(Role::class);
    }

    public function getPermissions () {
        return $this->roles->map->permissionss->flatten()->pluck('name');
    }

    public static function getTipo ($user_email) {
        return DB::select("SELECT tipo FROM users WHERE email = '$user_email'");
    }

    public static function getRoles ($user_id) {
        return DB::select("SELECT r.name FROM roles r INNER JOIN role_user ru ON (ru.role_id=r.id) WHERE ru.user_id = $user_id");
    }
}

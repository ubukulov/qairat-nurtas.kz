<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Метод проверяет существует ли пользовател
     * @param string $email
     * @return object|boolean
     */
    public static function exists($email)
    {
        $user = User::where(['email' => $email])->first();
        if ($user) {
            return $user;
        }
        return false;
    }

    /**
     * @param array $data
     * @return object
     */
    public static function createUser($data)
    {
        $password = bcrypt('qn_123@#');
        $user = User::create([
            'name' => $data['name'], 'email' => $data['email'], 'password' => $password
        ]);
        return $user;
    }
}

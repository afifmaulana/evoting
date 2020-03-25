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
    protected $guard = 'siswa';
    protected $table = 'users';
    protected $fillable = [
        'id_adminsekolah',
        'nis',
        'nama_siswa',
        'kelas',
        'email',
        'api_token',
        'password'
    ];

    public function adminsekolah(){

        return $this->belongsTo(AdminSekolah::class, 'id_adminsekolah', 'id');
    }

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
}

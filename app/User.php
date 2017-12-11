<?php

namespace App;

use App\Modules\Admission\Models\Registration;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id', 'registration_number', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function registration()
    {
        return $this->hasOne(Registration::class, 'registration_number', 'registration_number');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function document()
    {
        return $this->hasMany(Document::class)->orderBy('created_at','DESC');
    }

    public static function getUserDocuments()
    {
        return auth()->user()->document;
    }
}

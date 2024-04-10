<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function stripcards(): HasMany {
        if ($this->role === "Leerling") {
            return $this->hasMany(Stripcard::class);
        } else {
            throw new \Error("User is not a student!");
        }
    }

    public function lessons(): HasMany {
        if ($this->role === "Leerling") {
            return $this->hasMany(Lesson::class);
        } else {
            throw new \Error("User is not a student!");
        }
    }

    public function info(): HasOne|null {
        if ($this->role === "Leerling") {
            return $this->hasOne(StudentInfo::class);
        } else if ($this->role === "Instructeur") {
            return $this->hasOne(InstructorInfo::class);
        } else {
            return null;
        }
    }
}

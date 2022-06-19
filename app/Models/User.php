<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["name", "email", "password", "google_id", "avatar"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        "id" => "integer",
        "google_id" => "integer",
        "email_verified_at" => "datetime",
    ];

    public function image(): Attribute
    {
        $hash = md5(strtolower(trim($this->email)));
        return new Attribute(
            get: fn() => $this->avatar ??
                "https://www.gravatar.com/avatar/" . $hash . "?d=wavatar"
        );
    }

    public function todos(): HasManyThrough
    {
        return $this->hasManyThrough(Todo::class, Category::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}

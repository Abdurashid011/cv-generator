<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
        'nt_id',
        'photo',
        'phone',
        'profession',
        'biography',
    ];

    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function socialNetworks(): BelongsToMany
    {
        return $this->belongsToMany(SocialNetwork::class, 'social_network_student');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'skill_student');
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'language_students');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'nt_id',
        'photo',
        'phone',
        'profession',
        'biography',
    ];

    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }

    public function cv(): HasOne
    {
        return $this->hasOne(Cv::class);
    }

}

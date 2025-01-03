<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'name',
        'position',
        'description',
        'start_data',
        'end_data',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}


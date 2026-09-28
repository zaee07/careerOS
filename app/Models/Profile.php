<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'headline',
        'phone',
        'location',
        'website',
        'linkedin_url',
        'github_url',
        'summary',
        'photo_path',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

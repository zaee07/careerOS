<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    protected $fillable = [
        'user_id',
        'instution_name',
        'degree',
        'location',
        'field_of_study',
        'start_year',
        'end_year',
        'is_current',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'start_year' => 'year',
            'end_year' => 'year',
            'is_current' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

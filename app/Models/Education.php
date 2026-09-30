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
<<<<<<< HEAD
            'start_year' => 'year',
            'end_year' => 'year',
=======
            'start_year' => 'integer', 
            'end_year'   => 'integer',
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
            'is_current' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

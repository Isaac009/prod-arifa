<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
    ];

    public function sponsor(): BelongsTo
    {
        return $this->belongsTo(Sponsor::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Publication extends Model
{
    use HasFactory;

    protected $casts = [
        'attachments' => 'array',
    ];

    public function author():BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function PublicationType():BelongsTo
    {
        return $this->belongsTo(PublicationType::class);
    }

    public function PublicationTag():BelongsTo
    {
        return $this->belongsTo(PublicationTag::class);
    }
}

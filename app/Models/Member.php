<?php

namespace App\Models;

use App\Models\City;
use App\Models\State;
use App\Models\Title;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_group_id',
        'titles',
        'name',
        'email',
        'password',
        'address',
        'country_id',
        'state_id',
        'city_id',
        'zip_code',
        'date_of_birth',
        'joined_since',
        'bio'
    ];

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function member_group(): BelongsTo{
        return $this->belongsTo(MemberGroup::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'titles' => 'array'
    ];
}

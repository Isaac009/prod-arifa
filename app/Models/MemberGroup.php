<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberGroup extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->belongsToMany(Member::class, 'member_member_group');
    }
}

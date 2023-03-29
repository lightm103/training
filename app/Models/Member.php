<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'description',
            'address',
            'place_name',
            'region',
            'postal_code',
            'latitude',
            'longtitude',
            'email',
            'phone',
            'phone_mobile',
            'leader_name',
            'children_count',
            'worker_count',
            'like_count',
            'share_count',
            'view_count',
            'bookmark_count',
            'donate_count',
            'is_active',
    ];
}

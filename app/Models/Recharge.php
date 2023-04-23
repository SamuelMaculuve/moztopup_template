<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recharge extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'game_id',
        'recharge_type_id',
        'user_id',
        'code',
        'description',
        'state',
    ];

    protected $dates = ['deleted_at'];
}

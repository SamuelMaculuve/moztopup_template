<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RechargeType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'game_id',
        'user_id',
        'price',
        'description',
        'promotion',
        'start_date',
        'end_date',
    ];

    protected $dates = ['deleted_at'];
}

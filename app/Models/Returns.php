<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Returns extends Model
{
    use HasFactory;

    protected $table = 'returns';

    protected $fillable = [
        'asset_id',
        'returend_by',
        'returend_by_contact',
        'quantity',
        'reason',
        'created_at',
        'updated_at',
        'deleted_at'

    ];
}

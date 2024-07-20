<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $fillable = [
        'code',
        'title',
        'description',
        'type',
        'value',
        'is_featured',
        'status',
        'image',
    ];
}

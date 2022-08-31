<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homepage extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'page',
        'title',
        'alt',
        'content',
        'bg_color',
        'bg_image',
        'bg_alt',
        'image',
        'status',
        'sub_content',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function subHomepages()
    {
        return $this->hasMany('App\Models\Homepage','parent_id','id')->wherePage(null);
    }

    public function Menu()
    {
        return $this->belongsTo('App\Models\Menu','parent_id','id') ;
    }

}

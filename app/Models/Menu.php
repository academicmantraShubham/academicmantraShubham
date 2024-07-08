<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'content',
        'status',
        'sub_menu',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function subMenus() {
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id') ;
    }
    
    public function post()
    {
        return $this->hasOne(ContentPage::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class FrontMenu extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [];

    public function submenu()
    {
        return $this->hasMany(FrontSubmenu::class, 'menu_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'menu_url' => [
                'source' => 'menu'
            ]
        ];
    }
}

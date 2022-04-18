<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class FrontSubmenu extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(FrontMenu::class);
    }

    public function sluggable(): array
    {
        return [
            'url' => [
                'source' => 'name'
            ]
        ];
    }
}

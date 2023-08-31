<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Cviebrock\EloquentSluggable\Sluggable;
use \Conner\Tagging\Taggable;

class News extends Model implements Viewable
{
    use HasFactory, SoftDeletes, InteractsWithViews, Sluggable, Taggable;
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function gambar()
    {
        return $this->hasMany(File::class, 'id_news', 'id');
    }

    public function gambarmuka()
    {
        return $this->hasOne(File::class, 'id_news', 'id');
    }
}

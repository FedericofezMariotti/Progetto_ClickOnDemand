<?php

namespace App\Models;

use App\Models\Article;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    
    public function subcategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
}

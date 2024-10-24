<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $table= 'sub_categories';
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
}

public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

}

<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use App\Models\SubCategory;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'description', 'price', 'category_id', 'user_id', 'sub_category_id'];

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}

public function category(): BelongsTo
{
    return $this->belongsTo(Category::class);
}

public function subcategory(): BelongsTo
{
    return $this->belongsTo(SubCategory::class, 'sub_category_id');
}
public function setAccepted($value)
{
    $this->is_accepted = $value;
    $this->save();
    return true;
}

public static function toBeRevisedCount(){

    return Article::where('is_accepted', null)->count();
}

public function toSearchableArray()
{
    return [
        'id' => $this->id,
        'title' => $this->title,
        'description' => $this->description,
        'category' => $this->category
    ];
}

public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

}



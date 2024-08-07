<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = ['title', 'category', 'description','price'];

    public function user(): BelongsTo
    {
        return $this -> belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this -> belongsTo(Category::class);
    }
}

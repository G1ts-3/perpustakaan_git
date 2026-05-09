<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illiminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'category_id', 'title', 'author', 'publisher', 'isbn', 'year', 'stock'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

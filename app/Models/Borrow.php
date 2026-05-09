<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'borrows';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'book_id', 'borrow_date', 'return_date', 'status'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function book():BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}

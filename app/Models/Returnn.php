<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Returnn extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'returnns';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'borrow_id', 'return_date', 'paythefine'];

    public function borrow():BelongsTo
    {
        return $this->belongsTo(Borrow::class);
    }

}

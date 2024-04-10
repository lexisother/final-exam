<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stripcard extends Model
{
    use HasFactory;

    protected $table = "strip_cards";

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}

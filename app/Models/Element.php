<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Sel;


class Element extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    public function sel(): BelongsTo
    {
        return $this->belongsTo(Sel::class);
    }
}

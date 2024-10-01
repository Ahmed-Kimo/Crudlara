<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Element;


class Sel extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    public function element(): HasOne
    {
        return $this->hasOne(Element::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostCategory extends Pivot
{
    protected $fillable = [
        "post_id",
        "category_id"
    ];
}

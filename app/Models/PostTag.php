<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot
{
    protected $fillable = [
        "post_id",
        "tag_id",
    ];
}

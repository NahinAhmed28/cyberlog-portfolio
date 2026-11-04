<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageBlock extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $casts = ['data' => 'array', 'is_visible' => 'boolean'];
}

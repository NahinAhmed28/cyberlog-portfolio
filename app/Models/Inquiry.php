<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    use SoftDeletes;

    protected $casts = ['read_at' => 'datetime', 'notified_at' => 'datetime'];

    protected $fillable = ['name', 'email', 'company', 'phone', 'service', 'message', 'status', 'admin_notes', 'page_url', 'read_at', 'notified_at'];
}

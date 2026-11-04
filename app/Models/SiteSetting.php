<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'key';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [];

    public static function notificationRecipient(): string
    {
        return static::find('inquiry_recipient')?->value ?: config('mail.inquiry_recipient');
    }
}

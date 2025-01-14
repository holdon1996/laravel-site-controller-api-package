<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScApiLog extends Model
{
    protected $table = 'sc_api_log';
    protected $fillable = [
        'url',
        'method',
        'request',
        'response',
        'status_code',
        'created_at',
    ];
}

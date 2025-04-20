<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchemeOfWork extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'subject',
    ];
}

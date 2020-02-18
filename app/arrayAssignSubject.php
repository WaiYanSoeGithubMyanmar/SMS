<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arrayAssignSubject extends Model
{
    protected $guarded = [
        'id' => '',
        'subject' => '',
        'date' => '',
        'start_time' => '',
        'end_time' => '',
        'room' => '',
        'full_marks' => '',
        'passing_marks' => '',
    ];
}
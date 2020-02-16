<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exams extends Model
{
    protected $fillable= ['name','remark','session_id','is_active'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_data extends Model
{
    protected $fillable = [
        'name', 'mobile', 'city','education','job','note'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forms extends Model
{
    protected $fillable = [
        'date','name' , 'job' , 'adress' , 'phone' , 'fixed_line' , 'email' , 'project_name' , 'type' , 'space' , 'know' , 'sales'
    ];
}

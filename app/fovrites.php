<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fovrites extends Model
{
    protected $table_name = 'fovrites';

    protected $fillable = ['user_id' , 'project_id'];
}

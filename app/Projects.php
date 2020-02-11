<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ['name' , 'logo' , 'imgs' , 'location' , 'price' , 'sqft' , 'bedrooms' , 'kitchens' , 'bathrooms' , 'garage' , 'garden' , 'file'];

    // public function users(){

    //     return $this->belongsToMany('App\User' , 'fovrites' , 'project_id' , 'user_id');
    //  }
}

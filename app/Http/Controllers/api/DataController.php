<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\forms;
use App\Projects;
use App\fovrites;

class DataController extends Controller
{

    use ApiResponseTrait;

    // Insert Data Fro Api ...
    public function insert_form(Request $request){
        
        $form = forms::create($request->all());

        if($form){
            return $this->apiResponse($form , null , 201);
        }else{
            return $this->apiResponse(null , 'unknown Error' ,  400);
        }
       
    }

    public function projects_names(){

        $projects_arabic = projects::where('lang' , 0)->get();
        $projects_english = projects::where('lang' , 1)->get();
        $projects = ['arabic'=>$projects_arabic , 'english'=>$projects_english];

        return $this->apiResponse($projects , null , 200);
        
    }

    public function add_fovrite(Request $request){

        $fovrite = fovrites::create($request->all());
        if($fovrite){
            return $this->apiResponse(null , null , 201);
        }else{
            return $this->apiResponse(null , 'unknown Error' , 400);
        }
    }

    public function all_fovrites(Request $request){
        $fovrites = fovrites::get()->where('user_id' , $request->id);
        return $this->apiResponse($fovrites , null , 200);
    }

    public function delete_fovrite($id){
        $fovrite = fovrites::find($id);
        if($fovrite){
            $fovrite->delete();
            return $this->apiResponse(true , null , 200);
        }
    }


  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forms;
use App\Projects;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $forms = forms::all();
        return view('home' , compact('forms'));
    }
    
    public function projects(){
        $projects = Projects::all();
        return view('projects', compact('projects'));
    }
    
    public function insert_project(Request $request){
        $project = new Projects();
        $project->name = $request->name;

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $logo = 'logo_project_' . time() . '.' . $ext ;
            $file->storeAs('public/attachments' , $logo);
            $project->logo = $logo;
        }

        if($request->hasFile('imgs')){
            $all_imgs = null;
            foreach ($request->imgs as $img) {
                $file_name = time() . $img->getClientOriginalName();
                $img->storeAs('public/attachments' , $file_name);

                if(is_null($all_imgs)){
                    $all_imgs .= $file_name;
                }else{
                    $all_imgs .= ',' . $file_name;
                }
            }

            $project->imgs = $all_imgs;
        }

        $project->location = $request->location;
        $project->price = $request->price;
        $project->sqft = $request->sqft;
        $project->bedrooms = $request->bedrooms;
        $project->kitchens = $request->kitchens;
        $project->bathrooms = $request->bathrooms;
        $project->garage = $request->garage;
        $project->garden = $request->garden;
        
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $file_name = 'file_project_' . time() . '.' . $ext ;
            $file->storeAs('public/attachments' , $file_name);
            $project->file = $file;
        }

        $project->save();

        return redirect(route('projects_data'));

    }

    public function destroy_project($id){
        $project = Projects::find($id);
        $project->delete();
        return redirect(route('projects_data'));
    }
}

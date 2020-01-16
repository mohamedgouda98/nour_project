<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forms;

class DataController extends Controller
{


    // Insert Data Fro Api ...
    public function insert_form(Request $request){
        
        $form =  new forms();
        $form->date = $request->date;
        $form->name = $request->name;
        $form->job = $request->job;
        $form->adress = $request->adress;
        $form->phone = $request->phone;
        $form->fixed_line = $request->fixed_line;
        $form->email = $request->email;
        $form->type = $request->type;
        $form->space = $request->space;
        $form->know = $request->know;
        echo $form->save();
    }

  
}

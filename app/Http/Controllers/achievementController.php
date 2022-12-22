<?php

namespace App\Http\Controllers;

use App\Models\achievements;
use Illuminate\Http\Request;

class achievementController extends Controller
{
   //

    function addAchievement(Request $request){

        $data = new achievements;

        
        $data->event_name=$request->get('event_name');
        $data->subtitle=$request->get('subtitle');
        $data->author = $request->get('author');
        $data->date=$request->get('date');
        $data->description=$request->get('description');

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/events'), $filename);
            
            $data['image'] = $filename;
            
        }
        $data->save();
    
         return redirect()->route('adachievement');
    }

}

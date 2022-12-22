<?php

namespace App\Http\Controllers;

use App\Models\Tournaments;
use Illuminate\Http\Request;

class tournamentController extends Controller
{

    function viewTournament(){
        $tournament=Tournaments::all();
        return view('admin.tournament',compact('tournament'));
    }
    //

    function addTournament(Request $request)
    {
        $data = new Tournaments;

        
        $data->sport_name=$request->get('sport');
        $data->event_date=$request->get('event_date');
        
        
        $data->event_date=$request->get('event_date');
        $data->description=$request->get('description');

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/events/sports'), $filename);
            
            $data['image'] = $filename;
            
        }
        $data->save();
        dd($data);
    
         return redirect()->route('adtournament');


    }
}

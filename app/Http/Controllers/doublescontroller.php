<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doubles;

class doublescontroller extends Controller
{
    public function store(Request $request){
        //dd($request::all());
        $doubles = new doubles;
        
        $this->validate($request,[
            'team1'=>'required',
            'team2'=>'required',
            'team1score'=>'required',
            'team2score'=>'required',

        ]);

        $doubles->team1=$request->team1;
        $doubles->team2=$request->team2;
        $doubles->team1score=$request->team1score;
        $doubles->team2score=$request->team2score;

        $doubles->save();
        
        $data=doubles::all();
        return view('doubles')->with('doubles',$data);
    }

    public function deletedouble($id){
        $doubles=doubles::find($id);
        $doubles->delete();
        return redirect()->back();

    }

    public function updatedoubleview($id){
        $doubles=doubles::find($id);
        return view('updatedouble')->with('doublesdata',$doubles);

    }

    public function updatedouble(Request $request){
        $id=$request->id;
        $team1=$request->team1;
        $team2=$request->team2;
        $team1score=$request->team1score;
        $team2score=$request->team2score;
        
        $data=doubles::find($id);

        $data->team1=$team1;
        $data->team2=$team2;
        $data->team1score=$team1score;
        $data->team2score=$team2score;

        $data->save();
        $datas=doubles::all();
        return view('doubles')->with('doubles',$datas);

    }
}

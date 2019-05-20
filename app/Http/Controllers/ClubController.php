<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubController extends Controller
{
   	public function getList()
    {
    	$club = Club::all();
    	return view('admin.Club.List',['club' => $club]); 
    }

    public function getAdd()
    {
 		
    	$club = Club::all();
    	return view('admin.Club.Add',['club'=> $club]);
    }
    public function postAdd(Request $request)
    {
        $this -> validate($request,[
            'name'=>'required',
            'location'=>'required',
            'establish'=>'required',
            ],[
            'name.required'=>'You have not entered club name',
            'location.required'=>'You have not entered location ',
            'establish.required'=>'You have not entered establish ',

            ]);
        if ($request -> hasFile('file')) 
        {

            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('upload/news', $filename);
            $club = new Club;
            $club -> name = $request -> name;
            $club-> location = $request -> location;
            $club-> establish = $request -> establish;
            $club -> logo = $filename;
            $club -> save();
        
        }
        
        return redirect ('admin/club/add') -> with('notifi','Add successfully');
    }
    public function getEdit($id)
    {
        
        $club = Club::find($id);
        return view('admin.Club.Edit',['club'=> $club]);
    }
    public function postEdit(Request $request, $id)
    {

        $club = Club::find($id);
        $this -> validate($request,[
            'name'=>'required',
            'location'=>'required',
            'establish'=>'required',
            ],[
            'name.required'=>'You have not entered club name',
            'location.required'=>'You have not entered location ',
            'establish.required'=>'You have not entered establish ',

            ]);
        if ($request -> hasFile('file')) 
        {

            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('upload/news', $filename);
            $club -> name = $request -> name;
            $club-> location = $request -> location;
            $club-> establish = $request -> establish;
            $club -> logo = $filename;
            $club -> save();
        
        }
        
        return redirect ('admin/club/list') -> with('notifi','Add successfully');
    }
    public function getIndex()
    {
        return view('admin.layout.index');
    }
    public function getDelete($id)
    {
        $club = Club::find($id);
        $club -> delete();
        return redirect ('admin/club/list') -> with('notifi','Delete successfully');
    }
}

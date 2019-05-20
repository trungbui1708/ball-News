<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;

class TournamentController extends Controller
{
   public function getList()
    {
    	$tournament = Tournament::all();
    	return view('admin.Tournament.List',['tournament'=>$tournament]);
    }

    public function getAdd()
    {
    	return view('admin.Tournament.Add');
    }

    public function postAdd(Request $request)
    {
    	$this-> validate($request,
        ['name'=> 'required|min:3|max:100|unique:tournaments,name','year'=>'required'],
    	[
    		'name.required'=> 'Please enter the tournament name',
    		'name.min'=> 'Length must be over 3 characters',
    		'name.max'=> 'Length is shorter than 100 characters',
            'name.unique'=>'Tournament name already exists',
            'year.required'=>'Please enter the year of tournament'

    ]);
    	$tournament = new Tournament;
        $tournament-> name = $request -> name;
    	$tournament-> year = $request -> year;
    	$tournament -> save();
    	return redirect ('admin/tournament/add') -> with('notifi','Thêm thành công');
    }
    public function getDelete($id)
    {
        $tournament = Tournament::find($id);
        $tournament -> delete();

        return redirect('admin/tournament/list') -> with('notifi','Delete successfully');
    }
     public function getEdit($id)
    {
        $tournament = Tournament::find($id);
        return view('admin.Tournament.Edit',['tournament' => $tournament]);
    }

    public function postEdit(Request $request, $id)
    {
        $tournament = Tournament::find($id);
        $this -> validate($request, 
            [
                'name' => 'required|min:3|max:100|unique:categories,name'
            ],
            [
                'name.required'=>'Please enter the category name',
                'name.min'=> 'Length must be over 3 characters',
                'name.max'=> 'Length is shorter than 100 characters',
                'name.unique'=>'Category name already exists',
                'year.required'=>'Please enter the year of tournament'
            ]);
        $tournament-> name = $request -> name;
        $tournament-> year = $request -> year;
        $tournament -> save();
        return redirect ('admin/tournament/list') -> with('notifi','Edit successfully');
    }    
}

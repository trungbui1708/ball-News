<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rank;
use App\Tournament;
use App\Club;


class RankController extends Controller
{
    public function getList()
    {
        
    	$club = \DB::table('clubs')->orderBy('id','desc')->get();
    	$tournament = Tournament::all();
    	$rank = Rank::all();
    	return view ('admin.Rank.List',['rank'=>$rank,'club'=>$club,'tournament'=>$tournament]);
    }
    public function getAdd()
    {
    	$club = Club::all();
    	$tournament = Tournament::all();
    	$rank = Rank::all();
    	return view ('admin.Rank.Add',['rank'=>$rank,'club'=>$club,'tournament'=>$tournament]);
    }
    public function postAdd(Request $request)
    {
    	$this -> validate($request,[
    		'club'=>'required',
    		'tournament'=>'required',
    		'number_match'=>'required',
    		'won'=>'required',
    		'lost'=>'required',
    		'draw'=>'required',
    		'goals_for'=>'required',
    		'goals_against'=>'required',
    		'goals_difference'=>'required',
    		'point'=>'required',
    		],[
    		'club.required'=>'Bạn chưa chọn câu lạc bộ',
    		'tournament.required'=>'Bạn chưa chọn giải đấu',
    		'number_match.required'=>'Bạn chưa nhập vào số trận đấu',
    		'won.required'=>'Bạn chưa nhập vào số trận thắng',
    		'lost.required'=>'Bạn chưa nhập vào số trận thua',
    		'draw.required'=>'Bạn chưa nhập vào số trận hòa',
    		'goals_for.required'=>' Bạn chưa nhập vào số bàn thắng',
    		'goals_against.required'=>' Bạn chưa nhập vào số bàn thua ',
    		'goals_difference.required'=>' Bạn chưa nhập vào hiệu số ',
    		'point.required'=>' Bạn chưa nhập vào điểm số ',

    		]);
    	$rank = new Rank;
    	$rank -> clubs_id = $request -> club;
    	$rank -> tournament_id = $request -> tournament;
    	$rank -> number_match = $request -> number_match;
    	$rank-> won = $request -> won;
    	$rank-> lost = $request -> lost;
    	$rank-> draw = $request -> draw;
    	$rank-> goals_for = $request -> goals_for;
    	$rank-> goals_against = $request -> goals_against;
    	$rank-> goals_difference = $request -> goals_difference;
    	$rank-> point = $request -> point;
    	$rank -> save();
    	return redirect ('admin/rank/add') -> with('notifi','Add successfully');
    }
    public function getEdit($id)
    {   

        $club = Club::all();
    	$tournament = Tournament::all();
    	$rank = Rank::find($id);
        return view ('admin.Rank.List',['rank'=>$rank,'club'=>$club,'tournament'=>$tournament]);
    }
    public function getDelete($id)
    {
        $rank = Rank::find($id);
        $rank -> delete();
        return redirect ('admin/rank/list') -> with('notifi','Delete successfully');
    }
}

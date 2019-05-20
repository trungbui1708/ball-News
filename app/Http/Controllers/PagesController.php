<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;
use App\Category;
use App\Tournament;
use App\Rank;
use App\Club;
use App\Comment;

class PagesController extends Controller
{
    public function __construct(){
        $category = Category::all();
        $tournament = Tournament::all();
        $rank = Rank::all();
        $club=Club::all();
        view()->share('category',$category);
        view()->share('tournament',$tournament);
        view()->share('rank',$rank);
        view()->share('club',$club);
    }
    public function index()
    {
        $news =\DB::table('News')->orderBy('id','desc')->get();
    	return view('index.Page.index',['news'=>$news]);
    }
    public function news($id)
    {	
        $comments = Comment::all();
        $news = News::find($id);
    	return view('index.Page.news',['news'=>$news,'comments'=>$comments]);
    }
    public function list_news($id)
    {
        $news =\DB::table('News')->where('category_id', $id)->orderBy('id','desc')->get();
        return view('index.Page.list-news',['news'=>$news]);
    }
    public function ranking()
    { 
        return view('index.Page.ranking');
    }
    public function postComment($id,Request $request)
    {
        $this -> validate($request,[
            'name'=>'required',
            'comment'=>'required'
            ],[
            'name.required'=>'Vui lòng nhập tên',
            'comment.required'=>'Vui lòng nhập nội dung bình luận',
            ]);
            $news_id=$id;
            $news=News::find($id);
            $comments = new Comment;
            $comments-> name = $request -> name;
            $comments-> comment = $request -> comment;
            $comments -> save();
            return redirect ('admin/news/list') -> with('notifi','Add successfully');
        
    }
}

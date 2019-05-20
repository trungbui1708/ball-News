<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Image;
class NewsController extends Controller
{
    public function getList()
    {
    	$news =\DB::table('News')->orderBy('id','desc')->get();
        $category=Category::all();
    	return view('admin.News.List',['news' => $news]); 
    }

    public function getAdd()
    {
        
    	$category = Category::all();
    	return view('admin.News.Add',['category'=> $category]);
    }

    public function postAdd(Request $request)
    {
    	$this -> validate($request,[
    		'category'=>'required',
    		'tittle'=>'required|min:3|unique:news,tittle',
    		'author'=>'required|min:3',
    		'description'=>'required|min:3',
    		'content'=>'required|min:3'
    		],[
    		'category.required'=>'Bạn chưa chọn thể loại',
    		'tittle.required'=>'Yêu cầu điền vào tiêu đề',
    		'tittle.min'=>'Tiêu đề ít nhất 3 ký tự',
    		'tittle.unique'=>'Tiêu đề đã tồn tại',
    		'description.required'=>'Yêu cầu nhập vào mô tả',
    		'description.min'=>'Mô tả ít nhất 3 ký tự',
    		'author.required'=>'Vui lòng nhập vào tên tác giả',
    		'author.min'=>'Tác giả cần ít nhất 3 ký tự',
    		'content.required'=>'Yêu cầu nhập vào nội dung',
    		'content.min'=>'Nội dung nhập vào ít nhất 3 ký tự'
    		]);
        if ($request -> hasFile('file')) 
        {

            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('upload/news', $filename);
            $news = new News;
            $news -> category_id = $request -> category;
            $news-> tittle = $request -> tittle;
            $news-> description = $request -> description;
            $news-> author = $request -> author;
            $news-> content = $request -> content;
            $news-> image = $filename;
            $news -> save();
        
        }
    	return redirect ('admin/news/list') -> with('notifi','Add successfully');
    }
    public function getEdit($id)
    {   
        $category = Category::all();
        $news = News::find($id);
        return view ('admin.News.Edit',['news' => $news, 'category'=>$category]);
    }
    public function postEdit(Request $request, $id)
    {
            $news = News::find($id);
           $this -> validate($request,[
            'category'=>'required',
            'tittle'=>'required|min:3',
            'author'=>'required|min:3',
            'description'=>'required|min:3',
            'content'=>'required|min:3'
            ],[
            'category.required'=>'Bạn chưa chọn thể loại',
            'tittle.required'=>'Yêu cầu điền vào tiêu đề',
            'tittle.min'=>'Tiêu đề ít nhất 3 ký tự',
            'tittle.unique'=>'Tiêu đề đã tồn tại',
            'description.required'=>'Yêu cầu nhập vào mô tả',
            'description.min'=>'Mô tả ít nhất 3 ký tự',
            'author.required'=>'Vui lòng nhập vào tên tác giả',
            'author.min'=>'Tác giả cần ít nhất 3 ký tự',
            'content.required'=>'Yêu cầu nhập vào nội dung',
            'content.min'=>'Nội dung nhập vào ít nhất 3 ký tự'
            ]);
        
        if ($request -> hasFile('file')) 
        {

            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('upload/news', $filename);
            $news -> category_id = $request -> category;
            $news-> tittle = $request -> tittle;
            $news-> description = $request -> description;
            $news-> author = $request -> author;
            $news-> content = $request -> content;
            $news-> image = $filename;
            $news -> save();
        }
        return redirect ('admin/news/list') -> with('notifi','Cập nhật thành công');
    }
    public function getDelete($id)
    {
        $news = News::find($id);
        $news -> delete();
        return redirect ('admin/news/list') -> with('notifi','Xóa thành công');
    }

}

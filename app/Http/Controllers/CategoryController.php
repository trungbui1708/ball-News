<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function getList()
    {
    	$category = Category::all();
    	return view('admin.Category.List',['category'=>$category]);
    }

    public function getAdd()
    {
    	return view('admin.Category.Add');
    }

    public function postAdd(Request $request)
    {
    	$this-> validate($request,
    	['name'=> 'required|min:3|max:100|unique:categories,name'],
    	[
    		'name.required'=> 'Please enter the category name',
    		'name.min'=> 'Length must be over 3 characters',
    		'name.max'=> 'Length is shorter than 100 characters',
            'name.unique'=>'Category name already exists'

    ]);
    	$category = new Category;
    	$category-> name = $request -> name;
    	$category -> save();
    	return redirect ('admin/category/add') -> with('notifi','Thêm thành công');
    }

    public function getEdit($id)
    {
    	$category = Category::find($id);
        return view('admin.Category.Edit',['category' => $category]);
    }

    public function postEdit(Request $request, $id)
    {
        $category = Category::find($id);
        $this -> validate($request, 
            [
                'name' => 'required|min:3|max:100|unique:categories,name'
            ],
            [
                'name.required'=>'Please enter the category name',
                'name.min'=> 'Length must be over 3 characters',
                'name.max'=> 'Length is shorter than 100 characters',
                'name.unique'=>'Category name already exists'
            ]);
        $category-> name = $request -> name;
        $category -> save();
        return redirect ('admin/category/list') -> with('notifi','Edit successfully');
    }    
    public function getDelete($id)
    {
        $category = Category::find($id);
        $category -> delete();

        return redirect('admin/category/list') -> with('notifi','Delete successfully');
    }
}

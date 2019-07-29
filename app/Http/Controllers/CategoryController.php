<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;



class CategoryController extends Controller
{


    public function index(){
        $categories = Category::all()->sortByDesc('id');

        return view('admin.category.index')->withCategories($categories);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:categories|max:255'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('success', 'Category was added successfully');
        return redirect('/admin/category');

    }
}

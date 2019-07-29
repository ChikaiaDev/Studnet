<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Session;
use Image;
use App\Category;
use App\like;
use Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all()->sortByDesc('created_at');
        $categories = Category::all();
        return view('post.index')->withPosts($posts)->withCategories($categories);
    }

     public function create()
    {
        $posts=Post::all()->sortByDesc('created_at');
        $Categories= Category::all();
        return view('post.create')->withPosts($posts)->withCategories($Categories);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:255',
            'image'=>'nullable|image',
            'body'=>'required|max:255'

        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;



        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('/Qimages/'.$filename);
            Image::make($image)->resize(800,600)->save($location);
            $post->image = $filename;

        }
        $post->save();


        
         return redirect('/post')->with('success','Your question was successfuly uploaded');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        $categories= Category::all();
        return view ('post.show')->withPost($post)->withCategories($categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        if(Auth::user()->id != $post->user_id){
            abort(404);
        }

        if($post == null){
             abort(404);
        }
        $categories= Category::all();
        return view('post.edit')->withPost($post)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $post = Post::find($id);
        if(Auth::user()->id != $post->user_id){
            abort(404);
        }

        if($post == null){
             abort(404);
        }
          $this->validate($request, [
            'title'=>'required|max:255|',
            'image'=>'nullable|image',
            'body'=>'required|max:255'

        ]);
       
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;

        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('/Qimages/'.$filename);
            Image::make($image)->resize(800,600)->save($location);
            if($post->image !=null){
                Storage::delete($post->image);   
            }
            $post->image = $filename;

        }
        $post->save();


        
         return redirect()->back()->with('success','Your question was updated successfuly');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
         if(Auth::user()->id != $post->user_id){
            abort(404);
        }

        if($post == null){
             abort(404);
        }
        
        if($post->image !=null){
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect()->back()->with('success','Your post has been deleted');
    }
}

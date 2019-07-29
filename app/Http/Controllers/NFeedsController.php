<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NFeed;
use Session;
Use Auth;
use App\Admin;

class NFeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
      public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $nfeeds = NFeed::all();
        return view('news.index')->with('nfeeds', $nfeeds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'department'=>'required'
        ]);
        $new = new Nfeed;
        $new->title = $request->input('title');
        $new->body = $request->input('body');
        $new->department = $request->input('department');
        $new->user_id= Auth::user()->id;
        $new->save();

        return redirect('/news')->with('success','New NewsFeed Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = NFeed::find($id);
        return view('news.show')->with('new', $new);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = NFeed::find($id);
        return view('news.edit')->with('new',$new);

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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'department'=>'required'
        ]);
        $new = Nfeed::find($id);
        $new->title = $request->input('title');
        $new->body = $request->input('body');
        $new->department = $request->input('department');
        $new->save();

        return redirect('/news')->with('success','New NewsFeed Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = NFeed::find($id);
        $new->delete();
        return redirect('/news')->with('success','NewsFeed Deleted');
    }
}

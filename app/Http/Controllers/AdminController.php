<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home');
    }
    public function category()
    {
        return view('admin/category/index');
    }
    public function news()
    {
        return view('admin/news/create');
    }
}

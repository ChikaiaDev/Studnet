@extends('layouts.admin')
@section('content')
    <div class="container">
        <br>
    <div class="col-sm-6 col-sm-offset-3">
           @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                    {{$post->title}}  
                    <div class="badge">
                    {{$post->category->name}}
                    </div>
                    </div>
                    </div>
                 <div class="panel-body">
                    {{$post->body}}
                    @if($post->image != null)
                        <img src="/Qimages/{{$post->image}}" width="100%" height="250" />
                    @endif
                    <br />
                    
                    </div>

           
            <div class="panel-footer"  data-postid="{{$post->id}}">
                @foreach(Auth::user()->likes as $like)
                    @if($like->post_id == $post->id)
                    @if($like->like)
                     <a href="#" class="btn btn-link like active-like">like</a>
                     <a href="#" class="btn btn-link like">dislike</a>
                     @else 
                        <a href="#" class="btn btn-link like ">like</a>
                        <a href="#" class="btn btn-link like active-like">dislike</a>
                    @endif
                    @else
                    <a href="#" class="btn btn-link like ">like</a>
                    <a href="#" class="btn btn-link like ">dislike</a>
                    
                    @endif

                @endforeach
                <a href="#" class="btn btn-link">comment</a>                
            </div>
             </div>
        @endforeach
    </div>
    </div>
@endsection
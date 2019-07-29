@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <h1>News Feed</h1>
                <h3>{{$new->title}}      <div class="badge pull-right">
                                      For :{{$new->department}}
                                    </div></h3>
                <div>
                    <p>{{$new->body}}</p>
                </div>
                <hr>
                <small>Uploaded on : {{$new->created_at->diffForHumans()}}</small>
                <hr>
                <!-- <a href="/news/{{$new->id}}/edit" class="btn btn-default">Edit</a>
              {!! Form::open(['action'=>['NFeedsController@destroy',$new->id],'method'=>'POST','class'=>'pull-right']) !!}
                    {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-warni ng'])}}
                {!! Form::close() !!}
                -->
            </div>
        </div>
    </div>




@endsection

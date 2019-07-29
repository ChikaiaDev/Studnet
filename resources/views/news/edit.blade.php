@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create NewsFeed</h1>
                {!! Form::open(['action' => ['NFeedsController@update', $new->id],'method'=> 'POST']) !!}
                <div class="form-group">
                    {{Form::Label('title', 'Title')}}
                    {{Form::text('title',$new->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::Label('body', 'Body')}}
                    {{Form::textarea('body',$new->body,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Body'])}}
                </div>

                <div class="form-group dropdown">
                    {{Form::select('department',[
                        'School Of Computing' => ['Computer Science' => 'computer Science','Computer Technology' => 'Computer Technology', 'IT' => 'IT'],
                        'School Of Maths' => ['Applied statistics' => 'Applied Statistics', 'Actuarial' => 'Actuarial Sciences'],
                    ])}}

                </div>

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('update',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>



@endsection

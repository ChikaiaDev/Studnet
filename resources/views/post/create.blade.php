@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-9">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{Session::get('success')}}
    </div>
    @endif
        <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <br>
        <div class="panel panel-default">
    
            <div class="panel-body">

            <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                <input type="text" name="title" class="form-control" placeholder="enter the title of your question">
                    @if($errors->has('title'))
                        <small class="text-danger">{{$errors->first('title')}}</small>
                        @endif
                </div>
            
                <input type="file" class="btn btn-default" name="image">
           <br>
              <div class="form-group {{$errors->has('body') ? 'has-error' : ''}}" >  
                <textarea name="body" rows="8" cols="80" class="form-control" placeholder="enter your question">
                </textarea>
                @if($errors->has('body'))
                        <small class="text-danger">{{$errors->first('body')}}</small>
                        @endif
                
                </div>
                <div class="form-group">
                    
                    <select class="form-control" name="category">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Post" class="btn btn-primary">

            </div>
        </div>
        </form>
        </div>
    

        
        </div>
    
        <div class="col-sm-3">
            <br>


        </div>
        </div>
</div>


@endsection

@extends('layouts.admin')
@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{Session::get('success')}}
            </div>
        @endif
        <div class="col-sm-6">
            @foreach($categories as $category)
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{$category->name}}

                    </div>

                </div>
            @endforeach
        </div>


        <div class="col-sm-6">
        <div class="well">
            <form  method="post">
            {{ csrf_field()}}
                <div class="form-group {{$errors->has('name') ? 'has-error' : '' }}">
                    <lable for="name control-lable">Name</lable>
                    <input type="text" class="form-control" id="name" placeholder="enter new category" name="name">
                    @if($errors->has('name'))
                    <small class="text-danger">{{$errors->first('name')}}</small>
                    @endif
                </div>
                <input type="submit" value="Submit" class="btn btn-success btn-block">
            </form>
        </div>


        </div>


    </div>


@endsection
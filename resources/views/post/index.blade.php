@extends('layouts.app')

@section('content')
 <div class="offcanvas-wrapper">
      <!-- Page Title-->


     <div class="container padding-bottom-3x mb-2">
        <div class="row">

            <!--
    <div class="col-sm-9">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{Session::get('success')}}
    </div>
    @endif
       

        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                    {{$post->title}}  
                    <div class="badge">
                    {{$post->category->name}}
                    </div>
                   
                    <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <span class="caret"></span>
                                </a>

                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('post.show',[$post->id])}}">show post</a></li>
                                    <li><a href="{{route('post.edit',[$post->id])}}">Edit</a></li>
                                    <li>
                                        <a href="#" onclick="document.getElementById('delete').submit()" >Delete Post</a>
                                        {!!Form::open(['method'=>'DELETE', 'id'=>'delete','route'=>['post.delete',$post->id]])!!}
                                        {!!Form::close()!!}
                                    </li>
                            </ul>
                    </li>
                    </div>
                    </div>
                 <div class="panel-body">
                    {{$post->body}}
                    @if($post->image != null)
                        <img src="/Qimages/{{$post->image}}" width="100%" height="250" />
                    @endif
                    <br />
                    
                    </div>

           
            <div class="panel-footer" data-postid="{{$post->id}}">
                @foreach(Auth::user()->likes as $like)
                    @if($like->post_id == $post->id)
                    @if($like->like)
                     <a href="#" class="btn btn-link like active-like">like</a>
                     <a href="#" class="btn btn-link like">dislike</a>
                     @else 
                        <a href="#" class="btn btn-link like ">like</a>
                        <a href="#" class="btn btn-link like active-like">dislike</a>
                    @endif
                    
                    @endif

                @endforeach
                
                <a href="{{route('post.show',[$post->id])}}" class="btn btn-link">comment</a>                
            </div>
             </div>
        @endforeach
        </div>
        <div class="col-sm-3">
        @foreach($categories as $category)
            <a href="#" class="badge">{{$category->name}}</a>
        @endforeach
        </div>

        </div>
    </div>

    -->


    <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <div class="col-md-12 ">

              <div class="card">
                  <table class="table" class="table-borderless">
                  <div class="card-header">
                      <thead class="thead-dark">
                      <tr>
                          <th scope="col">Topic</th>
                          <th scope="col">Category</th>
                      </tr>
                      </thead>

                  </div>
                  <div class="card-body">
                      @foreach($posts as $post)
                          <tbody>
                          <tr>
                              <th scope="row">
                                  <p> <h4 class="card-title post-title"><a href="{{route('post.show',[$post->id])}}">  {{$post->title}} </a></h4></p>
                                  <p>Posted by: {{$post->user->username}} On: {{$post->created_at->diffForHumans()}}</p>
                              </th>
                              <td>{{$post->category->name}}</td>

                          </tr>
                          </tbody>
                      @endforeach

                  </div>

              </table>
              </div>









            </div>

        </div>

        </div>
        </div>
     </div>
 </div>



@endsection

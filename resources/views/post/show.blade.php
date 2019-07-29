@extends('layouts.app')

@section('content')
    <div class="offcanvas-wrapper">
        <!-- Page Title-->


        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="row">
                <div class="row">
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <ul>
                                        {{$error}}
                                    </ul>


                            @endforeach

                        </div>
                    @endif

                </div>
                <!-- Content-->
                <div class="col-xl-9 col-lg-8 ">
                    <!-- Post-->
                    <div class="single-post-meta">
                        <div class="column">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="glyphicon glyphicon-user">  </i> Posted by: {{$post->user->username}} 
                                    <div class="badge pull-right">
                                        {{$post->category->name}}
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                            </div>





                        </div>
                        <div class="column">
                            <a href="#" class="list-group-item">
                                <i class="glyphicon glyphicon-time"></i> {{$post->created_at->diffForHumans()}}
                                </span>
                            </a>
                            <br>
                        </div>
                    </div>
                    <figure>
                        @if($post->image != null)
                            <img src="/Qimages/{{$post->image}}" class="img-rounded responsive" style="height: 450px; width: 750px;"/>
                        @endif
                    </figure>


                    <h2 class="padding-top-2x">{{$post->title}}</h2>
                    <p>{{$post->body}}<p/>
                    

                    <!-- Comment Form-->


                    <!-- like button Form-->
                  
                    <div data-postid="{{$post->id}}">
                        
                                <button href="#" class="btn  btn-link like " >Like</button>
                                <button href="#" class="btn btn-link like" >Dislike</button>
                         
                        

                    </div>
                    
                  
               



                    <!-- comment    -->

                    
                        
                        
                        <!-- Comments-->

                       

                </div>

          





            <!-- Sidebar          -->
                <div class="col-xl-3 col-lg-4 ">
                   
                    <div class="well well-md">
                      <h3 style="text-center">Whats on your mind?</h3>
                   
                     <form class="row" action="{{ url('/comment')}}" method="POST">
                            {{ csrf_field()}}
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="col-12">
                                <div class="input-group">
                                    
                                    <input type="text" name="comment" class="form-control form-control-rounded" id="comment" placeholder="Say a word or two..." required>
                                    <span class="input-group-btn">
                                    <button class="btn btn-pill btn-primary" type="submit" value="Comment">Post Comment</button>
                                    </span>
                                </div>
                            </div>

                        </form>
                        <hr>
                          @foreach($post->comments as $comment)
                    <div class="card">
                    <div class="card-header">
                 <h5> <strong>{{$comment->user->username}} Says:</strong>
                  <div class="badge pull-right"><i class="glyphicon glyphicon-time"></i>
                                          {{$comment->created_at->diffForHumans()}}
                                    </div>
                                
                    </div>
                    </h5>
  
  <div class="card-body">
    
    <p class="card-text"> {{$comment->comment}}.</p>
   
  </div>
</div>
<br>
@endforeach


                    </div>

                   
                </div>
            </div>
        </div>
    </div>


@endsection

<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 50px;">
                @guest
                    <div class="panel-heading">
                        You need to be logged in
                    </div>
                    <div class="panel-body">
                        <h3>Nothing to show here</h3>
                    </div>

                    @else

                <div class="panel-heading">Welcome home {{Auth::user()->username}}   <img src="{{Auth::user()->profile_picture}}" alt=""></div>


                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   
                    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">Your Posts</a></li>
    <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments</a></li>

     <li role="presentation"><a href="#likes" aria-controls="likes" role="tab" data-toggle="tab">Liked Posts</a></li>
  </ul>

  <!-- Tab panes -->
  <br>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="posts">
           You have : {{Auth::user()->posts()->count()}} Post(s)
 
            @foreach(Auth::user()->posts as $post)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                {{$post->title}}
                                   
                                </div>
                                </div>
                            <div class="panel-body">
                                {{$post->body}}
                                 <div class="badge">
                    {{$post->category->name}}
                    </div>
                                
                                </div>
                        </div>
                    @endforeach
       
    
    </div>
    
    <div role="tabpanel" class="tab-pane" id="comments">
        @foreach (Auth::user()->comments as $comment)
            
                    <div class="col-sm-9">
                        {{$comment->comment}}
                        </div>
                    <div class="col-sm-3">
                        <small><a  href="{{ route('post.show', [$comment->post->id])}}" class="btn btn-sm btn-info" ><span class="glyphicon glyphicon-eye-open"> View Post</span></a>
                        </small>
                    </div>
        <br>
                 <hr>

        @endforeach
    </div>


     <div role="tabpanel" class="tab-pane" id="likes">
        @foreach(Auth::user()->likes as $like)
            @if($like->like)
                

            @endif
        @endforeach
    </div>
   
  </div>


</div>
                </div>
                    @endguest
            </div>
        </div>
    </div>
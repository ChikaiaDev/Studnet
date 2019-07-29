@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10-offset-1">

            <div class="panel panel-default">
                @guest
                    <div class="panel-heading">
                        You need to be logged in
                    </div>
                    <div class="panel-body">
                        <h3>Nothing to show here</h3>
                    </div>

                @else

                <div class="panel-heading">
                    Welcome home {{Auth::user()->username}}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#your-posts" data-toggle="tab">My Posts</a>
                        </li>
                        <li><a href="#comments" data-toggle="tab">Comments</a>
                        </li>
                        <li><a href="#liked-posts" data-toggle="tab">Liked Posts</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="your-posts">
                            <h4>You have : </h4>
                           <p>{{Auth::user()->posts()->count()}} Post</p>

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
                        <div class="tab-pane fade" id="comments">
                            <h4>Comments Tab</h4>
                            @foreach (Auth::user()->comments as $comment)

                                <div class="col-sm-9">
                                    {{$comment->comment}}
                                </div>
                                <div class="col-sm-3">
                                    <small><a  href="{{ route('post.show', [$comment->post->id])}}" class="btn btn-sm btn-info" ><div class="badge"> View Post</div></a>
                                    </small>
                                </div>
                                <br>
                                <hr>

                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="liked-posts">
                            <h4>Likes Tab</h4>
                            @foreach(Auth::user()->likes as $like)
                                @if($like->like)


                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <!-- /.panel-body -->

            </div>

            <!-- /.panel -->
        </div>
        @endguest
</div>
@endsection

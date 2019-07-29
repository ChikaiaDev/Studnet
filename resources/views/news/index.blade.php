@extends('layouts.app')

@section('content')
   <div class="container" style="background-color: rgb(247, 247, 247);">
       <div class="row">
           <div class="col-md-8 col-md-offset-2">
              @if(count($nfeeds)>0)
                  @foreach($nfeeds as $nfeed)
                  <div class="card">
                    <div class="card-header">
                 <h5> <strong><a href="/news/{{$nfeed->id}}">{{$nfeed->title}} </a></strong>
                  <div class="badge pull-right"><i class="glyphicon glyphicon-time"></i>
                                          {{$nfeed->created_at->diffForHumans()}}
                                    </div>
                                
                    </div>
                    </h5>
  
  <div class="card-body">
    
    <p class="card-text">{{$nfeed->body}}.</p>
   
  </div>
</div>
                      <br>
                      <hr>

                      @endforeach

                  @else
               <p>No News Available</p>
               @endif
           </div>
       </div>
   </div>




@endsection

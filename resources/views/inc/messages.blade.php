@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-warning">
        {{$error}}
            <a href="#" class="close" data-dismiss="alert">&times;</a>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
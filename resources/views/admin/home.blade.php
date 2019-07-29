@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 50px;">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                   You are logged in as an admin
                    <ul>
                    <li><a href="/admin/category/">Create Category</a></li>
                    </ul>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

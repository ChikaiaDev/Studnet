@extends('layouts.app2')
@section('page-header')
        <div class="page-header">
        <h1>Welcome to News feed</h1>
        <p>An interactive new way to know whats happening in your school</p>

        <p>
          <a class="btn btn-lg btn-success" href="/post" role="button">Join the discussion &raquo;</a>
        </p>
      </div>
      @endsection
@section('content')

    <section class="container padding-bottom-2x">
     <h2 align="center">Our Products and Services</h2>
     <hr/>
     <br>
     <br>

        <div class="row">
       
          <div class="col-md-4 col-sm-6 text-center "><img src="/img/csIcon.png" width="135" height="105" class="img-circle"/>
            <h6>Community sharing</h6>
            <p class="text-muted margin-bottom-none">Keep in touch with your community. Participate and contribute as a team member in solving problems on a variety of topics that concern you</p>
          </div>
          <div class="col-md-4 col-sm-6 text-center "><img src="/img/diii.png" width="155" height="105" class="img-circle"/>
            <h6>Discussions </h6>
            <p class="text-muted margin-bottom-none">Need help with an assignment? Check out help documents on a variety of topics online posted by other students.</p>
          </div>
          <div class="col-md-4 col-sm-6 text-center "><img src="/img/cnews.png" width="150" height="105" class="img-circle"/>
            <h6>News feed</h6>
            <p class="text-muted margin-bottom-none">Get updated with the latest news as soon as they are posted. We look at different aspects to ensure we feed you with news most relevant to you.</p>
          </div>
          
        </div>
      </section>
@endsection

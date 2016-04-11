  @extends('login')
  
  @section('head')
    <link rel="stylesheet" type="text/css" href="/css/studentlogin.css">
  @stop

  @section('nav')
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Library System</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="//localhost:8000">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <br><br><br><br>
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">


    {!! Form::open(['route'=>'student.doLogin']) !!}
      {!! csrf_field() !!}
      <h1>Sign In <small>Imagine those books just waiting for you!</small></h1>
      <hr class="colorgraph">
      <div class="row"> 

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">  
          <!-- we will use either the username or the emaill of the student -->
            {!!Form::text('id',null,['class'=>'form-control input-lg','placeholder'=>'Student Number'])!!}
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            {!!Form::password('password',array('class'=>'form-control input-lg','placeholder'=>'Password'))!!}
          </div>
        </div>
        
      </div>
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-12">
        {!!Form::submit('Sign in',['class'=>'btn btn-success btn-block btn-lg'])!!}
        </div>
        
      </div>
    {!!Form::close()!!}

    <br><br>
    @include('errors.error')
    @include('errors.status')
    <br>
    <center>
    <blockquote><p>"The more you <b>read</b> the more <b>things</b> you know. <br>The more that you <b>learn</b> the more <b>places</b> you'll go."</p><p><small>Dr. Seuss</small></p></blockquote>
  </div>

  @stop
  
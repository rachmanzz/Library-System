@extends('login')
  
  @section('nav')
    <div class="container">
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul> 
        </div>
      </div>
    </nav>

    <br><br><br><br><br><br>
      {!!Form::open(['route'=>'admin.doLogin','class'=>'form-signin'])!!}
        <h2 class="form-signin-heading">Hey there!</h2>
        {!!Form::text('username',null,['class'=>'form-control', 'placeholder'=>'Username', 'required'])!!}
        {!!Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password','required'))!!}
        {!!Form::submit('Sign in',['class'=>'btn btn-primary form-control'])!!}
      {!!Form::close()!!}

      <br><br>

      @include('errors.error')

    @if(session('status'))
      <div class="alert alert-success">
        <center>{{session('status')}}</center>
      </div>
    @endif

  @stop

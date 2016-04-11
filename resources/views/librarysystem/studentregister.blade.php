@extends('login')

  @section('head')
    <link href="/css/studentlogin.css" rel="stylesheet">

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
            <a class="navbar-brand" href="//localhost:8000">Library System</a>
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
    {!! Form::open(['route'=>'student.doRegister']) !!}

      <h2>Register Now <small>It's free and always will be.</small></h2>
      <hr class="colorgraph">

      <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">  
            {!! Form::text('id',null,['class'=>'form-control input-lg','placeholder'=>'Student Number']) !!}
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
              {!! Form::text('firstName',null,['class'=>'form-control input-lg','placeholder'=>'First name']) !!}
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            {!! Form::text('lastName',null,['class'=>'form-control input-lg','placeholder'=>'Last name']) !!}
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            {!! Form::password('password',array('class'=>'form-control input-lg','placeholder'=>'Password')) !!}
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            {!! Form::password('passwordConfirmation',array('class'=>'form-control input-lg', 'placeholder'=>'Confirm Password')) !!}
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
           By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a>
        </div>
      </div>
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          {!! Form::submit('Register',['class'=>'btn btn-primary btn-block btn-lg']) !!}
        </div>

        <div class="col-xs-12 col-md-6">
          <!-- {!! Form::submit('Sign in',['class'=>'btn btn-success btn-block btn-lg']) !!} -->
          <a href="//localhost:8000/student/login" class="btn btn-success btn-block btn-lg">Sign in</a>
        </div>
      </div>

    {!!Form::close()!!}

    <br><br>

    @include('errors.error')

  </div>
</div>
  @stop

<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <title>Borrow Books</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">

    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.bootstrap.js"></script>
    <link href="/css/jumbotron.css" rel="stylesheet">
  
  </style>
        
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#example').dataTable();      
      } );
    </script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
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
          {!! Form::open(['route'=>'admin.logout','class'=>'navbar-form navbar-right']) !!}
            <button type="submit" class="btn btn-danger">Logout</button>
          {!! Form::close() !!}
        </div> 
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello,{{Auth::user()->username}}</h1>
        <p></p>
        <p><a class="btn btn-primary btn-lg" href="//localhost:8000/admin/home" role="button">Back to menu &raquo;</a></p
      </div>
    </div>
    </div>

<div class="container">
@include('errors.error')
<div class="row">
<div class="col-lg-6 col-md-7 col-sm-9">

  <h4 style="border-bottom: 1px solid #c5c5c5;">
    <i class="glyphicon glyphicon-user">
    </i>
    Add Books sample form
  </h4>
  <div style="padding: 20px;" id="form-olvidado">
@include('errors.status')
  {!! Form::open(['route'=>['admin.doAddBooks', Auth::user()->username]]) !!}
    {!! csrf_field() !!}
    <h4 class="">
      Add books now
    </h4>
      <fieldset>
        <div class="form-group input-group">
          <span class="input-group-addon"></span>
          <input class="form-control" placeholder="Author" name="author" type="text" required />
        </div>


        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-font">
            </i>
          </span>
          <input class="form-control" placeholder="Book Title" name="title" type="text" required />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-calendar">
            </i>
          </span>
          <input class="form-control" placeholder="Year" name="year" type="text" required />
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-font">
            </i>
          </span>
          <input class="form-control" placeholder="Copies" name="stock" type="text" required />
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-block" value="Add to shelf" placeholder="Add to shelf" >
          <p class="help-block">
            <a class="pull-right text-muted" href="#" id="olvidado"><small>Forgot your password?</small></a>
            <a class="pull-left text-muted" href="#" id="olvidado2"><small>Signup!</small></a>
          </p>
        </div>
      </fieldset>
    {!!Form::close()!!}
  </div>

  <div style="display: none;" id="form-olvidado1">
    <h4 class="">
      Forgot your password?
    </h4>
    <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
      <fieldset>
        <span class="help-block">
          Email address you use to log in to your account
          <br>
          We'll send you an email with instructions emto choose a new password.
        </span>
        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
          <input class="form-control" placeholder="Email" name="email" type="email" required="">
        </div>
        <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
          Continue
        </button>
        <p class="help-block">
          <a class="text-muted" href="#" id="acceso1"><small>Account Access</small></a>

        </p>
      </fieldset>
    </form>
  </div>
<div style="display: none;" id="form-olvidado2">
    <h4 class="">
      Welcome!
    </h4>
    <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
      <fieldset>
        <span class="help-block">
          Signup page
          <br>
          Please sign up and start!
        </span>
        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
          <input class="form-control" placeholder="Email" name="email" type="email" required="">
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
          <input class="form-control" placeholder="Password" name="password_new" type="password" required="">
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
          <input class="form-control" placeholder="Repeat Password" name="password_new_2" type="password" required="">
        </div>

        <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
          Continue
        </button>
        <p class="help-block">
          <a class="text-muted" href="#" id="acceso2"><small>Account Access</small></a>
        </p>
      </fieldset>
    </form>
  </div>
</div>
</div>
</div> 
          <hr>
      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->

    <!-- temporary error holder -->
    <!-- end temporary error holder -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="addbooks.js"></script>
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/logo.ico">

    <title>Student | Print Receipt</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/borrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

<div class="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
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
          {!! Form::open(['route'=>'admin.logout','class'=>'navbar-form navbar-right']) !!}
            <a class="btn btn-primary " href="//localhost:8000/admin/penalty" role="button">Back to penalty</a>
            <button type="submit" class="btn btn-danger">Logout</button>
          {!! Form::close() !!}
        </div>
      </div>
    </nav>
    <header class="header">
        <div class="container">
          <div class="row">
                <div class="content">
                  <div class="pull-middle">
                  <center><h1>De Ocampo Memorial College</h1></center>
                  <center><p>3222 Pureza Ramon Magsaysay Boulevard, 631 Santa Mesa, Manila, 1016 Metro Manila</p></center>
                    <center><h1 class="page-header">{{$user->student_id}}</h1></center>
                    <center><p class="lead"><span class="glyphicon glyphicon-user"></span>First Name:&nbsp;&nbsp;&nbsp;{{$user->firstName}}</p></center>
                    <center><p class="lead"><span class="glyphicon glyphicon-list-alt"></span>Last Name: {{$user->lastName}}</p></center>
                    <center><p class="lead">Penalty:<span class="glyphicon glyphicon glyphicon-rub"></span>{{$user->penalty}}</p></center>
                    </br>
                    <center><h3>{{$adminName}}</h3><p>Librarian in charge</p></center>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><input type="button" onClick="window.print()" class="btn btn-success btn-lg" value="Print Receipt"></center>
                </div>
            </div>
          </div>
        </div>
    </header>
    
    <footer class="footer text-center">
        <div class="container">
            <small>© Copyright 2016. Crafted with love by <a href="https://www.twitter.com/YongHyunnn">@YongHyunnn</a></small>
        </div>
    </footer>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>

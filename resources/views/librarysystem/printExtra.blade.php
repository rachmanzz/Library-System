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

    <title>Admin | Print Penalty</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">

    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.bootstrap.js"></script>


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
          <a class="navbar-brand" href="//localhost:8000">Library System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <button type="submit" class="btn btn-danger">Logout</button>
          </form>
        </div>
      </div>
    </nav>

    {!!Form::open(['route'=>'student.postBorrowExtra'])!!}
    <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="content">
                  <div class="pull-middle">
                    <h1 class="page-header">{{$book->title}}</h1>
                    <p class="lead"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;{{$book->author}}</p>
                    <p class="lead"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;{{$book->genre}}</p>
                    <p class="lead"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;{{$book->publisher}}</p>
                    @if($checkRecord == 0 || $checkRecord == '')
                    <p class="lead"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;&nbsp;{{$book->stock}} books waiting for you!</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!!Form::submit('Borrow',['class'=>'btn btn-success btn-lg'])!!}
                    @elseif($checkRecord == 1)
                    <div class="alert alert-info"><center><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp; You already requested this book.<br>Kindly proceed to the librarian to claim the book after approved.</center></div>
                    @elseif($checkRecord == 2)
                    <div class="alert alert-danger"><center><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; You are still not returning the book. So how can you borrow it?</center></div>
                    @elseif($book->stock == 0)
                    <center><div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-exclamation-remove"></span>&nbsp;&nbsp;&nbsp;It seems that the book is currently out of stock.</div>
                    @endif
                  </div>              
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 text-center mt-100 mb-100">
                <div class="phone">
                    <img class="img-responsive img-rounded" src="/images/borrow.jpg">
                </div>
            </div>
          </div>
        </div>
    </header>
    {!!Form::close()!!}
    
    <footer class="footer text-center">
        <div class="container">
            <small>© Copyright 2015. Crafted with love by <a href="https://www.twitter.com/YongHyunnn">@YongHyunnn</a></small>
        </div>
    </footer>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>

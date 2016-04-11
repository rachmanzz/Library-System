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

    <title>Student Dashboard</title>
    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">

    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.bootstrap.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#example').dataTable();  1    
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
          <a class="navbar-brand" href="#">De Ocampo Memorial College</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          {!! Form::open(['route'=>'student.logout', 'class'=>'navbar-form navbar-right']) !!}
            <button type="submit" class="btn btn-danger">Logout</buttton>
          {!! Form::close() !!}
        </div>
      </div>
    </nav>
    <div class="container">
        <br/><br/>
        <div class="well well-sm">
          <p>TEST</p>
        </div>
    @include('errors.status')
      <!-- Example row of columns -->
      @if (count($books) == 0)
        <br/>
        <div class="alert alert-info fade in"><center><h5><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Don't be shy! Borrow a book now. <br><br>There are tons of books waiting for you!</h5></center></div>
      @elseif($penalty > 0 && count($books) > 0)
        <div class="alert alert-danger fade in"><center><h4><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>You still have {{$penalty}} pesos outstanding balance to pay in your account <br><br>Please be guided carefully</h4></center></div>
        <h2 class="sub-header">Book Transaction</h2>
            <table class="table table-striped table-hover table-bordered" id="example">
  <thead>
    <tr>
                  <th class="text-center"><i class="fa-user"></i>&nbsp;Title</th>
                  <th class="text-center"><i class="fa-book"></i>&nbsp;Author</th>
                  <th class="text-center"><i class="fa-calendar"></i>&nbsp;Year</th>
                  <th class="text-center"><i class="fa fa-calendar-check-o"></i>&nbsp;Transaction Date</th>
    </tr>
  </thead>
  <tbody>
          @foreach($books as $book)
            <tr>
                    <td class="text-center">{{$book->title}}</td>
                    <td class="text-center">{{$book->author}}</td> 
                    <td class="text-center">{{$book->genre}}</td>
                    <td class="text-center">{{$book->year}}</td>
                    <td class="text-center">{{$book->edition}}</td>
                    <td class="text-center">{{$book->borrowing_date}}</td>
            </tr>              
          @endforeach
  </tbody>
</table>
      @else <h2 class="sub-header">Book Transaction</h2>
            <table class="table table-striped table-hover table-bordered" id="example">
  <thead>
    <tr>
                  <th class="text-center"><span class="glyphicon glyphicon-user"></span>&nbsp;Title</th>
                  <th class="text-center"><span class="glyphicon glyphicon-book"></span>&nbsp;Author</th>
                  <th class="text-center"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Year</th>
                  <th class="text-center"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Transaction Date</th>
    </tr>
  </thead>
  <tbody>
          @foreach($books as $book)
            <tr>
                    <td class="text-center">{{$book->title}}</td>
                    <td class="text-center">{{$book->author}}</td> 
                    <td class="text-center">{{$book->year}}</td>
                    <td class="text-center">{{$book->borrowing_date}}</td>
            </tr>              
          @endforeach
  </tbody>
</table>
        @endif
          <hr>
      <div class="row">
        <div class="col-md-4">
          <img src="/images/borrow.jpg" class="img-responsive" height="350" width="350">
          <h2>Reserve Books</h2>
          <a href="//localhost:8000/student/{{Auth::user()->id}}/borrow" class="btn btn-info">Book Reservation &raquo;</a>
       </div>
        <div class="col-md-4">
        <img src="/images/borrow.jpg" class="img-responsive" height="350" width="350">
          <h2>Student Transaction</h2>
          <a href="//localhost:8000/student/{{Auth::user()->id}}/reservation" class="btn btn-success">View Account &raquo;</a>
        </div>
        <div class="col-md-4">
        <img src="/images/borrow.jpg" class="img-responsive" height="350" width="350">
          <h2>View Account</h2>
          <a href="//localhost:8000/student/{{Auth::user()->id}}/reservation" class="btn btn-success">View Account &raquo;</a>
        </div>
      </div>

      <hr>
        <footer>
          <div class="copyright-info">
            <p class="pull-left">(c) 2016, De Ocampo Memorial College</p>
            <p class="pull-right"<button class="btn btn-facebook"><i class="fa fa-facebook"></i> | Connect with Facebook</button></p>
          </div>
          <div class="clearfix"></div>
        </footer>
    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
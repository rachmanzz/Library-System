<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">

    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.bootstrap.js"></script>
    <link href="/css/jumbotron.css" rel="stylesheet">
    <style type="text/css"> 

    input[type="text"], textarea{
        background-color: #FFFFFF;
        border:none;
    }

  </style>
        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
          <a class="navbar-brand" href="#">Library System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          {!! Form::open(['route'=>'admin.logout','class'=>'navbar-form navbar-right']) !!}
            <button type="submit" class="btn btn-danger">Logout</button>
          {!! Form::close() !!}
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello,{{$admin}}</h1>
        <p></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <center>
      <div class="row">
        <div class="col-md-4">
          <a href="//localhost:8000/admin/addbooks"><img src="/images/addbooks.jpg" class="img-responsive" height="350" width="350"></a>
          <h2>Add Books</h2>
          <p>The system supports adding books The system supports adding books The system supports adding books The system supports adding books  The system supports adding books</p>
            <a href="//localhost:8000/admin/addbooks" class="btn btn-primary">Add books</a>

        </div>
        <div class="col-md-4">
          <a href="//localhost:8000/admin/editbooks"><img src="/images/editbooks.jpg" class="img-responsive" height="350" width="350"></a>
          <h2>Edit Books</h2>
          <p>The system supports editing information of the books The system supports editing information of the books The system supports editing information of the books </p>
          	<a href="//localhost:8000/admin/editbooks" class="btn btn-info">Edit books</a>
       </div>
        <div class="col-md-4">
        <a href="//localhost:8000/admin/deletebooks"><img src="/images/deletebooks.jpg" href="editbooks" class="img-responsive" height="350" width="350"></a>
          <h2>Delete Books</h2>
          <p>The system supports deleting specific books stored in our database. The system supports deleting specific books stored in our database. </p>
          	<a href="//localhost:8000/admin/deletebooks" class="btn btn-danger">Delete books</a>
        </div>
        </center>
        <hr>
      <div class="row">
        <center>
        <div class="col-md-4">
          <a href="//localhost:8000/admin/request"><img src="/images/borrowingrequest.jpg" class="img-responsive" height="350" width="350"></a>
          <h2>Search</h2>
          <p>The system supports adding books The system supports adding books The system supports adding books The system supports adding books  The system supports adding books</p>
          	<a href="//localhost:8000/admin/request" class="btn btn-primary">Search Module</a>
        </div>
        <div class="col-md-4">
          <a href="//localhost:8000/admin/reservation"><img src="/images/bookreservation.jpg" class="img-responsive" height="350" width="350"></a>
          <h2>Book Reservation Request</h2>
          <p>The system supports editing information of the books The system supports editing information of the books The system supports editing information of the books </p>          
          	<a href="//localhost:8000/admin/reservation" class="btn btn-info">Reservation Request</a>
       </div>
        <div class="col-md-4">
        <a href="//localhost:8000/admin/notreturned"><img src="/images/notreturnedbooks.jpg" class="img-responsive" height="350" width="350"></a>
          <h3>Not Returned Books</h3>
          <p>The system supports deleting specific books stored in our database. The system supports deleting specific books stored in our database. </p>
            <a href="//localhost:8000/admin/notreturned" class="btn btn-danger">Not Returned Books</a>
            <a href="//localhost:8000/admin/penalty" class="btn btn-danger">Printing Penalty</a>
        </div>
       </center>
      </div>

    </div>     

      <hr>
      <div class="container">
            <footer>
        <p>&copy; De Ocampo Memorial College 2016</p>
      </footer>
      </div>

          <hr>

  </body>
</html>


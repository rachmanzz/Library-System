<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">
<!-- JESUS CHRIST THANK YOU!!!!!!!!!!!!!! I ALMOMOST PULL ALL MY HAIR  -->
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.dataTables.min.js"></script>
    <link href="/css/jumbotron.css" rel="stylesheet">
    <style type="text/css"> 

    input[type="text"], textarea{
        background-color: #FFFFFF;
        border:none;
    }

  </style>
        
    <script src="/js/bootstrap.min.js"></script>
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
        <p>TANGINA TANGINA kjasdfklajsdf tangina haha</p>
        <p><a class="btn btn-primary btn-lg" href="borrowrequest" role="button">View Pending Request &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <center>
      <div class="row">
        <div class="col-md-4">
          <img src="/images/addbooks.jpg" class="img-responsive" height="350" width="350">
          <h2>Add Books</h2>
          <p>The system supports adding books The system supports adding books The system supports adding books The system supports adding books  The system supports adding books</p>

        <a href="//librarysystem.dev:8000/admin/{{$admin}}/addbooks" class="btn btn-primary">Add books</a>
        </div>

        </center>
        <hr>
    </div>      
      <hr>

<div class="container">
@include('errors.status')
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-bordered" id="example">
  <thead>
    <tr>
                  <th class="text-center"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Book ID</th>
                  <th class="text-center"><span class="glyphicon glyphicon-user"></span>&nbsp;Author</th>
                  <th class="text-center"><span class="glyphicon glyphicon-book"></span>&nbsp;Title</th>
                  <th class="text-center"><span class="glyphicon glyphicon-font"></span>&nbsp;Genre</th>
                  <th class="text-center"><span class="glyphicon glyphicon-font"></span>&nbsp;Publisher</th>
                  <th class="text-center"><span class="glyphicon glyphicon-stats"></span>&nbsp;Stock</th>
    </tr>
  </thead>
  <tbody>
          @foreach($books as $book)
            <tr>
                    <td class="text-center">{{$book->id}}</td>
                    <td class="text-center">{{$book->author}}</td>
                    <td class="text-center">{{$book->title}}</td> 
                    <td class="text-center">{{$book->genre}}</td>
                    <td class="text-center">{{$book->publisher}}</td>
                    <td class="text-center">{{$book->stock}}</td>
            </tr>              
          @endforeach
  </tbody>
</table>
          <hr>
      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>


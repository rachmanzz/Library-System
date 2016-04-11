<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <title>Admin | Edit Books</title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">

    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/dataTables.bootstrap.js"></script>
    <link href="/css/jumbotron.css" rel="stylesheet">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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

    <div class="jumbotron">
      <div class="container">
        <h1>Hello, {{Auth::user()->username}} </h1>
        <p></p>
        <p><a class="btn btn-primary btn-lg" href="//localhost:8000/admin/home" role="button">Back to menu &raquo;</a></p>
      </div>
    </div>
<div class="container">
@include('errors.status')
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
  <thead>
    <tr>
                  <th class="text-center"><span class="glyphicon glyphicon-user"></span>&nbsp;Title</th>
                  <th class="text-center"><span class="glyphicon glyphicon-book"></span>&nbsp;Author</th>
                  <th class="text-center"><span class="glyphicon glyphicon-font"></span>&nbsp;Year</th>
                  <th class="text-center"><span class="glyphicon glyphicon-stats"></span>&nbsp;Stock</th>
                  <th class="text-center"><span class="glyphicon glyphicon-cog"></span>&nbsp;Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($books as $book)
    <tr>
      <td><center>{{$book->title}}</center></td>
      <td><center>{{$book->author}}</center></td>
      <td><center>{{$book->year}}</center></td>
      <td><center>{{$book->stock}}</center></td>

       <td class="text-center"><button type"submit" class="btn btn-info" id="button" />Edit Book</td>
    </tr>
  @endforeach
  </tbody>
</table>
  {!!Form::open(['route'=>['admin.doEditBooks', Auth::user()->username]])!!}
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Book Confirmation</h4>
      </div>
      <div class="modal-body">
            <p><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="title" name="title"  /></p>
            <p><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Author&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="author" name="author"  /></p>
            <p><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="year" name="year"/></p>
            <p><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="stock" name="stock"   /></p>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save changes" name="button" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
       
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{!!Form::close()!!}
<footer>
        <p>&copy; De Ocampo Memorial College 2016, Inc</p>
      </footer>

<script type="text/javascript">

    $('button').click(function(){
    $("#myModal").modal({backdrop: "static"});
    $("#title").val($(this).closest('tr').children()[0].textContent);
    $("#author").val($(this).closest('tr').children()[1].textContent);
    $("#year").val($(this).closest('tr').children()[2].textContent);
    $("#stock").val($(this).closest('tr').children()[3].textContent);
});
    </script>   
    </div>
  </body>
</html>
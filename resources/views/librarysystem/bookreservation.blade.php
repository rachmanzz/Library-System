<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <title>Student | Reservation Books</title>
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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
        $('#datepicker').datepicker();
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
          {!! Form::open(['route'=>'student.logout','class'=>'navbar-form navbar-right']) !!}
            <button type="submit" class="btn btn-danger">Logout</button>
          {!! Form::close() !!}
        </div>
      </div>
    </nav> 

    <div class="jumbotron">
      <div class="container">
        <h1>Hello,{{$student}} </h1>
        <p></p>
        <p><a class="btn btn-primary btn-lg" href="//localhost:8000/student/{{$id}}" role="button">Back to menu &raquo;</a></p>

      </div>
    </div>
<div class="container">

@include('errors.status')
@include('errors.error')
@if($count == 3)
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert">&times;</a>
  <p><center>It seems that you borrowed 3 books already<br>Please return it first before you can avail the service again.</center></p>
</div>
@else
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

      @if($book->stock > 0)
       <td class="text-center"><button type"submit" class="btn btn-primary" id="button" />Reserve a book</td>
      @else
      <td class="text-center"><button type"submit" class="btn btn-danger" id="button" disabled />Out of stock</td>
      @endif
    </tr>
  @endforeach
  </tbody>
</table>
@endif
  {!!Form::open(['route'=>'student.postReservation'])!!}
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reservation Book Confirmation</h4>
      </div>
      <div class="modal-body">

<div class="container">
            <p><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="author" name="author" readonly="readonly" /></p>
            <p><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Author&nbsp;&nbsp;<input type="text" class="input-lg" id="title" name="title" readonly="readonly" /></p>
            <p><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="year" name="year" readonly="readonly"  /></p>
            <p><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Stock&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="stock" name="stock"  readonly="readonly" /></p>

                <label for="dtp_input2">Date to pick up the book</label>

                 <div class="input-group date col-md-5" id="date">
                    <input class="form-control" type="text" name="reservationDate" readonly="readonly" data-date-format="dd-mm-yy" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
</div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Reserve Book" name="button" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>       
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{!!Form::close()!!}
<footer>
        <p>&copy; De Ocampo Memorial Colleges 2016</p>
      </footer>

<script type="text/javascript">

    $('button').click(function(){
    $("#myModal").modal({backdrop: "static"});
    $("#author").val($(this).closest('tr').children()[0].textContent);
    $("#title").val($(this).closest('tr').children()[1].textContent);
    $("#year").val($(this).closest('tr').children()[2].textContent);
    $("#stock").val($(this).closest('tr').children()[3].textContent);

});
    </script>   
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/js/locales/bootstrap-datetimepicker.en.js" charset="UTF-8"></script>

<script type="text/javascript">
  var nowDate = new Date();
  var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
  $('#date').datetimepicker({ 
    startDate: today,
});
</script>
    </div>
  </body>
</html>
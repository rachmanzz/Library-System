<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <title>Admin | Not Returned Books</title>  
    
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">

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
        <h1>Hello,{{Auth::user()->username}} </h1>
        <p></p>
        <p><a class="btn btn-primary btn-lg" href="//localhost:8000/admin/home" role="button">Back to menu &raquo;</a></p>
      </div>
    </div>
  </div>
<div class="container">

@include('errors.status')
@include('errors.error')
@if($count->count() == 0)
<div class="alert alert-info">
  <center>Currently there's nothing missing in your shelf.</center>
</div>
@else
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
  <thead>
    <tr>  
                  <th class="text-center"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Student ID</th>
                  <th class="text-center"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Title</th>
                  <th class="text-center"><span class="glyphicon glyphicon-tags"></span>&nbsp;Transaction Date</th>
                  <th class="text-center"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($notReturnedBooks as $request)
    <tr>
      <td><center>{{$request->student_id}}</center></td> 
      <td><center>{{$request->title}}</center></td>
      <td><center>{{$request->borrowing_date}}</center></td>

       <td class="text-center"><button type"submit" class="btn btn-success" id="button" />Add to shelf&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endif
  {!!Form::open(['route'=>'admin.doNotReturned'])!!}
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Not Returned Books</h4>
      </div>
      <div class="modal-body">
            <p><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Student ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="student_id" name="student_id" readonly="readonly"/></p>
            <p><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="title" name="title" readonly="readonly"/></p>
            <p><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Transaction Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="borrowing_date" name="borrowing_date" readonly="readonly" /></p>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Confirm" name="button" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
       
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{!!Form::close()!!}
<footer>
        <p>&copy; De Ocampo Memorial College 2016</p>
      </footer>

<script type="text/javascript">

    $('button').click(function(){
    $("#myModal").modal({backdrop: "static"});
    $("#student_id").val($(this).closest('tr').children()[0].textContent);
    $("#title").val($(this).closest('tr').children()[1].textContent);
    $("#borrowing_date").val($(this).closest('tr').children()[2].textContent);
});
    </script>   
    </div>
  </body>
</html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <title>Admin | Pending Request</title>  
    
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
        <h1>Hello,{{$admin}} </h1>
        <p></p>
        <p><a class="btn btn-primary btn-lg" href="//localhost:8000/admin/{{$admin}}" role="button">Back to menu &raquo;</a></p
      </div>
    </div>
    </div>
<div class="container">
@include('errors.status')
@include('errors.error')


@if($requests->count() == 0)
<div class="alert alert-info">
  <center>Currently there's no borrowing request</center>
</div>
@else
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
  <thead>
    <tr>  
                  <th class="text-center"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Borrowing ID</th>
                  <th class="text-center"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Student ID</th>
                  <th class="text-center"><span class="glyphicon glyphicon-tags"></span>&nbsp;Book ID</th>
                  <th class="text-center"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Request Date</th>
                  <th class="text-center"><span class="glyphicon glyphicon-cog"></span>&nbsp;Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($requests as $request)
    <tr>
      <td><center>{{$request->id}}</center></td> 
      <td><center>{{$request->student_id}}</center></td>
      <td><center>{{$request->book_id}}</center></td>
      <td><center>{{$request->borrowing_date}}</center></td>

       <td class="text-center"><button type"submit" class="btn btn-success" id="button" />Approve&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endif
  {!!Form::open(['route'=>'admin.doBorrowingRequest'])!!}
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Pending Request</h4>
      </div>
      <div class="modal-body">
            <p><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Request ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="borrowing_id" name="borrowing_id" readonly="readonly"/></p>
            <p><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Student ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="student_id" name="student_id" readonly="readonly"/></p>
            <p><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Book ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="book_id" name="book_id" readonly="readonly" /></p>
            <p><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Request Date&nbsp;<input type="text" class="input-lg" id="request_date" name="request_date" readonly="readonly"  /></p>

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
    $("#borrowing_id").val($(this).closest('tr').children()[0].textContent);
    $("#student_id").val($(this).closest('tr').children()[1].textContent);
    $("#book_id").val($(this).closest('tr').children()[2].textContent);
    $("#request_date").val($(this).closest('tr').children()[3].textContent);
});
    </script>   
    </div>
  </body>
</html>
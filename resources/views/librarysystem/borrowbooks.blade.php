<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <title>Student | Borrow Books</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">

    <link href="/css/icheck/flat/green.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="/js/jquery.min.js"></script>
    <link href="/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
    <script src="/js/bootstrap.min.js"></script>

    <style type="text/css">
        input[type="text"], textarea{
        background-color: #FFFFFF;
        border:none;
    }
    
    </style>
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
            <button type="submit" class="btn btn-danger">Logout&nbsp;&nbsp;<i class="fa fa-sign-out"></i></button>
          {!! Form::close() !!}
        </div>
      </div>
    </nav>



<div class="container">
@if($count == 3)
<div class="alert alert-danger">
  <p><center>It seems that you borrowed 3 books already<br>Please return it first before you can avail the service again.</center></p>
</div>
@else
<br/><br/><br/><br/><br/>
  
  <table id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
      <tr>
          <th class="text-center"><i class="fa fa-tag"></i>&nbsp;&nbsp;Book ID</th>
          <th class="text-center"><i class="fa fa-user"></i>&nbsp;&nbsp;Author</th>
          <th class="text-center"><i class="fa fa-book"></i>&nbsp;&nbsp;Title</th>
          <th class="text-center"><i class="fa fa-font"></i>&nbsp;Genre</th>
          <th class="text-center"><i class="fa fa-history"></i>&nbsp;&nbsp;Year</th>
          <th class="text-center"><i class="fa fa-barcode"></i>&nbsp;&nbsp;Edition</th>
          <th class="text-center"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Stock</th>
          <th class="text-center"><i class="fa fa-gear"></i>&nbsp;&nbsp;Action</th>
      </tr>
    </thead>
  <tbody>

  @foreach($bookStatus as $book)
    <tr>
      <td><center>{{$book->id}}</center></td>
      <td><center>{{$book->author}}</center></td>
      <td><center>{{$book->title}}</center></td>
      <td><center>{{$book->genre}}</center></td>
      <td><center>{{$book->year}}</center></td>
      <td><center>{{$book->edition}}</center></td>
      <td><center>{{$book->stock}}</center></td>
      @if($book->stock > 0)
       <td class="text-center"><button type"submit" class="btn btn-success" id="button" /><i class="fa fa-plus"></i>&nbsp;Add to bag</td>
      @else
      <td class="text-center"><button type"submit" class="btn btn-danger" id="button" disabled /><i class="fa fa-remove"></i>&nbsp;Out of stock</td>
      @endif
    </tr>
  @endforeach
  </tbody>
</table>
@endif
  {!!Form::open(['route'=>['student.doBorrow', Auth::user()->id]])!!}
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Borrowing Book Confirmation</h4>
      </div>
      <div class="modal-body">
            <p><i class="fa fa-tag"></i>&nbsp;&nbsp;Book ID&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="id" name="id" readonly="readonly" /></p>
            <p><i class="fa fa-user"></i>&nbsp;&nbsp;Author&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="author" name="author" readonly="readonly" /></p>
            <p><i class="fa fa-book"></i>&nbsp;&nbsp;Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="title" name="title" readonly="readonly" /></p>
            <p><i class="fa fa-font"></i>&nbsp;&nbsp;Genre&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="genre" name="genre" readonly="readonly" /></p>
            <p><i class="fa fa-history"></i>&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="year" name="year" readonly="readonly"  /></p>
            <p><i class="fa fa-barcode"></i>&nbsp;&nbsp;Edition&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="edition" name="edition" readonly="readonly"  /></p>
            <p><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="stock" name="stock" readonly="readonly"  /></p>


      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Borrow" name="button" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
       
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{!!Form::close()!!}
    </div>

<footer class="footer">
  <div class="container">
    <p class="text-muted">Place sticky footer content here.</p>
  </div>
</footer>
        <script src="/js/datatables/jquery.dataTables.min.js"></script>
        <script src="/js/datatables/dataTables.bootstrap.js"></script>
        <script src="/js/datatables/jszip.min.js"></script>
        <script src="/js/datatables/pdfmake.min.js"></script>
        <script src="/js/datatables/vfs_fonts.js"></script>
        <script src="/js/datatables/buttons.html5.min.js"></script>
        <script src="/js/datatables/buttons.print.min.js"></script>
        <script src="/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="/js/datatables/dataTables.responsive.min.js"></script>
        <script src="/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="/js/datatables/dataTables.scroller.min.js"></script>
    <script type="text/javascript">

    $('button').click(function(){
    $("#myModal").modal({backdrop: "static"});
    $("#id").val($(this).closest('tr').children()[0].textContent);
    $("#author").val($(this).closest('tr').children()[1].textContent);
    $("#title").val($(this).closest('tr').children()[2].textContent);
    $("#genre").val($(this).closest('tr').children()[3].textContent);
    $("#year").val($(this).closest('tr').children()[4].textContent);
    $("#edition").val($(this).closest('tr').children()[5].textContent);
    $("#stock").val($(this).closest('tr').children()[6].textContent);
});
    </script>   

    <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0,
                 "pageLength": 5
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable({
               "pageLength": 5, 
            });
            var table = $('#datatable-fixed-header').DataTable({
               "pageLength": 5,
            });
          });
          TableManageButtons.init();
        </script>
  </body>
</html>
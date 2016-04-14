
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.semanticui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.11/js/dataTables.semanticui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>
  <!-- Site Properties -->
  <title>Student | Transaction</title>
  <link rel="stylesheet" type="text/css" href="/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/components/site.css">

  <link rel="stylesheet" type="text/css" href="/components/container.css">
  <link rel="stylesheet" type="text/css" href="/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/components/header.css">
  <link rel="stylesheet" type="text/css" href="/components/image.css">
  <link rel="stylesheet" type="text/css" href="/components/menu.css">

  <link rel="stylesheet" type="text/css" href="/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/components/form.css">
  <link rel="stylesheet" type="text/css" href="/components/input.css">
  <link rel="stylesheet" type="text/css" href="/components/button.css">
  <link rel="stylesheet" type="text/css" href="/components/list.css">
  <link rel="stylesheet" type="text/css" href="/components/message.css">
  <link rel="stylesheet" type="text/css" href="/components/icon.css">

  <script src="/js/jquery.min.js"></script>
  <script src="/components/form.js"></script>
  <script src="/components/transition.js"></script>
  <script src="/semantic.js"></script>
  <link rel="stylesheet" href="/semantic.css">

  <style type="text/css">
   div.dataTables_paginate 
   {
      text-align: center;
      margin-top: 15px;
      left: 50%;
    }
   </style>

<script type="text/javascript">
  $(document).ready(function() {
    oTable = $('#example').DataTable({
      "bLengthChange": false,
      "pageLength": 5,
      "dom": 'rtp',
      "order":[[7,'desc']],

    });
    $('#myInputTextField').keyup(function(){
      oTable.search($(this).val()).draw() ;
});
} );
</script>
</head>
<body>

<div class="ui five item labeled icon inverted menu">
  <a class="red item">
    <i class="home icon"></i>
    Dasboard
  </a>
  <a class="red item">
    <i class="user icon"></i>
    {{$student->pop()}} {{$lastName->pop()}}
  </a>
  <a href="//localhost:8000/student/{{Auth::user()->id}}/borrow" class="red item">
    <i class="book icon"></i>
    Reserve Book
  </a>
  <a class="active blue item">
    <i class="history icon"></i>
    Student Transaction
  </a>
    <a href="//localhost:8000/student/logout" class="blue item">
    <i class="sign out icon"></i>
    Logout  
  </a>
</div>

<div class="ui container">
  @if($checker > 0 && $checker != 3)
  <div class="ui warning message">
      <div class="header">
        <i class="info icon"></i>Important Reminders
      </div>
      <p>
        Your student id {{$id}} currently have {{$checker}} pending book request.<br/><br/>1. Please be guided that you can only have a maximum of 3 Book Request in total. <br/>2. Book Request is counted since the book is already reserved in your account upon requesting. <br/><br/>You still have {{3-$checker}} book request remaning.<br/><br/>Sincerely yours,<br/>- Admin
      </p>
  </div>
  @elseif($checker == 3)
  <div class="ui warning message">
    <i class="close icon"></i>
      <div class="header">
        <i class="info circle icon"></i>Important Reminders
      </div>
      <p>
        Your student id {{$id}} currently have requested {{$checker}} books already, so for now you cannot borrow books in the system hence the add to bag buttons will be disabled primarily. <br/><br/>Sincerely yours,<br/>- Admin
      </p>
  </div>
  @endif
  <div class="ui fluid icon input"><input type="text" id="myInputTextField" placeholder="Search book history"><i class="search icon"></i></div>
  <br/>
  <table id="example" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th><center><i class="tag icon"></i>&nbsp;Book ID</center></th>
              <th><center><i class="user icon"></i>&nbsp;Author</center></th>
              <th><center><i class="book icon"></i>&nbsp;Title</center></th>
              <th><center><i class="font icon"></i>&nbsp;Genre</center></th>
              <th><center><i class="history icon"></i>&nbsp;Year</center></th>
              <th><center><i class="barcode icon"></i>&nbsp;Edition</center></th>
              <th><center><i class="calendar icon"></i>&nbsp;Borrowing Date</center></th>
              <th><center><i class="information icon"></i>&nbsp;Status</center></th>
            </tr>
        </thead>
        <tfoot>
 
        </tfoot>
        <tbody>
 @foreach($pendingRequest as $book)
    <tr>
      <td><center>{{$book->id}}</center></td>
      <td><center>{{$book->author}}</center></td>
      <td><center>{{$book->title}}</center></td>
      <td><center>{{$book->genre}}</center></td>
      <td><center>{{$book->year}}</center></td>
      <td><center>{{$book->edition}}</center></td>
      <td><center>{{$book->borrowing_date}}</center></td>
      @if($book->status == 1)
      <td class="text-center"><center><button type"submit" class="ui blue button" id="button" disabled /><i class="info icon"></i>Pending Request</center></td>
      @elseif($book->status == 2)
       <td class="text-center"><center><button type"submit" class="ui red button" id="button" disabled/><i class="warning icon"></i>On Hand</center></td>
      @else
      <td class="text-center"><center><button type"submit" class="ui green button" id="button" disabled /><i class="check icon"></i>&nbsp;Returned</center></td>
      @endif
    </tr>
  @endforeach
        </tbody>
    </table>
</div>
<div class="ui modal" id="myModal">

      <i class="close icon"></i>
      <div class="header">Borrowing Book Confirmation</div>
        <div class="content">
        {!!Form::open(['route'=>['student.doBorrow', $id]])!!}
            <div class="ui transparent input"><h4><i class="tag icon"></i>&nbsp;&nbsp;Book ID&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="id" name="id" readonly="readonly" /></h4></div>
            <div class="ui transparent input"><h4><i class="user icon"></i>&nbsp;&nbsp;Author&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="author" name="author" readonly="readonly" /></h4></div>
            <div class="ui transparent input"><h4><i class="book icon"></i>&nbsp;&nbsp;Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="title" name="title" readonly="readonly" /></h4></div>
            <div class="ui transparent input"><h4><i class="font icon"></i>&nbsp;&nbsp;Genre&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="genre" name="genre" readonly="readonly" /></h4></div>
            <div class="ui transparent input"><h4><i class="history icon"></i>&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="year" name="year" readonly="readonly"  /></h4></div>
            <div class="ui transparent input"><h4><i class="barcode icon"></i>&nbsp;&nbsp;Edition&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="edition" name="edition" readonly="readonly"  /></h4></div>
            <div class="ui transparent input"><h4><i class="bar chart icon"></i>&nbsp;&nbsp;Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-lg" id="stock" name="stock" readonly="readonly"  /></h4></div>
        </div>
      <div class="actions">
        {!!Form::submit('Borrow',['class'=>'ui green button'])!!}
        <button type="button" class="ui red button" data-dismiss="modal">Cancel</button>
      {!!Form::close()!!}
      </div>
</div><!-- /.modal -->

</div>
    <script>
    $('button').click(function(){ 
    $("#myModal").modal('show');
    $("#id").val($(this).closest('tr').children()[0].textContent);
    $("#author").val($(this).closest('tr').children()[1].textContent);
    $("#title").val($(this).closest('tr').children()[2].textContent);
    $("#genre").val($(this).closest('tr').children()[3].textContent);
    $("#year").val($(this).closest('tr').children()[4].textContent);
    $("#edition").val($(this).closest('tr').children()[5].textContent);
    $("#stock").val($(this).closest('tr').children()[6].textContent);
});
    </script>  
</body>
</html>
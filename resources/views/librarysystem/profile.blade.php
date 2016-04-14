
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
  <title>Student | Profile</title>
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
  <a class="active red item">
    <i class="user icon"></i>
    {{Auth::user()->firstName.' '.Auth::user()->lastName}}
  </a>
  <a href="//localhost:8000/student/{{Auth::user()->id}}/borrow" class="red item">
    <i class="book icon"></i>
    Reserve Book
  </a>
  <a class="blue item">
    <i class="history icon"></i>
    Student Transaction
  </a>
    <a href="//localhost:8000/student/logout" class="blue item">
    <i class="sign out icon"></i>
    Logout  
  </a>
</div>

<div class="ui container">
<!--     <div class="input-group">
      <input type="text" class="form-control disable" disabled="disabled">
      <span class="input-group-btn">
        <button class="ui green button" type="button"><i class="icon pencil"></i></button>
      </span>
    </div> -->
    <div class="ui piled segment">
    <br/>
      <div class="ui four column grid">
        <div class="row">
          <div class="column"></div>
          <div class="eight wide column">
            <center><h2 class="ui header"><i class="user icon"></i><div class="content">Student Information<div class="sub header"></div></div></h2></center>
          </div>
          <div class="four wide column">
            <a href="//localhost:8000/student/{{Auth::user()->id}}/profile/edit" class="ui basic button"><i class="settings icon"></i>Edit Profile</a>
          </div>
        </div>
      </div>
      <div class="ui four column grid">
        <div class="row">

          <div class="column"><img class="ui medium left floated image" src="/images/text-image.png"></div>
          <div class="column"><h3 class="ui header"><i class="tags icon"></i><div class="content">Student Number<div class="sub header"></div>{{Auth::user()->id}}</div></h3>
                              <h3 class="ui header"><i class="user icon"></i><div class="content">First Name<div class="sub header"></div>{{$firstName->pop()}}</div></h3>
                              <h3 class="ui header"><i class="heterosexual icon"></i><div class="content">Gender<div class="sub header"></div>@if($gender->pop() == "M") Male @else Female @endif</div></h3>
          </div>                              
          <div class="column"><h3 class="ui header"><i class="university icon"></i><div class="content">Course/Major<div class="sub header"></div>{{$course->pop()}}</div></h3>
                              <h3 class="ui header"><i class="ellipsis vertical icon"></i><div class="content">Middle Name<div class="sub header"></div>{{$middleName->pop()}}</div></h3>
                              <h3 class="ui header"><i class="world icon"></i><div class="content">Religion<div class="sub header"></div>{{$religion->pop()}}</div></h3>
          </div>
          <div class="column"><h3 class="ui header"><i class="student icon"></i><div class="content">Year Level<div class="sub header"></div>{{$yearLevel->pop()}}</div></h3>
                              <h3 class="ui header"><i class="ellipsis vertical icon"></i><div class="content">Last Name<div class="sub header"></div>{{$lastName->pop()}}</div></h3>
                              <h3 class="ui header"><i class="phone icon"></i><div class="content">Contact Number<div class="sub header"></div>{{$contactNumber->pop()}}</div></h3>
          </div>
          <div class="column"></div>
          <div class="twelve wide column"><h3 class="ui header"><i class="home icon"></i><div class="content">Address<div class="sub header"></div>{{$address->pop()}}</div></div></h3>
   
        </div>
      </div>

      <div class="ui two column grid">
        <div class="row">
          <div class="four wide column"></div>
          <div class="twelve wide column"><h3 class="ui header"><i class="quote left icon"></i><div class="content">Motto<div class="sub header"></div>{{$motto->pop()}}&nbsp;&nbsp;<i class="quote right icon"></i></div></h3></div>
        </div>
      </div>

      <br/>
      <hr>
      <br/>

      <div class="ui four column grid">
        <div class="row">
          <div class="column"></div>
          <div class="eight wide column">
            <center><h2 class="ui header"><i class="wait icon"></i><div class="content">Recent Activity<div class="sub header"></div></div></h2></center>
@foreach($recentActivity as $activity)            
            <div class="ui large feed">
  <div class="event">
    <div class="label">
      <i class="user icon"></i>
    </div>
    <div class="content">
      <div class="summary">
        <a class="user">
        @if(count($activity) == 3)
          {{die()}}
        @endif
        {{Auth::user()->firstName.' '.Auth::user()->lastName}}
        @if($activity->status == 1)
        </a> requested the book {{$activity->title}} by {{$activity->author}}
        @elseif($activity->status == 2)
        </a> borrowed the book {{$activity->title}} by {{$activity->author}}
        @elseif($activity->status == 3)
        </a> succesfully returned the book {{$activity->title}} by {{$activity->author}}
        @endif
        <div class="date">
          {{$activity->borrowing_date->diffForHumans()}}
        </div>
      </div>
<!--       <div class="meta">
        <a class="like">
          <i class="like icon"></i> 4 Likes
        </a>
      </div> -->
    </div>
  </div>
        </div>
@endforeach        
      </div>
</div>
  <br/>
</div>
    <script>
    $('.ui.green.button').on('click', function(event) {
      event.preventDefault();
      
      if ($('.disable').attr('disabled')){
        $('.disable').removeAttr('disabled');
      }else{
        $('.disable').attr('disabled', 'disabled');
      }
});
    </script>  
</body>
</html>
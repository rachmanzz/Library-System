
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Student | Login</title>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
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

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    {!! Form::open(['route'=>'student.doLogin', 'class'=>'ui large form']) !!}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            {!!Form::text('id',null,['class'=>'form-control input-lg','placeholder'=>'Student Number'])!!}
            <i class="user icon"></i>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            {!!Form::password('password',array('placeholder'=>'Password'))!!}
            <i class="lock icon"></i>
          </div>
        </div>
        {!!Form::submit('Login',['class'=>'ui fluid large teal submit button'])!!}
      </div>

      <div class="ui error message"></div>

    {!!Form::close()!!}

    <div class="ui message">
      Are you new?&nbsp;&nbsp;<a href="//localhost:8000/student/register">Sign Up</a>
    </div>
    @include('errors.error');
  </div>

</div>

</body>

</html>
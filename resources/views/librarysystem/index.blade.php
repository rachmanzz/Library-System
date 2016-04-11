<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Welcome!</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
      <nav class="navbar navbar-inverse navbar-static-top">
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
            <form class="navbar-form navbar-right">
            <div class="btn-group">
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Student
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="//localhost:8000/student/login">Login</a></li>
                  <li><a href="//localhost:8000/student/register">Register</a></li>
                </ul>
              </div>
            </div>
            <a href="//localhost:8000/admin/login" class="btn btn-danger">Administrator</a>
            </form>
          </div>
        </div>
    </nav>

      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="/images/carousel3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to De Ocampo Memorial College Library System</h1>
              <p>Note: That we will be having an event on <code>January 25, 2015</code> and we are expecting that all of you will participate. To know more about this event click learn more</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/images/carousel1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>The Library System is pretty new!</h1>
              <p>There are tons of books waiting for you out there on our shelves!<br/> And we think that all of the books there are excited to be taken off that shelf!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Borrow book</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="/images/carousel2.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure. You can reserve a book!</h1>
              <p>We provide this feature if you want to organize your schedule!<br/> Just pick the date and drop off at the library and pick up on the date you provided! <br/>It's never been that easy before.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Reserve a book now</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Sel Falcunaya</h2>
          <p class="lead">Chief Librarian Officer</p>
          <p>Sel Falcunaya is a Chief Librarian Officer for the schoolNameHere for already 12 years.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Abraham Jose</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>James Harvey Santillan</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Borrowing books is easier<br/><span class="text-muted">And it'll blow your mind.</span></h2>
          <p class="lead">Borrowing books has never been easier than before, just login to your student account and request for the book you need then go directly to the release section. Imagine that, you are just a few clicks away to grab that book you need out of our shelfs and take it home. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="/images/borrow.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Say goodbye to book catalogs <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Searching something specific is such a pain with book catalogs, that is why we added a search engine to the system and say goodbye to the old book catalog section in our library. You can now easily search anything with our search feature. From title, author, publisher, anything you want will be search faster than how you think of it.  </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="/images/rsz_bookcatalogue.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, book reservation <span class="text-muted">We make your life easier.</span></h2>
          <p class="lead">If you're a pretty busy person and always have a hectic schedules, book reservation is just for you! We make your life easier for you to enable to manage your time well, just pick the date you want to pick up and the book and done! Just drop off the school library and take it home. Just don't be silly to abandon it on the date you reserved it or else you'll be fined.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="/images/reservation.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 De Ocampo Memorial College, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! --><script src="/js/bootstrap.min.js"></script>
  </body>
</html>

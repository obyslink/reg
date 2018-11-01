<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('css/bootstrap.css')}}" />

    <script type="text/javascript" src="{{ url('js/bootsrap.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js') }}"></script>

    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


<style>
.display-3{color:#fff;}
.lead{color:#fff;}

  .jumbotron {
   background: url('css/reg top 2-compressed.jpg') no-repeat center center fixed;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   background-size: cover;
   -o-background-size: cover;
}

.navbar{background-color:#000;
}
.register{color:#fff;
}

</style>
</head>

<body>

    <nav class="navbar">
  <a class="navbar-brand" href="9stream.live">
        <img id="brand-image" alt="9stream" src="css/swaplogo.png"/>
  </a>

  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <span class="float-right">
  <h5 class="register">
            
            Online Registration
        </h5></span>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul> -->
   
  </div>
</nav>
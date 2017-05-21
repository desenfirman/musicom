
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Starter Template for Bootstrap</title>

  <style media="screen">
  .navbar-login
    {
      padding: 2% 5%;
    }

    .navbar-login-session
    {
      padding: 10px;
    }

    .icon-size
    {
      font-size: 87px;
    }
  </style>

  <!-- Bootstrap core CSS -->
  <!-- <script src="/bower_resources/jquery/dist/core.js" charset="utf-8"></script>
  <script src="/bower_resources/jquery/dist/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" charset="utf-8"></script>
  <script src="/bower_resources/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script> -->
  <!-- <link rel="stylesheet" href="/bower_resources/bootstrap/dist/css/bootstrap-theme.min.css"> -->
  <link rel="stylesheet" href="/bower_resources/bootstrap/dist/css/bootstrap.min.css">



</head>

@include('layouts.nav')





<body>

  <div class="container">

    @yield('content')


  </div>

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


</body>
</html>

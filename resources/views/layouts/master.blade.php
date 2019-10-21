<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" crossorigin="anonymous" integrity="">
    <link rel='stylesheet' id='line-awesome-css'  href='/fontawesome/css/all.css' type='text/css' media='all' integrity=""/>
    <title>Videoclub</title>
  </head>
  <body>
   <!-- <h1>Hello, world!</h1> -->
   @include('partials.navbar')
   <div class="container">
              @yield('content') 
   </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
  </body>
</html>
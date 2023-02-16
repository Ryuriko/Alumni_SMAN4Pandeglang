<!doctype html>
<html lang="en">
  <head>
  	<title>Alumni SMA 4 Pandeglang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

    <link rel="stylesheet" href="{{ asset('/sidebar/css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
      
      <!-- Page Content  -->

      @yield('container')
    
    </div>

    <script src="{!! asset('sidebar/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('sidebar/js/popper.js') !!}"></script>
    <script src="{!! asset('sidebar/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('sidebar/js/main.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  </body>
</html>
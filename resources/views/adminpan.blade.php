<!doctype html>

<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>Simbirsk toys</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
    <meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

    <!-- Fonts -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/bear1.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/modernizr-2.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/insta.js"></script> 
      
  </head>
  <body>
  	<h1>Список:</h1>
  	<div class="container">
	</div>
     {!! Form::open(array('rout' => 'queries.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
      {!! Form::text('search', null,array('class'=>'form-control','placeholder'=>'Search for a tutorial...')) !!}
      {!! Form::submit('Search',array('class'=>'btn btn-default')) !!}
     {!! Form::close() !!}
      @foreach ($users as $user)
        {{ $user->name }}<br>
        {{ $user->email }}<br><br>
      @endforeach
  </body>
</html>
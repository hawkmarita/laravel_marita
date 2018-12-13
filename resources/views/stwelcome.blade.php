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
          
		<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="index.html"><img src="img/bear.png" alt="Logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#pricing" class="scroll"><b>О нас</b></a></li>
            <li><a href="#location" class="scroll"><b>Где мы?</b></a></li>
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}"><b>Home<b></a></li>
                    @else
                        <li><a href="{{ route('login') }}"><b>Login</b></a></li>
                        <li><a href="{{ route('register') }}"><b>Register</b></a></li>
                    @endauth
            @endif 
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
        
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="index.html"><img src="img/bear1.png" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="scroll stroke"><b>Home</b></a>
                    @else
                        <a href="{{ route('login') }}" class="scroll stroke"><b>Login</b></a>&nbsp; 
                        &nbsp;<a href="{{ route('register') }}" class="scroll stroke"><b>Register</b></a>&nbsp;
                    @endauth
            @endif
			&nbsp;<b><a href="#pricing" class="scroll stroke">О нас</a></b>&nbsp; &nbsp;<b><a href="#location" class="scroll stroke">Где мы?</a></b>
		  </div>
        </div>
        
        
      </div>
    </header>
    
    <div class="mouse-icon hidden-xs">
				<div class="scroll"></div>
			</div>
    
    <!--Pricing-->
    <section id="pricing" class="pad-lg">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2 class="red">О нас</h2>
            <p class="red lead">Сеть магазинов "СИМБИРСКИЙ ДОМ ИГРУШКИ" это:</p>
          </div>
        </div>
        
        <div class="row margin-50">
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
    					<li class="headline"><h4 class="white">Удобство</h4></li>
    					<li class="price"><div class="amount"><img src="img/house.png"></div></li>
    					<li class="features">Магазины с огромным выбором развлечений для детей и их родителей</li>
    					<li class="features last btn btn-secondary btn-wide"><a href="#location" class="scroll">Перейти</a></li>
    				</ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
            <ul class="list-unstyled pricing-table active text-center">
    					<li class="headline"><h4 class="white">Большой выбор</h4></li>
    					<li class="price"><div class="amount"><img src="img/bear-emoji.png"></div></li>
    					<li class="features">Здесь Вы всегда найдете то, что придется по душе Вам и Вашим детям: мягкие игрушки, конструкторы, прекрасных кукол, машинки, роботов, игры на любой вкус и возраст и многое-многое другое! </li>
    					<li class="features last btn btn-secondary btn-wide"><a href="#">Перейти</a></li>
    				</ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
    					<li class="headline"><h4 class="white">Выгодные цены</h4></li>
    					<li class="price"><div class="amount"><img src="img/heart.png"></div></li>
    					<li class="features">Более тысячи наименований товаров, качественная продукция, очень приятные цены и выгодные акции!</li>
    					<li class="features last btn btn-secondary btn-wide"><a href="#">Перейти</a></li>
    				</ul>
          </div>
        </div>
      </div>
    </section>
	
	  <section id="be-the-first" class="pad-xl">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
            <h2>Будьте в курсе!</h2>
            <p class="lead">Узнавайте свежие новости первыми благодаря нашим группам ВКонтакте и Инстаграм!</p>
          </div>
        </div>
        
        <div class="iphone wow fadeInUp" data-wow-delay="1s">
	        <img src="img/devices.png">
        </div>
      </div>
    </section>
    
    <section id="main-info" class="pad-m">
	    <div class="container">
		    <div class="row">
			    <div class="col-sm-4 wow fadeIn text-center" data-wow-delay="0.4s">
				    <hr class="line purple">
				    <h1><a href="https://vk.com/simbirsk_toys"><i class="fa fa-vk"></i></a></h1>
				    <p>Следите за нашими новостями ВКонтакте!</p>
			    </div>
			    <div class="col-sm-4 wow fadeIn text-center" data-wow-delay="0.8s">
				    <hr  class="line red">
				    <h1><a href="https://www.instagram.com/simbirsk_toys"><i class="fa fa-instagram"></i></a></h1>
				    <p>Узнавайте первыми свежие новости магазина в Инстаграм!</p>
			    </div>
			    <div class="col-sm-4 wow fadeIn text-center" data-wow-delay="1.2s">
				    <hr  class="line yellow">
				    <h1><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></h1>
				    <p>Свяжитесь с нами в Фейсбук!</p>
			    </div>
		    </div>
	    </div>
    </section>
	
	  <section id="mails">
      <div class="pad-lg">
      <div class="text-center">
        <h2 class="red">Отправьте нам письмо!</h2>
        <button class="btn"><h3 class="white"><a href="/form">Написать!</a></h3></button>
      </div>
      </div>
    </section>

    <section id="photogallery">
      <div class="text-center">
        <h2 class="red">Наши фотографии</h2>
        <ul id="ul">
        </ul>
        <!--token inst 7126735684.1677ed0.5f73f9117397439baa86c54faf4e86b2-->
      </div>
    </section>

    <section id="search">
      <div class="text-center">
        <button class="btn"><a href="/search">Search</a></button>
      </div>
    </section>

    <section id="location">
	    <div class="text-center">
			  <h3 class="red">Наши адреса:</h3>
			  <h4>проспект Генерала Тюленева, 3</h4>
			  <h4>ТЦ "Альянс", ул. Рябикова, 70, 2 этаж</h4>
			  <h4>ТЦ "Оптимус", 2 этаж</h4>
			  <h4>м-н "Волжанка", ул. 40 лет Октября, 15</h4>
		  </div>
		  <div><iframe src="https://yandex.ru/map-widget/v1/-/CBBFbKSihC" width="100%" height="100%" frameborder="0"></iframe></div>
	  </section>
	
    <footer>
      <div class="container">
        
        <div class="row">
          <div class="col-sm-8 margin-20">
            <ul class="list-inline social">
              <li>Свяжитесь с нами</li>
              <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://vk.com/simbirsk_toys"><i class="fa fa-vk"></i></a></li>
			        <li><a href="https://www.instagram.com/simbirsk_toys"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          
          <div class="col-sm-4 text-right">
            <p><small>Copyright &copy; 2018. All rights reserved. <br>
			    Created by Sokolova M.
	            Pattern by <a href="http://visualsoldiers.com">Visual Soldiers</a></small></p>
          </div>
        </div>
        
      </div>
    </footer>
	
	<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	
  </body>
</html>

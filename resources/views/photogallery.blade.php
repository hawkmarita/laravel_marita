 <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Photogallery</title>
        <meta name="description" content="Thumbnail Grid with Expanding Preview" />
        <meta name="keywords" content="thumbnails, grid, preview, google image search, jquery, image grid, expanding, preview, portfolio" />
        <meta name="author" content="Codrops" />

        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/photos.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="img/bear1.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />   
    </head>
    <body>
        <div class="text-center">
            <h1 class="red">Фотогалерея</h1>
            <h2 class="black">Оцените нас в Инстаграм</h2>
            <ul id="ph"></ul>
            <h2 class="black">Найдите нужные фотографии здесь!</h2>
        </div>

        <div class="container"> 
            <div class="main">
                <ul id="og-grid" class="og-grid">
                    <li>
                        <a href="https://vk.com/simbirsk_toys" data-largesrc="img/dolls.jpg" data-description="Мы предлагаем вам большой выбор кукол для ваших маленьких принцесс. У нас вы точно найдете игрушку по душе!">
                            <img src="img/thumbs/dolls.jpg" alt="dolls"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop.jpg" data-description="Устроить праздник любимым не так уж сложно 😄 Ведь каждый подарок из Симбирского Дома Игрушки всегда становится маленьким праздником 🎈🎉 Дарите друг другу радость 😊💘">
                            <img src="img/thumbs/shop.jpg" alt="shop"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop2.jpg" data-description="Друзья! Мы есть и ВКонтакте 💙 Присоединяйтесь и следите за новостями, чтобы ничего не пропустить!👇👇👇">
                            <img src="img/thumbs/shop2.jpg" alt="shop2"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop3.jpg" data-description="Наши прекрасные лавки чудес уже давно пробудились и ждут Вас в гости! 🏠✨ Смотрите, какой у нас огромный выбор для любителей конструкторов 😋💛 Ну что, уже готовы прийти? 😄">
                            <img src="img/thumbs/shop3.jpg" alt="shop3"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop4.jpg" data-description="А Вы уже познакомились с нашими плюшевыми друзьями?😊 В наших магазинах их очень много! Вы точно найдете себе милого любимца, с которым не захотите расставаться ❤">
                            <img src="img/thumbs/shop4.jpg" alt="shop4"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- /container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/grid.js"></script>
        <script>
            $(function() {
                Grid.init();
                // adding more items
                $('#og-additems').on( 'click', function() {
                    var $items = $( '<li><a href="https://vk.com/simbirsk_toys" data-largesrc="img/dolls.jpg" data-description="Мы предлагаем вам большой выбор кукол для ваших маленьких принцесс. У нас вы точно найдете игрушку по душе!"><img src="img/thumbs/dolls.jpg" alt="dolls"/></a></li><li><a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop.jpg" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu."><img src="img/thumbs/shop.jpg" alt="shop"/></a></li><li><a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop2.jpg" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato."><img src="img/thumbs/shop2.jpg" alt="shop2"/></a></li><li><a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop3.jpg" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="img/thumbs/shop3.jpg" alt="shop3"/></a></li><li><a href="https://vk.com/simbirsk_toys" data-largesrc="img/shop4.jpg" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu."><img src="img/thumbs/shop4.jpg" alt="shop4"/></a></li>' ).appendTo( $( '#og-grid' ) );
                    
                    Grid.addItems( $items );
                    return false;
                } );
            });
        </script>    
    </body>
</html>
	 <!--token inst 7126735684.1677ed0.5f73f9117397439baa86c54faf4e86b2  7126735684.605f1a0.b59d9854f73044648e93d84eff96a9cb--> 
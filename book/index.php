<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Интернет-магазин Книжный мир</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">                
        <link href="css/main.css" rel="stylesheet">
        <link rel="shortcut icon" href="biblia.ico" type="image/x-icon">        
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="tel:+74956665050"><i class="phone"></i> +7(495)666-50-50</a></li>
                                    <li><a href="mailto:support@my.book"><i class="envelope"></i> support@my.book</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="https://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://vk.com/addshop_ru"><i class="fa fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="images/home/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">                                                                    
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Корзина</a></li>                            
                                    <li><a href="login.php"><i class="fa fa-lock"></i> Вход</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">                            
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li class="dropdown"><a href="#">Каталог<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="Ba.php">Басни</a></li>
                                            <li><a href="De.php">Детективы</a></li>
                                            <li><a href="P.php">Поэзия</a></li>
                                            <li><a href="Pr.php">Приключения</a></li>
                                            <li><a href="Fa.php">Фантастика</a></li>
                                            <li><a href="Fe.php">Фентази</a></li> 
                                            <li><a href="X.php">Художественная литература</a></li> 
                                        </ul>
                                    </li> 
                                    <li><a href="ak.php">Акции</a></li>
                                    <li><a href="com.php">О компании</a></li> 
                                    <li><a href="d.php">Доставка и оплата</a></li>
                                    <li><a href="blog.php">Новости</a></li>
                                    <li><a href="contact.php">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
            
        </header><!--/header-->

        <section>
            <div class="container">       
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--Последние товары-->
                        <h2 class="title text-center">Последние товары</h2>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <b>Воровка для незримого диктатора</b>
                                        <img src="images/shop/p1.jpg">
                                        <h2>213 руб.</h2>
                                        <a onclick="buy(1)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <b>Пламя ночи</b>
                                            <img src="images/shop/p2.jpg">
                                            <h2>369 руб.</h2>
                                            <a onclick="buy(2)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <b>Удачная одиссея</b>
                                            <img src="images/shop/p3.jpg">
                                            <h2>244 руб.</h2>
                                            <a onclick="buy(3)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <b>Помощница лютого босса</b>
                                            <img src="images/shop/p4.jpg">
                                            <h2>451 руб.</h2>
                                            <a onclick="buy(4)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <img src="images/home/new.png" class="new">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <b>Отражение догоревшей боли</b>
                                            <img src="images/shop/p5.jpg">
                                            <h2>100 руб.</h2>
                                            <a onclick="buy(5)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <b>Страницы счастливой ночи</b>
                                            <img src="images/shop/p6.jpg">
                                            <h2>183 руб.</h2>
                                            <a onclick="buy(6)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!--features_items-->

                        <div class="recommended_items"><!--Рекомендуемые товары-->
                            <h2 class="title text-center">Рекомендуем</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <b>Моя секретная игра</b>
                                                        <img src="images/shop/p7.jpg">
                                                        <h2>964 руб.</h2>
                                                        <a onclick="buy(7)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <b>Моя громадная борьба</b>
                                                        <img src="images/shop/p8.jpg">
                                                        <h2>790 руб.</h2>
                                                        <a onclick="buy(8)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <b>Слёзы истлевшей печали</b>
                                                        <img src="images/shop/p9.jpg">
                                                        <h2>869 руб.</h2>
                                                        <a onclick="buy(9)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <b>Кафедра мертвых магов</b>
                                                        <img src="images/shop/p10.jpg">
                                                        <h2>963 руб.</h2>
                                                        <a onclick="buy(10)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <b>Секретарь загадочного императора</b>
                                                        <img src="images/shop/p11.jpg">
                                                        <h2>632 руб.</h2>
                                                        <a onclick="buy(11)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <b>Помощница жесткого хранителя</b>
                                                        <img src="images/shop/p12.jpg">
                                                        <h2>721 руб.</h2>
                                                        <a onclick="buy(12)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><img src="images/home/logo.png" alt=""/></li>
                                    <li>© 2022 Книжный мир</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>О магазине</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="index.php">Главная</a></li>
                                    <li><a href="ak.php">Акции</a></li>
                                    <li><a href="com.php">О компании</a></li>
                                    <li><a href="d.php">Доставка и оплата</a></li>
                                    <li><a href="blog.php">Новости</a></li>
                                    <li><a href="contact.php">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Каталог</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="Ba.php">Басни</a></li>
                                    <li><a href="De.php">Детективы</a></li>
                                    <li><a href="P.php">Поэзия</a></li>
                                    <li><a href="Pr.php">Приключения</a></li>
                                    <li><a href="Fa.php">Фантастика</a></li>
                                    <li><a href="Fe.php">Фентази</a></li> 
                                    <li><a href="X.php">Художественная литература</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Свяжитесь с нами</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li>Кутузовский просп., 57, Москва, 121352</li>
                                    <li>E-mail:<a href="mailto:support@my.book">support@my.book</a></li>
                                    <li><a href="tel:+74956665050">+7(495)666-50-50</a></li>
                                </ul>
                            </div>
                        </div>				
                    </div>
                </div>
            </div>	
        </footer><!--/Footer-->
        
        <script>
            function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;}
            function setCookie(name, value, options = {}) {
            options = {
            path: '/',
            // при необходимости добавьте другие значения по умолчанию
            ...options
            };
            if (options.expires instanceof Date) {
            options.expires = options.expires.toUTCString();
            }
            let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
            for (let optionKey in options) {
            updatedCookie += "; " + optionKey;
            let optionValue = options[optionKey];
            if (optionValue !== true) {
                updatedCookie += "=" + optionValue;
            }
            }
            document.cookie = updatedCookie;
            }//


            var data = [];
            function buy(x){
                if(getCookie('PHPSESSID')){
                    if (!contains(data,x)){
                        data.push(x);
                        setCookie('buy', data.join(','));
                        alert('The product has been added to the cart');
                    }else{
                        alert('The product has been added to the cart');
                    }
                }else{
                    alert('Log in to the website or register to order')
                }
            }
            function contains(arr, elem) {
                for (var i = 0; i < arr.length; i++) {
                    if (arr[i] === elem) {
                        return true;
                    }
                }
                return false;
            }       
        </script>
        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
    </body>
</html>
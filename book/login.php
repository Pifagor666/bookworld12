<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Вход | Регистрация</title>
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
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>

					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">                                  
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Корзина</a></li>                            
								<li><a href="login.php" class="active"><i class="fa fa-lock"></i> Вход</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
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
<?php session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Вход</h2>
						
						<form action="testreg.php" method="post">
							Логин:
							<input name="login" type="text" size="15" maxlength="15">
							Пароль:
							<input name="password" type="password" size="15" maxlength="15">
							<button type="submit" class="btn btn-default">Авторизоваться</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">ИЛИ</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Регистрация</h2>
						<form action="save_user.php" method="post">
							Логин:
							<input name="login" type="text" size="15" maxlength="15">
							Пароль:
							<input name="password" type="password" size="15" maxlength="15">
							<button type="submit" class="btn btn-default">Зарегистрироваться</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
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

    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
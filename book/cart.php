<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Корзина</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">                
    <link href="css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="biblia.ico" type="image/x-icon"> 
</head><!--/head-->

<body>
<?php
    session_start();
?>
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
								<?php
                                    if($_GET['signOut']==true){
                                        unset($_SESSION['login']);
                                        unset($_SESSION['id']);
                                    }
                                    if (empty($_SESSION['login']) or empty($_SESSION['id'])){
                                    echo '<li><a href="login.php" class="active"><i class="fa fa-lock"></i> Вход</a></li>';
                                    }else{
                                    echo "Вы вошли на сайт под именем ".$_SESSION['login'].'
                                    <form method="get">
                                        <input name="signOut" style="display:none" value="true">
                                        <button class="b1 col" type="submit" style="">Вход</button>
                                    </form>';
                                    }
                                ?>                          	
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

	<section id="cart_items">
        <div class="container">        
        <script>    
            function getCookie(name) {
                let matches = document.cookie.match(new RegExp(
                    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
                ));
                return matches ? decodeURIComponent(matches[1]) : undefined;
            }
            let data = getCookie('buy')
            if(data){
                data=data.split(',');
                korOutput();
            }else{
                console.log(data);
                document.write('Ваша корзина пуста')
            }
            function deleteBuy(x){
                for(i in data){
                    if (data[i]==x){
                        x=i;
                        break
                    }
                }
                data.splice(x, 1);
                document.cookie = 'data='+data.join(',');
                document.getElementsByClassName('korCont'+x)[0].outerHTML = '';
            }
            function refreshCount(){
                let stroki = document.getElementsByClassName('ProdInput');
                let result = [];
                
                for(i in data){
                    result.push(stroki[i].value);
                }
                document.getElementsByName('prodsCounter')[0].value=result.join(',');
                console.log(document.getElementsByName('prodsCounter')[0].value);
            }
            function korOutput(){
                for(i in data){
                    document.write('\
                    <div class="korContent korCont'+(data[i])+'"><div class="container">\
                        <div class="col-sm-4"><div class="product-image-wrapper"><div class="single-products"><div class="productinfo text-center"><img src="images/shop/p'+(data[i])+'.jpg"></div></div></div></div>\
                    <div class="korStrok"><div class="col-sm-4">\
                        Количество:<div class="inp"><div class="single-products"><input name="prod'+(data[i])+'" type="text" size="10" maxlength="100" onchange="refreshCount()" class="textInp ProdInput" value="1"></div></div></div></div><br>\
                    <div class="korZakaz"><div class="col-sm-4"><div class="single-products"><button class="korKup colKorZen" type="button" onclick="deleteBuy('+data[i]+')">Удалить</button></div></div></div>\
                    </div></div>');
                }
                    document.write('\
                    <div class="korContent inp">\
                        <form class="" method="POST">\
                            E-mail: <input name="email" type="text" class="textInp" style="width:150px;height:20px">\
                            <input name="prods" type="text" style="display:none" value="'+data.join(',')+'">\
                            <input name="prodsCounter" type="text" style="display:none" value="">\
                            <input class="korKup colKorZen" type="submit" value="Купить">\
                        </form><br>\
                    </div>')
                    refreshCount();
            }        
        </script>
        </div>
        
            <?php
                $email = "not defined";
                $prods = "not defined";
                $prodsCounter = "not defined";
                if(isset($_POST["email"])){
                
                    $email = $_POST["email"];
                
                if(isset($_POST["prods"])){
                
                    $prods = $_POST["prods"];
                
                if(isset($_POST["prodsCounter"])){
                
                    $prodsCounter = $_POST["prodsCounter"];    
                    include('bd.php');
                
                    $sql = mysqli_query($db, "INSERT INTO `orders` (`email`, `prods`, `prods_amount`) VALUES ('{$email}', '{$prods}', '{$prodsCounter}')");
                //Если вставка прошла успешно
                if ($sql) {
                echo '<p> Покупка совершена успешно, ждите сообщения в ваше почтовом ящике.</p>';
                } else {
                echo '<p>Ошибка: ' . mysqli_error($link) . ' Попробуйте позже.</p>';
                }

                }}}            
            ?>        
	</section> <!--/#cart_items-->
<!--
	<footer id="footer">Footer 
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<ul class="nav nav-pills nav-stacked">
								<li><img src="images/home/logo.png"></li>
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
								<li>Кутузовский просп., 57, Москва, 121352<br>
								E-mail:<a href="mailto:support@my.book">support@my.book</a><br>
								<a href="tel:+74956665050">+7(495)666-50-50</a></li>
							</ul>
						</div>
					</div>				
				</div>
			</div>
		</div>	
	</footer>--><!--/Footer-->
   
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
</body>
</html>
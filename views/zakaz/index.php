<?php include ROOT . "/views/layout/head.php"?>

<body>
    <header class="main-head">
        <div class="container">
            <div class="row">
                <nav class="nav-top flex">
                    <div class="left-nav">
                        <h1>wash</h1>
                        <p>all type of cars</p>
                    </div>
                    <div class="right-nav">
                        <ul>
                            <li><a href="/main/index">Главная</a></li>
                            <li class="active"><a href="#">Заказ Автомойки</a></li>
                            <li><a href="#">Наши преимущества</a></li>
                            <li><a href="#">Что мы умеем</a></li>
                            <li><a href="#">Отзывы</a></li>
                        </ul>
                        <span class="phone">
                            +7(777)77-77-77    
                        </span>
                        <?php if (User::isGuest()): ?>                                        
                                        <li><a href="/user/"><i class="fa fa-lock"></i>Вход</a></li>
                            <?php else: ?>
                                        <li><a href="/#/"><i class="fa fa-user"></i></a></li>                                    
                                        <li><a href="/user/logout"><i class="fa fa-unlock"></i>выход</a></li>                                        
                            <?php endif; ?>
                            <a href="/cart">
                                <i class="fa fa-shopping-cart"></i> Корзина 
                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                            </a>
                            
                    </div>

                    <div class="fa-bars-out">
                        <span class="phone">
                            +7(777)77-77-77    
                        </span>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </nav>

                <div class="mobNav" style="display: none;">
                    <ul>
                        <li><a href="main/index">Главная</a></li>
                        <li class="active"><a href="#">Заказ Автомойки</a></li>
                        <li><a href="#">Наши преимущества</a></li>
                        <li><a href="#">Что мы умеем</a></li>
                        <li><a href="#">Отзывы</a></li>
                    </ul>
                </div>

                <div class="wrapper-section">
                    <div class="wrapper-head">
                        <h3>Заказ авто мойки онлайн</h3>
                        <p>Бронирование времени автомобильной мойки заранее.</p>
                    </div>
                    <div class="wrapper-in flex">
                        <?php foreach ($list as $listCar):?>
                        <div class="flex-in">
                            <div class="img-wrapper">
                                <img src="../../template/img/<?php echo $listCar['img']?>" alt="">
                            </div>

                            <div class="wrapper-h5 flex">
                                <h5><?php echo $listCar['name']?></h5>
                                <i class="fa fa-clock-o" aria-hidden="true" title="по-времени" alt="ass"></i>

                            </div>
                            <div class="wrapper-p">
                                <p><?php echo $listCar['description']?></p>
                            </div>
                            <a href="form" style="display: block">
                                <div class="button-wrap">
                                    <buttons class="buttons">заказать</buttons>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section5 flex">
        <div class="left-addr">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            <h4>Контакты</h4>
            <div class="addr">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p>Адрес:<br>
                ул. Абылайхана Алтынауыл д.22. моб.: +7 777 77 77
            </p></div>
            <div class="tel-number">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>Телефон:<br>77 88 99</p>
            </div>
        </div>
        <div class="right-addr">
            <div id="YMapsID">
                
            </div>
        </div>
    </section>
  
    
<?php include ROOT . "/views/layout/footer.php"?>


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
                            <li class="active"><a href="/main/index">Главная</a></li>
                            <li><a href="/zakaz">Заказ Автомойки</a></li>
                            <li><a href="##">Наши преимущества</a></li>
                            <li><a href="###">Что мы умеем</a></li>
                            <li><a href="####">Отзывы</a></li>
                            
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
                                        <li><a href="/cart">
                                <i class="fa fa-shopping-cart"></i> Корзина 
                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                            </a>           </li>
                    </div>

                    <div class="fa-bars-out">
                        <span class="phone">
                            +7(777)77-77-77    
                        </span>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </nav>

            <div class="mobNav">
                <ul>
                    <li class="active"><a href="/main/index">Главная</a></li>
                    <li><a href="/zakaz">Заказ Автомойки</a></li>
                    <li><a href="##">Наши преимущества</a></li>
                    <li><a href="###">Что мы умеем</a></li>
                    <li><a href="####">Отзывы</a></li>
                </ul>
            </div>

                        <div class="after-nav flex">
                            <div class="left">
                                <h1>АВТОМОЙКА №1 В КАЗАХСТАНЕ!</h1>
                                <ul>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">  Наши цены приятнее</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#"> У нас топовое оборудование</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#"> Мы работаем круглосуточно</a></li>
                                </ul>
                            </div>
                            <div class="right">
                                <form action="POST" class="forms">
                                    <h4>Заявка:</h4>
                                    <p>Оставьте заявку и мы свяжемся с вами в рабочее время c пн-пт.</p>
                                    <label for="">
                                        <span>Ваше имя:</span>
                                        <input type="text" name="name">
                                    </label>
                                    <label for="">
                                        <span>Ваш телефон:</span>
                                        <input type="text" name="phone">
                                    </label>
                                    <div class="button-wrap">
                                        <buttons class="buttons">Отправить</buttons>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="down">
                            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                        </div>
            </div>
        </div>
    </header>

    <section class="section1 homesect">
        <div class="wrapper">
            <h1>наши преимущества</h1>
            <div class="iconFlex flex">
                <?php foreach ($list_1 as $advantageList): ?>
                    <div class="icon_out on">
                        <i class="fa fa-<?php echo $advantageList['image_name'];?>" aria-hidden="true"></i>
                        <h2><?php echo $advantageList['name'];?></h2>
                        <p><?php echo $advantageList['description'];?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="section-bottom">
        <div class="wrapper">
            <div class="button-wrap">
                <buttons class="buttons">Заказать</buttons>
            </div>
        </div>
    </div>

    <section class="section2 homesect">
        <div class="wrapper">
            <h2 class="section2-h2">что мы умеем</h2>
            <a href="/main/sort" style="color: black;">Sort by price</a>
            <div class="wrapper_cars flex">
                <?php foreach ($list_2 as $listWork): ?>
                <div class="wrapper_car card-on">
                    <div class="car-header">
                        <h4><?php echo $listWork['header']?></h4>
                        <p><?php echo $listWork['description']?></p>
                    </div>
                    <div class="wrapper-img">
                        <img src="../../template/img/<?php echo $listWork['img']?> " alt="">
                    </div>
                    <div class="cost">от <?php echo $listWork['price']?></div>
                    <div class="button-wrap">
                        <div class="buttons"><a href="/comment/work/<?php echo $listWork['id']?>">Подробнее</a></div>
                    </div>
                    <a href="/cart/add/<?php echo $listWork['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $listWork['id'] ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="section-bottom  dark">
        <div class="wrapper">
            <div class="button-wrap">
                <buttons class="buttons">Обратиться к нам</buttons>
            </div>
        </div>
    </div>

    <section class="section3 homesect3">
        <div class="wrapper">
            <div class="section-head">
                <h2>ОТЗЫВЫ КЛИЕНТОВ</h2>
                <p>Послушайте, что о нас говорят благодарные клиенты:</p>
            </div>
            <div class="slider-wrapper owl-theme owl-carousel owl-loaded">

                <div class="slider owl-stage-outer">
                    <div class="img-wrap">
                        <img src="../../template/img/user.png" alt="">
                    </div>
                    <div class="wrapper-text">
                        <h3>Михаил Алексеевич Потапов</h3>
                        <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет.</p>
                    </div>
                </div>
                <div class="slider owl-stage-outer">
                    <div class="img-wrap">
                        <img src="../../templateimg/img/user.png" alt="">
                    </div>
                    <div class="wrapper-text">
                        <h3>Михаил Алексеевич Потапов</h3>
                        <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет.</p>
                    </div>
                </div>
                <div class="slider owl-stage-outer">
                    <div class="img-wrap">
                        <img src="../../template/img/user.png" alt="">
                    </div>
                    <div class="wrapper-text">
                        <h3>Михаил Алексеевич Потапов</h3>
                        <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Подзаголовок вскоре, деревни? Вопроса строчка пор, последний вершину заглавных единственное? Над щеке злых, залетают то безорфографичный своих текстов бросил живет.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section4 flex homesect">
        <div class="section-head">
            <div class="wrapper">
                <h2>МЫ - ПРОФЕССИОНАЛЫ!</h2>
                <p>Наши специалисты являются профессионалами высочайшего класса, лауреатами и призерами многих конкурсов и первенств в области финансов и бухгалтерии. За своими плечами имеют богатый опыт осуществления проектов в области оценки, ведения бухгалтерии, слияний и присоединений в сферах строительства, жилищно-коммунальных услуг, производства, аэрокосмической промышленности и прочих.</p>
            </div>
        </div>
        <div class="right">
            <div class="wrapper">
                <form action="" class="forms">
                    <h4>Заявка:</h4>
                    <p>Оставьте заявку и мы свяжемся с вами в рабочее время c пн-пт.</p>
                    <label for="">
                                        <span>Ваше имя:</span>
                                        <input type="text" name="name">
                                    </label>
                    <label for="">
                                        <span>Ваш телефон:</span>
                                        <input type="text" name="phone">
                                    </label>
                    <div class="button-wrap">
                        <buttons class="buttons">Отправить</buttons>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="section5 flex">
        <div class="left-addr">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            <h4>Контакты</h4>
            <div class="addr">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p>Адрес:<br>
                ул. Абылайхана Алтынауыл д.22. моб.: +7 777 77 77
            </div>
            <div class="tel-number">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>Телефон:<br>77 88 99</p>
            </div>
        </div>
        <div class="right-addr">
            <div id="YMapsID">
                
            </div>
        </div>
    </section>index
    
<?php include ROOT . "/views/layout/footer.php"?>

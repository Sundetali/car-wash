<?php include ROOT . "/views/layout/head.php"?>

<body>
    <header class="main-head">
        <div class="container">
            <div class="row">
                <nav class="nav-top flex form-nav">
                    <div class="left-nav">
                      
                        <h1>wash</h1>
                        <p>all type of cars</p>
                       
                    </div>
                    <div class="right-nav">
                        <ul>
                            <li><a href="/main/index">Главная</a></li>
                            <li class="active"><a href="/zakaz">Заказ Автомойки</a></li>
                            <li><a href="">Наши преимущества</a></li>
                            <li><a href="">Что мы умеем</a></li>
                            <li><a href="">Отзывы</a></li>
                        </ul>
                        <span class="phone">
                            +7(777)77-77-77    
                        </span>
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
                        <li><a href="/main/index">Главная</a></li>
                        <li class="active"><a href="/zakaz">Заказ Автомойки</a></li>
                        <li><a href="">Наши преимущества</a></li>
                        <li><a href="">Что мы умеем</a></li>
                        <li><a href="">Отзывы</a></li>
                    </ul>
                </div>

                <div id="wrapper">
                    <form action="" method="POST" name="vform">
                       <h4>Регистрация</h4>
                       <div><?php if(isset($errors) && is_array($errors)) echo $errors['email_check']?></div>
                        <div id="username_div">
                            <label>Имя</label> <br>
                            <input type="text" name="username" value="<?php echo $name ?>" class="textInput">
                            <div id="name_error"><?php if(isset($errors) && is_array($errors)) echo $errors['name'];?></div>
                            
                        </div>
                        <div id="email_div">
                            <label>Email</label> <br>
                            <input type="email" name="email" value="<?php echo $email ?>" class="textInput">
                            <div id="email_error"><?php if(isset($errors) && is_array($errors)) echo $errors['email'];?></div>
                        </div>
                        <div id="password_div">
                            <label>Пароль</label> <br>
                            <input type="password" name="password" value="<?php echo $password ?>" class="textInput">
                            <div id="password_error"><?php if(isset($errors) && is_array($errors)) echo $errors['password'];?></div>
                        </div>
                        <div id="pass_confirm_div">
                            <label>Повторите пароль</label> <br>
                            <input type="password" name="password_confirm" value="<?php echo $password_confirm ?>" class="textInput">
                            <div id="password_error_confirm"></div>
                        </div>
                        <div class="out-btn">
                            <input type="submit" name="submit" value="зарегистрироваться" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <footer class="homesect2">
        <div class="wrapper">
            <nav class="nav-top flex">
                <div class="left-nav">
                    <h1>wash</h1>
                    <p>all type of cars</p>
                </div>
                <div class="right-nav">
                    <p>© 2017 - 2018 Официальный сайт АВТОМОЙКИ WASH car. Все права защищены.Копирование материалов сайта возможно только с указанием ссылки на источник.</p>
                </div>
                <div class="address">
                    <ul>
                        <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>
    <div class="top">
        <div class="wrapper">
            <icon class="fa fa-angle-double-up"></icon>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../template/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
    <script src="../../components/js/main.js"></script>
</body>
</html>

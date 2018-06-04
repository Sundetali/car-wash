
<?php include ROOT . "/views/layout/head.php"?>
<style>
    form {
        color: #000;
    }
    .section2 a {
        color: #000!important;
    }
</style>
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
                            <li class="active"><a href="/main/index/">Главная</a></li>
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
                
                <section class="section2 homesect" style="width: 100%;">
        <div class="">
            <div class="wrapper_cars flex">
                <?php foreach ($list as $listWork): ?>
                <div class="wrapper_car card-on">
                    <div class="car-header">
                        <h4><?php echo $listWork['header']?></h4>
                        <p><?php echo $listWork['description']?></p>
                    </div>
                    <div class="wrapper-img">
                        <img src="../../template/img/<?php echo $listWork['img']?> " alt="">
                    </div>
                    <div class="cost">от <?php echo $listWork['price']?></div>
                    
                    <a href="/cart/" class="btn btn-default add-to-cart" 
                       data-id="<?php echo $listWork['id'] ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                </div>
                <?php endforeach; ?>
                
            </div>
            <?php if(!User::isGuest()):?>
                    <form action="" method="POST">
                        <?php foreach($listComment as $list):?>
                        <div class="form-group">
                          <label for="example" name="user">коментарий от <?php echo $list['user']?></label>
                          
                          <?php if($_SESSION['user'] == $list['user']):?>
                          <textarea class="form-control same1 <?php echo $list['id']?>" id="" rows="3" cols="40" name="comment"  style="margin-bottom:20px;"><?php echo $list['comment']?></textarea>
                          
                          <input type="submit" name="removeComment" value="удалить<?php echo $list['id']?>">
                          <!--input type="button" name="editComment" id="<?php echo $list['id']?>" class="same2" value="изменить<?php echo $list['id']?>"-->
                          <input type="submit" name="saveComment" id="<?php echo $list['id']?>" class="" value="изменить<?php echo $list['id']?>">
                          <?php else:?>
                          <textarea readonly="readonly" class="form-control" id="example" rows="3" cols="40" name="comment"><?php echo $list['comment']?></textarea>
                          <?php endif;?>
                          
                          <div><?php echo $out?></div>
                        </div>
                        <?php endforeach;?>
                    </form>
            
                    <form action="" method="POST">
                        <div class="form-group">
                          <label for="example">Ваш коментарий</label>
                          <textarea class="form-control" id="example" rows="3" cols="40" name="comment"></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Отправить">
                    </form>
            <?php else:?>
                    <a href="/user/login">вы должны зайти на сайт</a>
            <?php endif;?>
        </div>
    </section>

            </div>
        </div>
    </header>



       
    
<?php include ROOT . "/views/layout/footer.php"?>



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
                            <a class="active" href="/cart">
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

            <div class="mobNav">
                <ul>
                    <li class="active"><a href="/main/index">Главная</a></li>
                    <li><a href="/zakaz">Заказ Автомойки</a></li>
                    <li><a href="##">Наши преимущества</a></li>
                    <li><a href="###">Что мы умеем</a></li>
                    <li><a href="####">Отзывы</a></li>
                </ul>
            </div>

        </div>
         <div class="row">
         
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>
                    <?php if(Cart::countItems() > 0):?>
                        <?php if ($productsInCart): ?>
                            <p>Вы выбрали такие товары:</p>
                            <form action="" method="POST">
                            <table class="table-bordered table-striped table">
                                <tr>
                                    <th>Код товара</th>
                                    <th>Название</th>
                                    <th>Стомость, грн</th>
                                    <th>Количество, шт</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td><?php echo $product['id'];?></td>
                                        <td>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['header'];?>
                                            </a>
                                        </td>
                                        <td><?php echo $product['price'];?></td>
                                        <td><?php echo $productsInCart[$product['id']];?></td>                        
                                        <td>
                                            <a class="btn btn-default checkout" href="/cart/delete/<?php echo $product['id'];?>">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>                        
                                    </tr>
                                <?php endforeach; ?>
                                    <tr>
                                        <td colspan="4">Общая стоимость, грн:</td>
                                        <td><?php echo $totalPrice;?></td>
                                    </tr>

                            </table>
                            <input type="submit" name="cart" value="send"> 
                            </form>
                        <?php endif; ?>
                    <?php else: ?>
                        <p>Корзина пуста</p>
                        <a class="btn btn-default checkout" href="/main/index"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                    <?php endif;?>    
                </div>

                
                
            </div>
        </div>   
        </div>
    </header>
    

<?php include ROOT . "/views/layout/footer.php"?>

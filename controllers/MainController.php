<?php

include_once ROOT . "/models/Main.php";
include_once ROOT . "/models/User.php";
include_once ROOT . "/models/Cart.php";


class MainController {
    
    public function actionIndex() {
        Cart::countItems();
        $list_1 = Main::getAdvantage();
        
        $list_2 = Main::getWork();
        
        $chekUser = User::isGuest();
        
        require ROOT . "/views/main_site/index.php";
        
        return true;
       
    }
     public function actionSort() {
        Cart::countItems();
        $list_1 = Main::getAdvantage();
        
        $list_3 = Main::getWorkSort();
        
        $chekUser = User::isGuest();
        
        require ROOT . "/views/main_site/main_1.php";
        
        return true;
       
    }
}


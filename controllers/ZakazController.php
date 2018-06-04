<?php

include_once ROOT . "/models/Zakaz.php";
include_once ROOT . "/models/User.php";
include_once ROOT . "/models/Cart.php";


class ZakazController {
    
    public function actionList() {
        
        $list = Zakaz::getZakaz();
        require ROOT . "/views/zakaz/index.php";
        
        return true;
       
    }
}


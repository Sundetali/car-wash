<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormmController
 *
 * @author sundet
 */
class FormmController {
    //put your code here
    public function actionIndex() {
        
        if(isset($_POST['qwe'])) {
            $db = DB::getConnection();
            $address= $_POST['addr'];
            $number= $_POST['number'];
            $result = $db->query("Insert into tablee (address, number) VALUES ('$address', '$number')" );
            
            echo $address . "" . $number;
        }
        require ROOT . "/views/main_site/formm.php";
    }
}

<?php

include_once ROOT . "/models/Admin.php";

class AdminController {
    public function actionIndex() {
        $list = Admin::getList();
            if($_SESSION['user']!='sundet9810@gmail.com'){
                header("Location: /main/index");
            }
            else {                
                echo $_SESSION['user'];
                require_once(ROOT . '/views/admin/index.php');

            }
        
        return true;
    }
    public function actionUpdate($id) {
        $list = Admin::getList();
        $resultUpdate = false;
        $resultDelete = false;
        $resultInsert = false;
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $header = $_POST['header'];
            $description = $_POST['description'];
            $img = $_POST['img'];
            $price = $_POST['price'];
              
            $resultUpdate = Admin::updateElements($id, $header, $description, $img, $price);
            
        }
        require_once(ROOT . '/views/admin/update.php');
        return true;
    }
    public function actionDelete($id) {
        $list = Admin::getList();
        
        $db = Db::getConnection();
        
            $result = $db -> query("Delete from work where id='$id'");
            if($result) {
                
                $resultDelete = true;
            }
            $i=0;
        
        $resultDelete = false;
        
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $header = $_POST['header'];
            $description = $_POST['description'];
            $img = $_POST['img'];
            $price = $_POST['price'];
              
            $resultDelete = Admin::deleteElement($id);
            
        }
        require_once(ROOT . '/views/admin/delete.php');
        return true;
    }
    public function actionInsert() {

        $list = Admin::getList();

        $resultInsert = false;
        if (isset($_POST['submit'])) {
            $header = $_POST['header'];
            $description = $_POST['description'];
            $img = $_POST['img'];
            $price = $_POST['price'];
              
            $resultInsert = Admin::insertElements($header, $description, $img, $price);
            
        }
       
        require_once(ROOT . '/views/admin/insert.php');
        return true;
    }
}

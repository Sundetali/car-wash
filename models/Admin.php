<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author sundet
 */
class Admin {
    public static function getList() {
        
        $db = Db::getConnection();
        
            $result = $db -> query('SELECT * FROM work');
            $i=0;
            while($row = $result->fetch_assoc()) {
                        $advantageList[$i]['id']=$row['id'];
                        $advantageList[$i]['header']=$row['header'];
                        $advantageList[$i]['description']=$row['description'];
                        $advantageList[$i]['img']=$row['img'];
                        $advantageList[$i]['price']=$row['price'];
                        $i++;
            }    
            return $advantageList;      
    }
    public static function updateElements($id, $header, $description, $img, $price) {
        $db = Db::getConnection();
        $result = $db -> query("UPDATE work SET "
                . "header = '$header',description = '$description',img = '$img',price = '$price'"
                . "WHERE id='$id'");
  
        if($result) {
            return true;
        }
        return false;
    }
    
    public static function deleteElement($id) {
        $db = Db::getConnection();
        $result = $db->query("DELETE FROM work WHERE id='$id'");
  
        if($result) {
            return true;
        }
        return false;
    }
    
    public static function insertElements($header, $description, $img, $price) {
        $db = Db::getConnection();
        $result = $db -> query("INSERT INTO work 
            (header, description, img, price)
            VALUES ('$header', '$description', '$img', '$price')");
  
        if($result) {
            return true;
        }
        return false;
    }
    
}

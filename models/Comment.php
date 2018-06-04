<?php

class Comment {
    public static function getListById($id) {
        
        $db = Db::getConnection();
        
            $result = $db -> query("SELECT * FROM work WHERE id = '$id' ");
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
    public static function sentComment($id_element, $comment, $user) {
        $db = Db::getConnection();
        
        $result = $db ->query("INSERT INTO Comment (comment, user, id_element)"
                . "VALUES ('$comment', '$user', $id_element)");
        
        return $result;   
    }
    
    public static function getComment($id) {
        $db = Db::getConnection();
        $list = array();
        $result = $db ->query("SELECT * FROM Comment Where id_element = '$id' ");
        
        $i = 0;
        
        while($row = $result->fetch_assoc()) {
                    $list[$i]['id']=$row['id'];
                    $list[$i]['comment']=$row['comment'];
                    $list[$i]['user']=$row['user'];
                    $list[$i]['id_element']=$row['id_element'];
                    $i++;
        }
        return $list;

    }
    public static function removeComment($id) {
        
        $db = Db::getConnection();
        
        $result = $db->query("DELETE FROM Comment WHERE id='$id'");
        echo $result;
        
        return $result;
        
    }
    
}
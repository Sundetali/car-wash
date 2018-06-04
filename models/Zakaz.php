<?php

class Zakaz {
    
    public static function getZakaz() {
        //connection 
        $db = Db::getConnection();
        //select data
        $result = $db->query('SELECT * FROM zakaz');
        $advantageList = array();
        $i=0;
        while($row = $result->fetch_assoc()) {
                    $advantageList[$i]['img']=$row['img'];
                    $advantageList[$i]['name']=$row['name'];
                    $advantageList[$i]['description']=$row['description'];
                    $i++;
            }
        //$elements = $result->fetch();
        
        return $advantageList;
    }
}
    
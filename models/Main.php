<?php

class Main {
    
    public static function getAdvantage() {
        //connection 
        $db = Db::getConnection();
        //select data
        $result_1 = $db->query('SELECT * FROM advantage');
        $advantageList = array();
        $i=0;
        while($row = $result_1->fetch_assoc()) {
                    $advantageList[$i]['image_name']=$row['image_name'];
                    $advantageList[$i]['name']=$row['name'];
                    $advantageList[$i]['description']=$row['description'];
                    $i++;
            }
        //$elements = $result->fetch();
        return $advantageList;
    }
    
    public static function getWork() {
        $db_2 = Db::getConnection();
        
        $result_2 = $db_2->query('SELECT * FROM work');
        $i=0;
        while($row = $result_2->fetch_assoc()) {
                    $advantageList[$i]['id']=$row['id'];
                    $advantageList[$i]['header']=$row['header'];
                    $advantageList[$i]['description']=$row['description'];
                    $advantageList[$i]['img']=$row['img'];
                    $advantageList[$i]['price']=$row['price'];
                    $i++;
            }
        //$elements = $result->fetch();
       
            return $advantageList;
        
    }
     public static function getWorkSort() {
        $db_2 = Db::getConnection();
        
        $result_2 = $db_2->query('SELECT * FROM work order by price');
        $i=0;
        while($row = $result_2->fetch_assoc()) {
                    $advantageList[$i]['id']=$row['id'];
                    $advantageList[$i]['header']=$row['header'];
                    $advantageList[$i]['description']=$row['description'];
                    $advantageList[$i]['img']=$row['img'];
                    $advantageList[$i]['price']=$row['price'];
                    $i++;
            }
        //$elements = $result->fetch();
       
            return $advantageList;
        
    }
    public static function getProdustsByIds($idsArray)
    {
        $advantageList = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM Work WHERE id IN ($idsString)";

        $result = $db->query($sql);        
        
        $i = 0;
        
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

}
	

		


<?php

class Db
{

		public static function getConnection()
		{
                    $paramsPath = ROOT . '/config/db_params.php';
                    $params = include($paramsPath);
                    
                    //connection
                    $localhost = 'localhost';
                    $db = 'car_washing';
                    $user = 'root';
                    $password = '';
                    
                    $mysqli = new mysqli($localhost, $user, $password, $db);
                    $mysqli->set_charset("utf8");
                    
                    if ($mysqli->connect_errno) {
                        echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
                    }
			return $mysqli;
		}
}
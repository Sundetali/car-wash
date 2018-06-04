<?php
class User
{
    public static function register($name, $email, $password) {
        
        $db = Db::getConnection();
        
        $sql = "INSERT INTO `car_washing`.`user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
        
        $result = $db->query($sql);
        if($result) {
            header("Location: /user/login");
        }
        /*$result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        */
        return $result;
    }
    
    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет email
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    public static function checkEmailExists($email) {
        
        $db = Db::getConnection();
        
        $sql = "SELECT COUNT(email) as email_num FROM user Where email = '$email'";
        $result = $db->query($sql);
        $result = $result->fetch_assoc();
        if(is_array($result)){
            return $result['email_num'];
        }
        return false;
    }
    
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = "SELECT COUNT(email) as email_num FROM user WHERE email = '$email' AND password = '$password' ";

        $result = $db->query($sql);
        
        $result = $result->fetch_assoc();
        if(is_array($result)){
            return $result['email_num'];
        }
        return 0;
    }
    public static function auth($email)
    {    
        $_SESSION['user'] = $email;
    }
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
                return false;
            }
        return true;
    }
}
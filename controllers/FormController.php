<?php

include_once ROOT . "/models/User.php";

class FormController
{

    public function actionRegister()
    { 
        $name = '';
        $email = '';
        $password = '';
        $password_confirm = '';
        
        $result = false;
        $errors = "";
        
        if (isset($_POST['submit'])) {
            
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $yes = true;
            
            if (!User::checkName($name)) {
                $errors['name'] = 'Имя не должно быть короче 2-х символов';
                $yes = false;
            }
            else {
                $errors['name'] = '';
            }
            if (!User::checkEmail($email)) {
                $errors['email'] = 'Неправильный email';
                $yes = false;
            }
            else {
                $errors['email'] = '';
            }
            
            if (!User::checkPassword($password)) {
                $errors['password'] = 'Пароль не должен быть короче 6-ти символов';
                $yes = false;
            }
            else {
                $errors['password']='';
            }
            if (User::checkEmailExists($email) == 1) {
                $errors['email_check'] = 'Такой email уже используется';
            }
            else if (User::checkEmailExists($email) != 1 && $yes) {
                $result = User::register($name, $email, $password);
                $errors['email_check'] = '';
            }
            else {
                $errors['email_check'] = '';
            }
        }
        require_once(ROOT . '/views/user/register.php');
        return true;
    }
    
    public function actionLogin()
    {
        $email = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors['email'] = 'Неправильный email';
            }
            else {
                $errors['email'] = '';
            }
            if (!User::checkPassword($password)) {
                $errors['password'] = 'Пароль не должен быть короче 6-ти символов';
            }
            else {
                $errors['password'] = '';
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            
            if ($userId == 0) {
                // Если данные неправильные - показываем ошибку
                $errors['email_check'] = 'Неправильные данные для входа на сайт';
            } 
            else {
                // Если данные правильные, запоминаем пользователя (сессия)
                $errors['email_check'] = '';
                User::auth($email);
                //require_once(ROOT . '/views/main_sait/index.php');
                $userName = $email;
            }
        }
        
        require(ROOT . '/views/user/login.php');
        
        return true;
    }
    
    public function actionLogout() {
        unset($_SESSION['name']);
        session_destroy();
        header("Locaiton: /main");
    }

}

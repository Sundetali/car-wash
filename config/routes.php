<?php
    
return array(
        'main/index' => 'main/index',
        'main/sort' => 'main/sort',
        'main' => 'main/index',
        '' => 'main/index',
        'zakaz' => 'zakaz/list',
        
        'user/register' => 'form/register',
        'user/login' => 'form/login',
        'user/logout' => 'form/logout',
        'user' => 'form/login',
        
        'cart/add/([0-9]+)' => 'cart/add/$1', 
        'cart/delete/([0-9]+)' => 'cart/delete/$1',
        'cart' => 'cart/index',
        
        'admin/insert' => 'admin/insert',    
        'admin/update/([0-9]+)' => 'admin/update/$1',
        'admin/delete/([0-9]+)' => 'admin/delete/$1',
        'admin' => 'admin/index',
        
        'comment/work/([0-9]+)' => 'comment/work/$1', 
       'formm' => 'formm/index'
    );
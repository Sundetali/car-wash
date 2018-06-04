<?php

include_once ROOT . "/models/Comment.php";

include_once ROOT . "/models/Cart.php";
include_once ROOT . "/models/User.php";

class CommentController {

    public function actionWork($id) {
        
        $list = Comment::getListById($id);
        
        $out='';
        
        if(isset($_POST['removeComment'])) {
            $str = $_POST['removeComment'];
            
            preg_replace('/[^\d]*/m','',$str);
            preg_match_all('/[\d]+/',$str,$pocket);
            print_r($pocket);
            
            $n = $pocket[0][0];
            $db = Db::getConnection();
            
            $result = $db->query("DELETE FROM Comment WHERE id='$n'");
        }
        if(isset($_POST['saveComment'])) {
            $str = $_POST['saveComment'];
            $newComment = $_POST['comment'];
            echo $_POST['comment'];
            echo $newComment;
            preg_replace('/[^\d]*/m','',$str);
            preg_match_all('/[\d]+/',$str,$pocket);
            print_r($pocket);
            
            $n = $pocket[0][0];
            $db = Db::getConnection();
            
            $result = $db->query("UPDATE Comment SET Comment.comment='$newComment' WHERE id='$n'");
        }
        
        
        
        if(isset($_POST['submit'])) {
            $id_element = $id;
            $comment = $_POST['comment'];
            $user = $_SESSION['user'];
            
            $result = Comment::sentComment($id_element, $comment, $user);
               
        }
        
        
        
        $listComment = Comment::getComment($id);
        
        require_once(ROOT . '/views/comment/index.php');
        
        return true;
    }
}

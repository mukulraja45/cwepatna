<?php
    require "../import_library.php";
    if(isset($_POST['post_id']) && !(isset($_POST['comment'])))
    {
        $res=$pos->likedislike($_POST['post_id']);
        if($res!=FALSE)
        {
            echo $res;
        }
        else
        echo 'failed';
    }
    if(isset($_POST['post_id']) && isset($_POST['comment']))
    {
        $res=$pos->savecomment($_POST['post_id'],$_POST['comment']);
        if($res!=FALSE)
        {
            echo $res;
        }
        else
        echo 'failed';
    }
    if(isset($_POST['cpost_id']) && isset($_POST['getcomment1']))
    {
        $res=$pos->getallcomment($_POST['cpost_id']);
       
    }
     
    
?>
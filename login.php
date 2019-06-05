<?php

    session_start();

    //unset($_SESSION['user_name']);die;

    if(empty($_GET['u'])){
        echo '请输入用户名';
    }else{
        //写入session
        $_SESSION['user_name'] = $_GET['u'];
    }


    echo '<pre>';print_r($_SESSION);echo '</pre>';



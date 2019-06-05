<?php

    session_start();


    if(isset($_SESSION['user_name'])){
        echo '已登录';
    }else{
        echo '请登录';
    }


echo '<pre>';print_r($_SESSION);echo '</pre>';echo '<hr>';

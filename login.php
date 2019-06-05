<?php

    session_start();

    $user_name = $_GET['u'];

    //写入session

    $_SESSION['user_name'] = $user_name;

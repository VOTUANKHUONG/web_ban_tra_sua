<?php
    $act='dangky';
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'dangky':
            include './View/registration.php';
            break;
        case 'dangky_action':
            //chuyen nhung thong tin nhu tenkh, sdt, ...
            if(isset($_POST['txttenkh']))
            {
                $tenkh=$_POST['txttenkh'];
                $diachi=$_POST['txtdiachi'];
                $sodt=$_POST['txtsodt'];
                $username=$_POST['txtusername'];
                $email=$_POST['txtemail'];
                $pass=$_POST['txtpass'];
                //tien hanh ma hoa pass
                $crypt=md5($pass);//ma hoa ra
                //truoc khi insert vao kiem tra xem username do da ton tai trong database hay chua
                //controller yeu cau 
                $us = new user();
                $check=$us->InsertUser($tenkh, $username, $crypt, $email, $diachi, $sodt);
                if($check!='false')
                {
                    echo '<script> alert("Register Success");</script>';
                    include "./View/home.php";
                }
                else
                {
                    echo '<script> alert("Register Failure");</script>';
                    include "./View/registration.php";
                }
            }
    }
   
?>
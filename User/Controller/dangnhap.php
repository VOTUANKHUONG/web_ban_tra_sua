<?php
    $act='dangnhap';
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'dangnhap':
            include "./View/login.php";
            break;
        case 'dangnhap_action':
            //truyen qua user va pass
            if(isset($_POST['txtusername'])&& isset($_POST['txtpassword']))
            {
                $user=$_POST['txtusername'];
                $pass=md5($_POST['txtpassword']);
                //so sanh trong database co thi tuc la da dc dang ky
                $us= new user();
                $ur=$us->loginUser($user, $pass);
                //$ur[makh= 18; ]
                //echo var_dump($ur);
                if($ur!=false)
                {
                    //tao ra $_SESSION de chua thong tin cua khach hang
                    //neu dang nhap thanh cong tuc la co thong tin trong database
                    //dem thong tin do luu vao session
                    $_SESSION['makh']=$ur['makh'];
                    $_SESSION['tenkh']=$ur['tenkh'];
                    $_SESSION['username']=$ur['username'];
                    //dang nhap thanh cong quay ve trang chu
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                }
                else{
                    echo '<script> alert("Login Failure");</script>';
                    include "./View/registration.php";
                }
            }
            break;
        case 'logout':
            if(isset($_SESSION['makh']))
            {
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                unset($_SESSION['username']);
                unset($_SESSION['cart']);
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
            }
            break;
    }
?>
<?php
$act = 'login';
if(isset($_GET['act'])){
   $act = $_GET['act'];
}
switch($act){
   case 'login':
      include_once './View/login.php';
      break;
      case 'login_act':
         if(isset($_POST['txtusername']) && isset($_POST['txtpassword'])){
            $username = $_POST['txtusername'];
            $password = $_POST['txtpassword'];
            $us = new user();
            $result = $us->loginUser($username,md5($password));
            if($result){
               // lưu thông tin vào session 
               echo '<script>alert("Đăng nhập thành công")</script>';

               $_SESSION['makh']=$result['makh'];
               $_SESSION['tenkh']=$result['tenkh'];
               $_SESSION['username']=$result['username'];
               echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=homeCtrl"/>';
            }
            else{
               echo '<script>alert("Đăng nhập không thành công")</script>';
               include_once './View/login.php';
            }
         }
         break;
         case 'logout':
            if(isset($_SESSION['makh'])):
            unset($_SESSION['makh']);
            unset($_SESSION['tenkh']);
            unset($_SESSION['username']);
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=homeCtrl"/>';
            endif;
         }
include_once './View/login.php';
?>
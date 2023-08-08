<?php 
 $act = 'register';
 if(isset($_GET['act'])){
   $act = $_GET['act'];
 }
 switch($act){
   case 'register':
      include_once './View/registration.php';
      break;
   case 'regis_act':
         if(isset($_POST['txttenkh'])){
            $tenkh = $_POST['txttenkh'];
            $diachi = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $username = $_POST['txtusername'];
            $pass = $_POST['txtpass'];
            $email = $_POST['txtemail'];
            $ur = new user();
            $alert = $ur ->checkUser($username);
            if($alert){
               echo "<script>alert('Tên đăng nhập đã tồn tại 🥲')</script>";
               include_once './View/registration.php';
            }
            else{
                $check = $ur ->InsertUser($tenkh,$username, md5($pass),$email,$diachi,$sodt);
               if($check != 'false'){
                  echo '<script>alert("Đăng kí thành công 😁")</script>';
                  include_once './View/home.php';
               }
               else{
                  echo '<script>alert("Đăng kí thất bại 😒🥲")</script>';
                  include_once './View/registration.php';
               }
             }
         
         }

 }
?>
<?php
    $act="forgetps";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'forgetps':
            include "./View/forgetpassword.php";
            break;
        case 'forgetps_action':
            if(isset($_POST['submit_email']))
            {
                $email=$_POST['email'];
                $_SESSION['email']=array();
                // ktra $email co ton tai trong database
                $urs=new user();
                $checkemail=$urs->getEmail($email);
                if($checkemail!=false)
                {
                    // tien hang cap ma code
                    $code=random_int(1000,10000);
                    // tao doi tuong
                    $item=array(
                        'code'=>$code,
                        'email'=>$email,
                    );
                    $_SESSION['email'][]=$item;
                    // tien hanh gui email
                    $mail = new PHPMailer;
                    $mail->IsSMTP();								//Sets Mailer to send message using SMTP
                    $mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
                    $mail->Port = 587;								//Sets the default SMTP server port
                    $mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
                    $mail->Username = 'votuankhuong.2711@gmail.com';					//Sets SMTP username
                    $mail->Password = '0335266221@Khuong';//Phplytest20@php					//Sets SMTP password
                    $mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
                    $mail->From = 'votuankhuong.2711@gmail.com';					//Sets the From email address for the message
                    $mail->FromName = 'Skhuong';				//Sets the From name of the message
                    $mail->AddAddress($email,"User");		//Adds a "To" address
                    //$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
                    $mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
                    $mail->IsHTML(true);							//Sets message type to HTML				
                    $mail->Subject = "Reset password";				//Sets the Subject of the message
                    $mail->Body = "Cấp mã code".$code;				//An HTML or plain text message body
                    if($mail->Send())								//Send an Email. Return true on success or false on error
                    {
                        echo '<script> alert("Gửi mail thành công");</script>';
                        include "./View/resetpw.php";
                    }
                    else
                    {
                        echo '<script> alert("Gửi mail thất bại");</script>';
                        include "./View/forgetpw.php";
                    }
                }
                else{
                    echo '<script> alert("Email không tồn tại");</script>';
                    include "./View/forgetpw.php";
                }
            }
            break;
        case 'resetps':
            include "./View/resetpw.php";
            break;
        case 'resetpw_action':
            $password=$_POST['password'];
            $cdau='#GHED^7';
            $csau='!45GHT';
            $codenew=md5($cdau.$password.$csau);
            $emailold='admin';
            $urs=new user();
            $urs->updataCode($emailold,$codenew);
            include "./View/dangnhap.php";
            break;
    }
?>
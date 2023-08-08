<?php
    $act="khachhang";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) 
    {
        case 'khachhang':
            include "./View/khachhang.php";
            break;
        case 'editkh':
            include "./View/editkhachhang.php";
            break;
        case 'editkh_action':
                if(isset($_GET['makh']))
                {
                    $makh=$_GET['makh'];
                    $tenkh = $_POST['tenkh'];
                    $username = $_POST['username'];
                    $email=$_POST['email'];
                    $diachi=$_POST['diachi'];
                    $sodienthoai = $_POST['sodienthoai'];
                    
                    // yêu cầu update dựa mã hh
                    $kh=new khachhang();
                    $kh->update_kh($makh,$tenkh,$username,$email,$diachi,$sodienthoai);
                    // echo var_dump($check);
                    if(isset($kh))
                    {
                        echo '<script> alert("Update thành công")</script>';
                        echo '<meta http-equiv=refresh content="0;url=./index.php?action=khachhang&act=khachhang"/>';
                        // include "./View/loai_hh.php";
                    }
                    else
                    {
                        echo '<script> alert("Update ko thành công")</script>';
                        echo '<meta http-equiv=refresh content="0;url=./index.php?action=khachhang&act=khachhang"/>';
                        // include "./View/editloaisanpham.php";
                    }
        
                }
                break;
        case 'xoakh':
            if(isset($_GET['makh']))
            {
                $makh=$_GET['makh'];
                // yêu cầu update dựa mã hh
                $kh=new khachhang();
                $dk = $kh->delete_kh($makh);
                // echo var_dump($check);
                if($dk==0)
                {
                    echo '<script> alert("Xoa thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=khachhang&act=khachhang"/>';
                    //include "./View/loai_hh.php";
                }
                else
                {
                    echo '<script> alert("Xoa ko thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=khachhang&act=khachhang"/>';
                    //include "./View/hanghoa.php";
    
                }
    
            }
            break;
    }
?>
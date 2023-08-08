<?php
    $act = 'hanghoa';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'hanghoa':
            include './View/hanghoa.php';
            break;
        case 'themsp':
            include "./View/edithanghoa.php";
            break;
        
        case 'edit':
            include "./View/edithanghoa.php";
            break;
        case 'edit_action':
            if(isset($_GET['id']))
            {
                $mahh=$_GET['id'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['dongia'];
                $giamgia = $_POST['giamgia'];
                $hinh = $_FILES['image']['name'];
                $Nhom=$_POST['nhom'];
                $maloai = $_POST['maloai'];
                $dacbiet = $_POST['dacbiet'];
                $soluotxem = $_POST['slx'];
                $ngaylap = $_POST['ngaylap'];
                $mota = $_POST['mota'];
                $soluongton =$_POST['slt'];
                $hh = new hanghoa();
                $hh->updatesp($mahh, $tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton);
                include './View/hanghoa.php';
            }
            break;
        case 'insert':
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['dongia'];
                $giamgia = $_POST['giamgia'];
                $hinh = $_FILES['image']['name'];
                $Nhom=$_POST['nhom'];
                $maloai = $_POST['maloai'];
                $dacbiet = $_POST['dacbiet'];
                $soluotxem = $_POST['slx'];
                $ngaylap = $_POST['ngaylap'];
                $mota = $_POST['mota'];
                $soluongton = $_POST['slt'];
                $hh = new hanghoa();
                $hh->insertsp($tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton);
                include './View/hanghoa.php';
                break;
        case 'xoa':
                if(isset($_GET['id']))
                {
                    $xoa=$_GET['id'];
                    // yêu cầu update dựa mã hh
                    $hh=new hanghoa();
                    $dk = $hh->delete($xoa);
                    // echo var_dump($check);
                    if($dk==0)
                    {
                        echo '<script> alert("Xóa thành công")</script>';
                        echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                    }
                    else
                    {
                        echo '<script> alert("Xoa ko thành công")</script>';
                        echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
        
                    }
        
                }
                break;
    }
    
?>
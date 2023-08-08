<?php
    $act="cthoadon";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) 
    {
        case 'cthoadon':
            include "./View/cthoadon.php";
            break;
        case 'edit_cthd':
            include "./View/editcthoadon.php";
            break;
        case 'edit_cthd_action':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $mahh=$_POST['mahh'];
                $soluongmua=$_POST['soluongmua'];
                $size=$_POST['size'];
                $thanhtien=$_POST['thanhtien'];
                $tinhtrang=$_POST['tinhtrang'];
                
                // yêu cầu update dựa mã hh
                $hh=new hoadon();
                $hh->update_cthd($id,$mahh,$soluongmua,$size,$thanhtien,$tinhtrang);
                // echo var_dump($check);
                if(isset($hh))
                {
                    echo '<script> alert("Update thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthoadon&act=cthoadon"/>';
                    include "./View/loaihh.php";
                }
                else
                {
                    echo '<script> alert("Update ko thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthoadon&act=cthoadon"/>';
                    // include "./View/editloaisanpham.php";
                }
    
            }
            break;
        case 'xoa_cthoadon':
            if(isset($_GET['id']))
            {
                $masohd=$_GET['id'];
                // yêu cầu update dựa mã hh
                $hh=new hoadon();
                $dk = $hh->delete_cthoadon($masohd);
                // echo var_dump($check);
                if($dk==0)
                {
                    echo '<script> alert("Xóa thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthoadon&act=cthoadon"/>';
                    //include "./View/loaihh.php";
                }
                else
                {
                    echo '<script> alert("Xóa ko thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthoadon&act=cthoadon"/>';
                    //include "./View/hanghoa.php";
    
                }
    
            }
            break;
    }
?>
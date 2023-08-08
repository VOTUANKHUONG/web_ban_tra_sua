<?php
    $act="hoadon";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) 
    {
        case 'hoadon':
            include "./View/hoadon.php";
            break;
        case 'edit_hd':
            include "./View/edithoadon.php";
            break;
        case 'edithd_action':
            if(isset($_GET['masohd']))
            {
                $id=$_GET['masohd'];
                $makh=$_POST['makh'];
                $ngaydat=$_POST['ngaydat'];
                $tongtien=$_POST['tongtien'];
                
                // yêu cầu update dựa mã hh
                $hh=new hoadon();
                $hh->update_hd($id,$makh,$ngaydat,$tongtien);
                // echo var_dump($check);
                if(isset($hh))
                {
                    echo '<script> alert("Update thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hoadon&act=hoadon"/>';
                    // include "./View/loai_hh.php";
                }
                else
                {
                    echo '<script> alert("Update ko thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hoadon&act=hoadon"/>';
                    // include "./View/editloaisanpham.php";
                }
    
            }
            break;
        case 'xoa_hoadon':
            if(isset($_GET['id']))
            {
                $masohd=$_GET['id'];
                // yêu cầu update dựa mã hh
                $hh=new hoadon();
                $dk = $hh->delete_cthoadon($masohd);
                // echo var_dump($check);
                if($dk==0)
                {
                    echo '<script> alert("Xoa thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hoadon&act=hoadon"/>';
                    //include "./View/loai_hh.php";
                }
                else
                {
                    echo '<script> alert("Xoa ko thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hoadon&act=hoadon"/>';
                    //include "./View/hanghoa.php";
    
                }
    
            }
            break;
    }
?>
<?php 
    if(isset($_SESSION['makh'])) {
        $hd = new hoadon();
        $sohd = $hd->InsertOrder($_SESSION['makh']);
        $tongtien= 0;
        $_SESSION['masohd']=$sohd;
        foreach($_SESSION['cart'] as $key=>$item) {
            $hd->insertOrderDetail($sohd,$item['mahh'],$item['soluong'], $item['tongtien'] );
            $tongtien += $item['tongtien'];
        }
        $hd->updateOrderTotal($sohd,$tongtien);
        include "./View/order.php";
    }

    else {
        echo "<script type='text/javascript'> alert('bạn chưa đăng nhập mà?! 🤦'); </script>";
        include "./View/login.php";
    }

?>
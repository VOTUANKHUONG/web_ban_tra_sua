<?php
    class prod{
        function __construct(){}
        // thống kê sp bán dc
        function getThongKeMatHang()
        {
            $db=new connect();
            $query="select a.ten_sp,sum(b.soluongmua) as soluong,c.ngaydat
            from giotraicay a, cthoadon b, hoadon c
            where a.ma_sp=b.ma_sp and b.masohd=c.masohd
            and day(c.ngaydat)=10 and month(c.ngaydat)=2 and year(c.ngaydat)=2023
            GROUP by a.ten_sp, c.ngaydat;";
            $result=$db->getList($query);
            return $result;
        }
    }
?>
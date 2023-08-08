<?php 
    class hoadon{
        function __construct()
        {
            
        }

        function InsertOrder($makh) {
            $db = new connect();
            $date = new DateTime("now");
            $datecreate=$date->format('Y-m-d');
            $query = "INSERT INTO hoadon1(masohd,makh,ngaydat,tongtien)
                    values(null,$makh,'$datecreate','0')";
            $db->exec($query);
            $int = $db->getInstance("SELECT masohd FROM hoadon1 order by masohd desc limit 1");
            return $int[0];
        }

        function insertOrderDetail($masohd, $mahh, $soluongmua, $thanhtien) {
            $db = new connect();
            $query = "INSERT INTO cthoadon1(masohd, mahh, soluongmua,thanhtien, tinhtrang)
            value($masohd, $mahh, $soluongmua, $thanhtien, 0)";
            $db->exec($query);
        }

        function updateOrderTotal($sohd, $tongtien) {
            $db = new connect();
            $query = "UPDATE hoadon1 set tongtien = $tongtien WHERE masohd = $sohd";
            $db->exec($query);
        }

        function getOrder($sohdid) {
            $db = new connect();
            $select = "SELECT b.masohd, a.tenkh, a.diachi, a.sodienthoai, b.ngaydat FROM khachhang1 a 
                        INNER JOIN hoadon1 b on a.makh=b.makh 
                        where b.masohd= $sohdid";
            $result = $db->getInstance($select);
            return $result;
        }

        function getOrderDetail($sohdid) {
            $db = new connect();
            $select = "SELECT a.tenhh, a.dongia,  b.soluongmua, b.thanhtien 
                        FROM hanghoa a INNER JOIN cthoadon1 b ON a.mahh=b.mahh WHERE masohd=$sohdid";
                        $result = $db->getList($select);
                        return $result;
        }
    }

?>
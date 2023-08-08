<?php
    class hanghoa{
        function __construct(){}

        public function getHangHoaAll()
        {
            $db = new connect();
            $select = "select * from hanghoa";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaId($id)
        {
            $db = new connect();
            $select = "select * from hanghoa where mahh = $id";
            $result = $db->getInstance($select);
            return $result;
        }

        function updatesp($id,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton) 
        { 
            $db=new connect();
            $query="update hanghoa
             set tenhh='$tenhh', dongia=$dongia, giamgia=$giamgia, hinh='$hinh', Nhom=$Nhom, maloai=$maloai, dacbiet=$dacbiet, soluotxem=$soluotxem, ngaylap='$ngaylap', mota='$mota', soluongton=$soluongton
             where mahh = $id "; 
            echo $query;
            $db->exec($query);
            // echo $query; 
        }

        function insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton)
        { 
            $date=new DateTime($ngaylap); 
            $ngay=$date->format("Y-m-d"); 
            $db=new connect(); 
            $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,Nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton)  
            values (NULL,'$tenhh',$dongia,$giamgia,'$hinh',$Nhom,$maloai,$dacbiet,$soluotxem,'$ngay','$mota',$soluongton)"; 
            echo $query;
            $db->exec($query);
        }
        function delete($mahh){
            $db=new connect();
            $query="delete from hanghoa where mahh=$mahh";
            $db->exec($query);
            return 0;
        }
        function getThongKe_MatHang()
        {
            $db = new connect();
            $select = "select a.tenhh, sum(b.soluongmua) as soluong
            from hanghoa a, cthoadon1 b WHERE a.mahh=b.mahh group by a.tenhh";
            $result = $db->getList($select);
            return $result;
        }
    }
?>
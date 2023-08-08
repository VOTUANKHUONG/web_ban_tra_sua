<?php
    class hoadon{
        public function __construct(){}

        public function gethoadon1(){
            $db=new connect();
            $select="select * from hoadon1";
            $result=$db->getList($select);
            return $result;
        }
        
        function gethoadonid($id)
        {
            $db=new connect();
            $select="select * from hoadon1 where masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function update_hd($masohd,$makh,$ngaydat,$tongtien)
        {
            $db=new connect();
            $query="update hoadon1
                    set makh=$makh,
                    ngaydat='$ngaydat',
                    tongtien='$tongtien'
                    where masohd = $masohd";
            $db->exec($query);
        }
        function delete_hoadon1($masohd){
            $db=new connect();
            $query="delete from hoadon1 where masohd=$masohd";
            $db->exec($query);
            return 0;
        }
        //-------------------------CT HÓA ĐƠN---------------------------------------

        public function getCTHoaDon(){
            $db=new connect();
            $select="select * from cthoadon1";
            $result=$db->getList($select);
            return $result;
        }
        function getCTHoaDonID($id)
        {
            $db=new connect();
            $select="select * from cthoadon1 where mahh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function update_cthd($id,$mahh,$soluongmua,$size,$thanhtien,$tinhtrang)
        {
            $db=new connect();
            $query="update cthoadon1
                    set mahh=$mahh,
                    soluongmua=$soluongmua,
                    size='$size',
                    thanhtien=$thanhtien,
                    tinhtrang=$tinhtrang
                    where mahh= $id";
            $db->exec($query);
        }
        function delete_cthoadon($mahh){
            $db=new connect();
            $query="delete from cthoadon1 where mahh=$mahh";
            $db->exec($query);
            return 0;
        }
    }
?>
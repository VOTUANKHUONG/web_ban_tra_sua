<?php
    class khachhang{
        public function __construct(){}

        public function getKhachHang(){
            $db=new connect();
            $select="select * from khachhang1";
            $result=$db->getList($select);
            return $result;
        }

        function getKhachHangID($makh)
        {
            $db=new connect();
            $select="select * from khachhang1 where makh";
            $result=$db->getInstance($select);
            return $result;
        }
        function update_kh($makh,$tenkh,$username,$email,$diachi,$sodienthoai)
        {
            $db=new connect();
            $query="update khachhang1
                    set makh=$makh,
                    tenkh = $tenkh,
                    username = $username,
                    email = $email,
                    diachi = $diachi,
                    sodienthoai = $sodienthoai,
                    where masokh = $makh";
            $db->exec($query);
        }
        function delete_kh($makh){
            $db=new connect();
            $query="delete from khachhang1 where makh=$makh";
            $db->exec($query);
            return 0;
        }
    }
?>
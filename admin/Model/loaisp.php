<?php
    class loaisp{
        function __construct(){}

        public function getloaisp() 
        {
            $db = new connect();
            $select = "select * from loai";
            $result = $db->getList($select);
            return $result;
        }
        function getLoaiID($id)
        {
            $db=new connect();
            $select="select * from loai where ma_loai=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        //pt update mã hàng hóa
        function update_loai($ma_loai,$tenloai,$id_menu)
        {
            $db=new connect();
            $query="update loai
                    set tenloai='$tenloai',
                    idmenu=$id_menu
                    where ma_loai = $ma_loai
            ";
            $db->exec($query);
        }
        // thêm sp
        function insert_loai($tenloai,$id_menu)
        {
            $db=new connect();
            $query="insert into loai(tenloai,idmenu)
                    values ('$tenloai',$id_menu)";
            $db->exec($query);
        }
        //xoa sp
        function delete_loai($ma_loai){
            $db=new connect();
            $query="delete from loai where ma_loai=$ma_loai";
            $db->exec($query);
            return 0;
        }
        //insert data
        public function insert_data($ma_loai,$tenloai,$id_menu)
        {
            $db=new connect();
            $query="insert into loai(tenloai,idmenu)
                    values ('$tenloai',$id_menu)";
            $db->exec($query);
        }
    }
?>
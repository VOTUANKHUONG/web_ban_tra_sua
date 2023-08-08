<?php
    class dangnhap{
        function __construct(){}
        // phương thức kiểm tra thông tin admin
        function getAdmin($user,$pass)
        {
            $db=new connect();
            $select="select * from admin where user='$user' and password='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
    }
?>
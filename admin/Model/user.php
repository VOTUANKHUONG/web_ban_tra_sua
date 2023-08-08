<?php
    class user{
        function __construct(){}
        function InsertUser($user,$matkhau)
        {
            $db = new connect();
            $query = "insert into admin(user,password)
            value ('$user','$matkhau')";
            $db->exec($query);
        }
        // phương thức kiểm tra username có tồn tại chưa
        function CheckUser($username)
        {
            $db=new connect();
            $select="select * from admin where user='$username'";
            $result=$db->getInstance($select);
            return $result;
        }
        // viết phương thức login
        function loginUser($username,$password)
        {
            $db=new connect();
            $select="select * from admin where user like '$username' and password like '$password'";
            $result=$db->getInstance($select);
            return $result;
        }
        function getEmail($email)
        {
            $db=new connect();
            $select="select * from khachhang where email='$email'";
            $result=$db->getInstance($select);
            return $result;
        }
        // pthuc updata mkhau
        function updataCode($emailold,$codenew){
            $db=new connect();
            $query="update admin set password='$codenew' where user='$emailold'";
           $db->exec($query);
        }
    }
?>
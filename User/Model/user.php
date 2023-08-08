<?php
class user{
   // ham khoi tao
   public function __construct()
   {
      
   }
   // phương thức insert vào database 
   function InsertUser($tenkh,$username,$pass,$email,$diachi,$sodt){
      $db = new connect();
      $query = "INSERT INTO khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro) values
      (null,'$tenkh','$username','$pass','$email','$diachi','$sodt',default)";
      $db->exec($query);
   }
   function checkUser($usname){
      $db = new connect();
      $query = "SELECT * from khachhang1 where username= '$usname'";
      $result = $db->getInstance($query);
     return $result;
   }
   function loginUser($us,$pass){
      $db = new connect();
      $select = "select * from khachhang1 where username = '$us' and matkhau = '$pass'";
      $result = $db->getInstance($select);
      return $result;
   }
}
?>
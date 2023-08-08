<?php
   class connect{
          var $db = null;
          public function __construct()
          {
                    $dsn = 'mysql:host=localhost;dbname=xshop';
                    $user = 'root';
                    $pass = '';
                    // PDB(dsn,user,array,pass)
                   try{
                    $this-> db = new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
          }
                   catch(\Throwable) {
         
                   }
          }
         //  thực hiện truy vấn dữ liệu bằng query
         public function getList($select){
            $result = $this->db->query($select);
            return $result;
         }
         // lay cho tiet san pham
         public function getInstance($select){
            $result = $this->db->query($select);
            $result = $result->fetch();
            return $result;
         }
         // phương thức thực thi các câu lệnh insert , update, delete
         public function exec($query){
            $result = $this->db ->exec($query);
            return $result;
         }
         public function check($query){
            $result = $this->db -> query($query);
            $result = $result->fetch();
            return $result;
         }


   }
?>
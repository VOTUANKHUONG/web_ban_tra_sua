<?php
class hanghoa
{
  public function __construct()
  {
  }
  // phương thức lấy ra 12 sản phẩm từ database
  public function getHangHoaNew()
  {
    // Kết nối dữ liệu
    $db = new connect();
    // B2: Viết câu truy vấn
    $select = 'SELECT * FROM hanghoa ORDER by mahh DESC LIMIT 12';
    // khi truy vấn trả về 1 bảng gồ 12 sản phẩm  cần có 1 biến để chứa
    $result = $db->getList($select);
    return $result;
  }
  public function getHangKhuyenMai()
  {
    $db = new connect();
    $select = 'SELECT * FROM hanghoa where giamgia>0 limit 4';
    $result = $db->getList($select);
    return $result;
  } 
  public function getHangHoa()
  {
    $db = new connect();
    $select = 'SELECT * FROM hanghoa';
    $result = $db->getList($select);
    return $result;
  }
  public function getHangKhuyenMaiFull()
  {
    $db = new connect();
    $select = 'SELECT * FROM hanghoa where giamgia>0';
    $result = $db->getList($select);
    return $result;
  }
  public function getDetail($id)
  {
    $db = new connect();
    $select = "SELECT * FROM hanghoa where mahh = $id";
    $result = $db->getInstance($select);
    return $result;
  }
  public function getColor($group)
  {
    $db = new connect();
    $select = "SELECT hinh FROM hanghoa where Nhom = $group";
    $result = $db->getList($select);
    return $result;
  }
  // public function getSize($group)
  // {
  //   $db = new connect();
  //   $select = "SELECT DISTINCT size FROM hanghoa where Nhom = $group order by size";
  //   $result = $db->getList($select);
  //   return $result;
  // }
  public function getSearch($name)
  {
    $db = new connect();
    $select = "SELECT * FROM hanghoa where tenhh LIKE '%$name%'";
    $result = $db->getList($select);
    return $result;
    
  }
  
}

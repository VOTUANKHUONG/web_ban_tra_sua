<?php
$ctrl = 'sanpham';
if (isset($_GET['act'])) {
   $ctrl = $_GET['act'];
}
switch ($ctrl) {
   case 'sanpham':
      include_once "View/sanpham.php";
      break;
   case 'khuyenmai':
      include_once "View/khuyenmai.php";
      break;
   case 'detail':
      include_once "View/sanphamchitiet.php";
      break;
   case 'timkiem':
      include_once "View/sanphamtimkiem.php";
      break;
}
?>

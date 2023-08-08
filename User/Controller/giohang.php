<?php
if (!isset($_SESSION['cart'])) {
   $_SESSION['cart'] = array();
}
$act = 'giohang';
if (isset($_GET['act'])) {
   $act = $_GET['act'];
}
switch ($act) {
   case 'giohang':
      if (isset($_POST['mahh'])) {
         $mahh = $_POST['mahh'];
         $soluong = $_POST['soluong'];
        
         $gh = new giohang();
         $gh->add_item($mahh, $soluong);
      }


      include_once 'View/cart.php';
      break;
   case 'delete':
      if (isset($_GET['id'])) {
         $key = $_GET['id'];
      }
      $gh = new giohang();
      $gh->delete($key);
      include_once 'View/cart.php';
      break;
   case 'update':
      if (isset($_POST['newqty'])) {
         $new_list = $_POST['newqty'];
         foreach ($new_list as $index => $quantity) {
            if ($_SESSION['cart'][$index]['soluong'] != $quantity) {
               $updateItem = new giohang();
               $updateItem->update($index, $quantity);
            }
         }
      }
      include_once 'View/cart.php';
      break;
}

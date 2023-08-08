<?php
class giohang
{
   function add_item($mahh, $soluong)
   {
      $prod = new hanghoa();
      $prods = $prod->getDetail($mahh);
      $hinh = $prods["hinh"];
      $tenhh = $prods['tenhh'];
      $dongia = $prods['dongia'];
      $tongtien = $soluong * $dongia;
      $flag = 0;
      
   
         foreach($_SESSION['cart'] as $key => $element){
          if($element['mahh'] == $mahh){
               $soluong+=$element['soluong'];
               $gh=new giohang;
               $gh->update($key,$soluong);
               $flag=1;
            }
         }
      if($flag==0)
      {
         $item = array(
            'mahh'=>$mahh,
            'hinh' => $hinh,
            'tenhh' => $tenhh,
            'dongia' => $dongia,
            'soluong' => $soluong,
            'tongtien' => $tongtien
         );
         $_SESSION['cart'][] = $item;
        
      }
            
           
      }
   
   function getTotal()
   {
      $subTotal = 0;
      foreach ($_SESSION['cart'] as $item) {
         $subTotal += $item['tongtien'];
      }
      return $subTotal;
   }
   function delete($key)
   {
      unset($_SESSION['cart'][$key]);
   }
   function update($key,$quantity){
      if($quantity <= 0 ){
         $this->delete($key);
      }
      else{
         $_SESSION['cart'][$key]['soluong'] = $quantity;
         $new_total = $_SESSION['cart'][$key]['soluong'] * $_SESSION['cart'][$key]['dongia'];
         $_SESSION['cart'][$key]['tongtien'] = $new_total;
      }
   }
}

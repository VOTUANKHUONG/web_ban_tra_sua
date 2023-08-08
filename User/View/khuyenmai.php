  <!-- quảng cáo -->
  <?php
  include "quangcao.php";
  ?>
  <!-- end quảng cáo -->
  
  
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
 

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
          <h4 class="mb-5 font-weight-bold">SẢN PHẨM KHUYẾN MÃI</h4>
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
         <?php 
         $hh = new hanghoa();
         $result  = $hh -> getHangKhuyenMaiFull();
         while($set = $result -> fetch()):
         ?>
             <div class="col-lg-3 col-md-4 mb-3 text-left">

<div class="view overlay z-depth-1-half">
  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']?>">
      <img src="Content/imagetourdien/<?php echo $set['hinh']?>" class="img-fluid" alt="">
  </a>
    <div class="mask rgba-white-slight"></div>
</div>
<h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set['dongia'])?><sup><u>đ</u></sup></br>
</h5>
<a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh']?>">
    <span><?php echo $set['tenhh'].'-'. $set['mausac']?></span></br></a>
<button class="btn btn-danger" id="may4" value="lap 4">New</button>
<h5>Số lượt xem:<?php echo $set['soluotxem']?></h5>

</div>
<?php endwhile?>
</div>

<!--Grid row-->

</section>


<!-- end sản phẩm mới nhất -->


<div class="col-md-6 div col-md-offset-3">
<ul class="pagination">
  
  <li ><a href=""></a></li>
 
</ul>
</div>
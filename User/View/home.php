  <style>
      /* Hiệu ứng hover */
      .view.overlay:hover .mask {
          background-color: rgba(255, 255, 255, 0.5);
      }

      /* Nút mua hàng */
      .view.overlay .purchase-button {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: #007bff;
          color: white;
          padding: 10px 20px;
          border-radius: 5px;
          opacity: 0;
          transition: opacity 0.3s;
      }

      .view.overlay:hover .purchase-button {
          opacity: 1;
      }
  </style>
  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right mt-5">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM MỚI NHẤT</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham&act=sanpham">
                  <span style="color: gray;">Xem chi tiết</span>
          </div>
          </a>


      </div>
      <!--Grid row-->
      <div class="row">

          <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaNew();
            while ($set = $result->fetch()) : //$set là 1 object dduucowj lấy ra có dạng mảng
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]; ?>">
                          <img src="Content/imagetourdien/<?php echo $set["hinh"]; ?>" class="img-fluid" alt="">
                      </a>
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set['dongia']) ?><sup><u>đ</u></sup></br>
                  </h5>
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'] ?>">
                      <span><?php echo $set['tenhh']; ?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem:<?php echo $set['soluotxem'] ?></h5>
                  <div class="mask rgba-white-slight">
                      <a href="#">
                          <div class="purchase-button">Mua hàng</div>
                      </a>
                  </div>


              </div>
          <?php endwhile ?>

      </div>
      <h1><a href="View/sanpham.php">Tất cả sản phẩm </a></h1>
      <!--Grid row-->

  </section>
  <!-- end sản phẩm mới nhất -->
  <!-- sản phẩm khuyến mãi -->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM KHUYẾN MÃI</h3>
          </div>
          <div class="col-lg-4 text-right mt-4">
              <!-- <a href="index.php?action=sanpham&act=khuyenmai">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a> -->
              <a href="index.php?action=sanpham&act=khuyenmai">
                  <span style="color: gray;">Xem chi tiết</span>
          </div>
          </a>

      </div>
      <!--Grid row-->
      <div class="row">

          <?php
            $km = new hanghoa();
            $result = $km->getHangKhuyenMai();
            while ($set = $result->fetch()) :
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"]; ?>">
                          <img src="Content/imagetourdien/<?php echo $set["hinh"]; ?>" class="img-fluid" alt="">
                      </a>
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold">
                      <font color="red"><?php echo number_format($set['dongia']) ?><sup><u>đ</u></sup></font>
                      <strike><?php echo number_format($set['giamgia']) ?></strike><sup><u>đ</u></sup>
                  </h5>

                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'] ?>">
                      <span><?php echo $set['tenhh'] ?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem:<?php echo $set['soluotxem'] ?></h5>

              </div>
          <?php endwhile ?>
      </div>

      <!--Grid row-->

  </section>

  <!-- end sản phẩm khuyến mãi -->
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH KHÁCH HÀNG</b></h3></div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã Khách Hàng</th>
        <th>Tên Khách Hàng</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Địa Chỉ</th>
        <th>Số Điện Thoại</th>
        
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $kh=new khachhang();
        $result=$kh->getKhachHang();
        while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['makh'];?></td>
        <td><?php echo $set['tenkh'];?></td>
        <td><?php echo $set['username'];?></td>
        <td><?php echo $set['email'];?></td>
        <td><?php echo $set['diachi'];?></td>
        <td><?php echo $set['sodienthoai'];?></td>
        <td><a href="index.php?action=khachhang&act=editkh&makh=<?php echo $set['makh'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=khachhang&act=xoakh&makh=<?php echo $set['makh'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>
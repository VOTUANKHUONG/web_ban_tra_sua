<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH CT HÓA ĐƠN</b></h3></div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã sản phẩm</th>
        <th>Mã số hóa đơn</th>
        <th>Số lượng mua</th>
        <th>Size</th>
        <th>Thành tiền</th>
        <th>Tình trạng</th>
        
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hh=new hoadon();
        $result=$hh->getCTHoaDon();
        while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['masohd'];?></td>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['soluongmua'];?></td>
        <td><?php echo $set['size'];?></td>
        <td><?php echo $set['thanhtien'];?></td>
        <td><?php echo $set['tinhtrang'];?></td>
        <td><a href="index.php?action=cthoadon&act=edit_cthd&id=<?php echo $set['mahh'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=cthoadon&act=xoa_cthoadon&id=<?php echo $set['mahh'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>
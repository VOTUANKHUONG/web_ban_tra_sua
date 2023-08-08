
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH LOẠI</b></h3></div>
<div class="row col-12">
<a href="index.php?action=loai&act=them_loai"><h4>Thêm loại</h4></a>
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th>Id menu</th>
        
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hh=new loai();
        $result=$hh->getLoai();
        while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['tenloai'];?></td>
        <td><?php echo $set['idmenu'];?></td>
        <td><a href="index.php?action=loai&act=edit_loai&id=<?php echo $set['mahh'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=loai&act=xoa_loai&id=<?php echo $set['mahh'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>
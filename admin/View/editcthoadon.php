<?php
      $id=$_GET['id'];
?>
<form name="" action="index.php?action=cthoadon&act=edit_cthd_action&id=<?php echo $id;?>" method="post">
  <div class="card mt-3">
    <div class="card-header">
      Quản Lý CT Hóa Đơn
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col"></th>
            <th scope="col">Mã Sản Phẩm</th>
            <th scope="col">Mã Số Hóa Đơn</th>
            <th scope="col">Số Lượng Mua</th>
            <th scope="col">Size</th>
            <th scope="col">Thành Tiền</th>
            <th scope="col">Tình Trạng</th>

          </tr>
        </thead>
        <tbody>
        <?php
        $hh=new hoadon();
        $set=$hh->getCTHoaDonID($id);
        ?>
          <tr>
            <th scope="row"><input type="checkbox" id="chonX" name="chonX" value="" ></th>
            <td><?php echo $set['masohd'];?></td>
            <td><input type="text" name="mahh" value="<?php echo $set['mahh'];?>"></td>
            <td><input type="text" name="soluongmua" value="<?php echo $set['soluongmua'];?>"></td>
            <td><input type="text" name="size" value="<?php echo $set['size'];?>"></td>
            <td><input type="text" name="thanhtien" value="<?php echo $set['thanhtien'];?>"></td>
            <td><input type="text" name="tinhtrang" value="<?php echo $set['tinhtrang'];?>"></td>
            <td>
              <button type="submit" href="" class="btn btn-info">Sửa</button>
            </td>
          </tr>
					
          <input type="hidden" name="xoa" value="" />
        </tbody>
        
      </table>
    </div>
    <!-- <div class="card-footer">
      <a href="" class="btn btn-info">Chọn tất cả</a>
      <button class="btn btn-info" onclick="">Chọn tất cả(javascript)</button>
      <a href="" class="btn btn-info">Bỏ chọn</a>
      <a href="" class="btn btn-info">Xóa danh mục đã chọn</a>
      <button class="btn btn-info" onclick="">Xóa danh mục đã chọn test</button>
      <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
      <a href="" class="btn btn-info">Thêm mới</a>
    </div> -->
  </div>
</form>

<?php
      $id=$_GET['id'];
?>
<form name="" action="index.php?action=hoadon&act=edithd_action&masohd=<?php echo $id;?>" method="post">
  <div class="card mt-3">
    <div class="card-header">
      Quản Lý Hóa Đơn
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col"></th>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Ngày đặt</th>
            <th scope="col">Tổng tiền</th>

          </tr>
        </thead>
        <tbody>
        <?php
        $hh=new hoadon();
        $set=$hh->getHoaDonID($id);
        ?>
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX" value="" ></th>
                      <td><?php echo $set['masohd'];?></td>
                      <td><input type="text" name="makh" value="<?php echo $set['makh'];?>"></td>
                      <td><input type="text" name="ngaydat" value="<?php echo $set['ngaydat'];?>"></td>
                      <td><input type="text" name="tongtien" value="<?php echo $set['tongtien'];?>"></td>
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

<?php
      $makh=$_GET['makh'];
?>
<form name="" action="index.php?action=khachhang&act=editkh&makh=<?php echo $makh;?>" method="post">
  <div class="card mt-3">
    <div class="card-header">
      Quản Lý Khách Hàng
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col"></th>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">Tên Khách Hàng</th>
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Số Điện Thoại</th>

          </tr>
        </thead>
        <tbody>
        <?php
        $kh=new khachhang();
        $set=$kh->getKhachHang($makh);
        ?>
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX" value="" ></th>
                      <td><?php echo $set['makh'];?></td>
                      <td><input type="text" name="tenkh" value="<?php echo $set['tenkh'];?>"></td>
                      <td><input type="text" name="username" value="<?php echo $set['username'];?>"></td>
                      <td><input type="text" name="email" value="<?php echo $set['email'];?>"></td>
                      <td><input type="text" name="tongtien" value="<?php echo $set['diachi'];?>"></td>
                      <td><input type="text" name="sodienthoai" value="<?php echo $set['sodienthoai'];?>"></td>
                      <td>
                        <button type="submit" href="" class="btn btn-info">Sửa</button>
                      </td>
                    </tr>
					
          <input type="hmakhden" name="xoa" value="" />
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

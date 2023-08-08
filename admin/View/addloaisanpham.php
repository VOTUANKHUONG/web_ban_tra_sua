<div class="card mt-3">
  <div class="card-header info">
    QUẢN LÝ LOẠI HÀNG
  </div>
  <div class="card-body">
    <div class="form-group">
      <form action="index.php?action=loai&&act=loai_action" method="POST" enctype="multipart/form-data">
        <label for="">Upload csv</label>
        <input type="file" name="file" id="">
        <input type="submit" name="submit_file" value="adu">
      </form>
    </div>


    <div class="form-group">
      <label for="">Mã danh mục</label>
      <input type="text" readonly name="id" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Tên danh mục</label>
      <input type="text" name="namecata" class="form-control">

    </div>
    <div class="form-group">
      <label for="">Menu số:</label>
      <input type="text" name="menu" class="form-control">

    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Lưu</button>
      <a href="" class="btn btn-danger">Danh sách</a>
    </div>
    </form>
  </div>
</div>
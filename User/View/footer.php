<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    #footer {
    background-color:#00DD00;
      padding: 20px;
    }

    .f-bot {
      display: flex;
      justify-content: center;
    }

    .f-copyright {
      width: 50%;
      padding-top: 10px;
    }

    .f_follow {
      width: 30%;
    }

    .f-language {
      width: 20%;
    }

    .f-social {
      display: flex;
      justify-content: center;
      list-style: none;
      padding: 0;
    }

    .f-social li {
      margin: 0 10px;
    }

    .lang-wrapper {
      display: flex;
      justify-content: center;
      margin-bottom: 10px;
    }

    .lang-item {
      margin: 0 5px;
      text-decoration: none;
      color: #555555;
    }

    .lang-item.active {
      font-weight: bold;
    }

    .btn-icon {
      display: inline-block;
      width: 30px;
      height: 30px;
      background-color: #555555;
      color: white;
      border-radius: 50%;
      text-align: center;
      line-height: 30px;
    }

    .btn-icon i {
      font-size: 18px;
    }
  </style>
</head>
<body>
  <!-- Nội dung trang web của bạn -->

  <footer id="footer">
    <div class="f-bot">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 col-xs-12 f-copyright"> 
            <b>Trụ sở chính</b>: Công ty Cổ Phần Phúc Long Heritage - ĐKKD: 0316 871719</br>
            do sở KHĐT TPHCM cấp lần đầu ngày 21/05/2021</br>
            <b>Nhà máy</b>: D_8D_CN Đường XE 1, Khu Công Nghiệp Mỹ Phước III, phường Mỹ Phước, thị xã Bến Cát, tỉnh Bình Dương, Việt Nam<br>
            <b>Địa chỉ</b>: Phòng 702, Tầng 7, Tòa nhà Central Plaza, số 17 Lê Duẩn, phường Bến Nghé, quận 1, Hồ Chí Minh</br>
           
            <b class="w37">Email</b><span class="w4">:</span><span class="w1"> sales@phuclong.masangroup.com</span><br>
            <b class="w37"> </b><span class="w4"></span><span class="w1">  info2@phuclong.masangroup.com</span>
          </div>

          <div class="col-md-4 col-xs-12 f_follow">
            <label for="newsletter-email">Đăng ký nhận tin khuyến mãi</label>
            <form method="POST" action="https://phuclong.com.vn/send" accept-charset="UTF-8" class="form-inline" id="form-newsletter">
              <input name="_token" type="hidden" value="I5I4SsT2cytHFsrN6UeFcoHmzLpy1iXCpzlrcqHa">
            <div class="form-group">
              <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Nhập địa chỉ email">
            </div>
            <button type="submit" class="btn btn-default">Gửi</button>
          </form>
          <br/>
          <ul>
            <li><a href="https://phuclong.com.vn/chinh-sach-dat-hang">Chính sách đặt hàng</a></li>
            <li><a href="https://phuclong.com.vn/chinh-sach-bao-mat-thong-tin">Chính sách bảo mật thông tin</a></li>
          </ul>
        </div>

        <div class="col-md-2 col-xs-12 f-language">
          <div class="lang-wrapper">
            <a class="lang-item active" href="https://phuclong.com.vn/category/thuc-uong">VN</a> |
            <a class="lang-item" href="https://phuclong.com.vn/en/category/thuc-uong">EN</a>
          </div>
          <ul class="f-social">
            <li><a class="btn-icon" href="http://www.facebook.com/phuclongcoffeeandtea"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a class="btn-icon" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a class="btn-icon" href="https://www.instagram.com/phuclongcoffeeandtea/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a class="btn-icon" href="https://www.youtube.com/channel/UCq6WR0wWNUuz53c4zeWSa8g"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

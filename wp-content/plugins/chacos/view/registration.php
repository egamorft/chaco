<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registration</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/login.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="box-registration">
      <div class="line-header-menu-page">
         <a href="<?php echo home_url('/home') ?>" class="title-header-menu-page">Trang chủ</a>
         <span style="margin: 0 5px;">/</span>
         <a href="<?php echo home_url('/registration') ?>" class="title-header-menu-page">Đăng ký tài khoản</a>
      </div>
      <div class="box-content-reg">
         <div class="box-left-registration">
            <p class="title-menu-child-reg">Tài khoản</p>
            <a href="<?php echo home_url('/login') ?>" class="link-page-reg">Đăng nhập</a>
         </div>
         <div class="box-right-registration">
            <p class="title-reg">Đăng ký tài khoản</p>
            <div class="box-info-reg">
               <div class="line-header-info-reg">
                  <p class="title-info-big-reg">Thông tin cá nhân</p>
                  <p class="title-info-small-reg">* Phần bắt buộc</p>
               </div>
               <div class="content-info-reg">
                  <div class="col-left-info">
                     <label class="title-lable-info">* First Name</label>
                     <input type="text" class="input-value-reg">
                     <label class="title-lable-info">* Last Name</label>
                     <input type="text" class="input-value-reg">
                  </div>
                  <div class="col-right-info">
                     <p class="title-note">Đây là tên sẽ được liên kết với tài khoản Chaco.com của bạn.</p>
                  </div>
               </div>
               <div class="line-header-info-reg">
                  <p class="title-info-big-reg">Địa chỉ email</p>
                  <p class="title-info-small-reg">* Phần bắt buộc</p>
               </div>
               <div class="content-info-reg">
                  <div class="col-left-info">
                     <label class="title-lable-info">* Email</label>
                     <input type="text" class="input-value-reg">
                     <label class="title-lable-info">* Xác nhận email</label>
                     <input type="text" class="input-value-reg">
                  </div>
                  <div class="col-right-info">
                     <p class="title-note">Bạn sẽ sử dụng địa chỉ email của mình để đăng nhập vào Chacos.com. Chúng tôi
                        yêu cầu bạn nhập hai lần để đảm bảo độ chính xác.</p>
                  </div>
               </div>
               <div class="line-header-info-reg">
                  <p class="title-info-big-reg">Mật khẩu</p>
                  <p class="title-info-small-reg">* Phần bắt buộc</p>
               </div>
               <div class="content-info-reg">
                  <div class="col-left-info">
                     <label class="title-lable-info">* Mật khẩu 8 - 20 ký tự</label>
                     <input type="text" class="input-value-reg">
                     <label class="title-lable-info">* Xác nhận mật khẩu</label>
                     <input type="text" class="input-value-reg">
                  </div>
                  <div class="col-right-info">
                     <p class="title-note">Tạo mật khẩu cho tài khoản Chacos.com của bạn. Mật khẩu của bạn phải dài từ
                        8-20 ký tự. Nó phải chứa 1 trong số những điều sau đây:</p>
                     <ul style="list-style:inherit;">
                        <li>
                           <span style="vertical-align: inherit;">
                              <span style="vertical-align: inherit;">Chữ hoa</span>
                           </span>
                        </li>
                        <li>
                           <span style="vertical-align: inherit;">
                              <span style="vertical-align: inherit;">Chữ thường</span>
                           </span>
                        </li>
                        <li>
                           <span style="vertical-align: inherit;">
                              <span style="vertical-align: inherit;">số</span>
                           </span>
                        </li>
                        <li>
                           <span style="vertical-align: inherit;">
                              <span style="vertical-align: inherit;">Tính cách đặc biệt</span>
                           </span>
                        </li>
                     </ul>
                     <p class="title-note">
                        Không gian không được phép. Chúng tôi yêu cầu bạn nhập hai lần để đảm bảo độ chính xác.</p>
                  </div>
               </div>
               <button class="btn-registrantion">Đăng ký</button>
            </div>
         </div>
      </div>
   </div>

   <?php include plugin_dir_path( __FILE__ ) . 'layout/footer.php'?>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
   </script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/index.js"></script>
</body>

</html>
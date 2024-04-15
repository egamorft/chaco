<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My account</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/account.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="box-my-account">
      <div class="line-header-menu-page">
         <a href="<?php echo home_url('/home') ?>" class="title-header-menu-page">Trang chủ</a>
         <span style="margin: 0 5px;">/</span>
         <a href="<?php echo home_url('/my-account') ?>" class="title-header-menu-page">Tài khoản của tôi</a>
      </div>
      <div class="box-content-my-account">
         <div class="box-left-account">
            <p class="title-menu-child-account">Tài khoản của tôi</p>
            <a href="<?php echo home_url('/edit-account') ?>" class="link-page-account">Chỉnh sửa tài khoản</a>
            <a href="<?php echo home_url('/address') ?>" class="link-page-account">Địa chỉ</a>
            <a href="<?php echo home_url('/order-history') ?>" class="link-page-account">Lịch sử đơn hàng</a>
            <a href="<?php echo home_url('/login') ?>" class="link-page-account">Đăng xuất</a>
         </div>
         <div class="box-right-account">
            <div class="line-title-my-account">
               <p class="title-account">Tài khoản của tôi | Account</p>
               <span style="font-size: 14px;cursor: pointer;">Đăng xuất</span>
            </div>
            <div class="box-info-my-account">
               <div class="line-header-info-account">
                  <p class="title-info-big-account">Thông tin tài khoản</p>
                  <p class="title-info-small-account">Xem/Sửa</p>
               </div>
               <div class="box-child-item-account">
                  <div class="item-left-account">
                     <p class="content-item-account">
                        Quản trị viên nhà phát triển chủ tài khoản</p>
                  </div>
                  <div>
                     <p class="content-item-account" style="font-weight: bold;">Tài khoản Email</p>
                     <p class="content-item-account">admin@gmail.com</p>
                  </div>
               </div>
               <div class="line-header-info-account">
                  <p class="title-info-big-account">Lịch sử đơn hàng</p>
                  <!-- <p class="title-info-small-account">Xem</p> -->
               </div>
               <div class="box-child-item-account">
                  <p class="content-item-account">Không có mục nào trong danh sách này.</p>
               </div>
               <div class="line-header-info-account">
                  <p class="title-info-big-account">Địa chỉ</p>
                  <p class="title-info-small-account">Xem tất cả/Chỉnh sửa</p>
               </div>
               <div class="box-info-address-book">
                  <div class="box-item-address-book">
                     <p class="title-item-address-book">Địa chỉ giao hàng mặc định</p>
                     <p class="title-item-address-book">Địa chỉ thanh toán mặc định</p>
                     <p class="content-item-address-book">12345678</p>
                     <p class="content-item-address-book">12345678</p>
                     <p class="content-item-address-book">12345678</p>
                     <p class="content-item-address-book">12345678</p>
                     <p class="content-item-address-book">12345678</p>
                     <p class="content-item-address-book">Số điện thoại:</p>
                     <p class="content-item-address-book">12345678</p>
                  </div>
               </div>

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
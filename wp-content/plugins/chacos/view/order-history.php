<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Order history</title>
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
         <span style="margin: 0 5px;">/</span>
         <a href="<?php echo home_url('/order-history') ?>" class="title-header-menu-page">Lịch sử đơn hàng</a>
      </div>
      <div class="box-content-my-account">
         <div class="box-left-account">
            <p class="title-menu-child-account">Tài khoản của tôi</p>
            <a href="<?php echo home_url('/edit-account') ?>" class="link-page-account">Chỉnh sửa tài khoản</a>
            <a href="<?php echo home_url('/address') ?>" class="link-page-account">Địa chỉ</a>
            <a href="<?php echo home_url('/order-history') ?>" class="link-page-account">Lịch sử đơn hàng ></a>
            <a href="<?php echo home_url('/login') ?>" class="link-page-account">Đăng xuất</a>
         </div>
         <div class="box-right-account">
            <div class="line-title-my-account">
               <p class="title-account">LỊCH SỬ ĐƠN HÀNG</p>
            </div>
            <div class="box-child-item-account">
               <p class="content-item-account">Không có mục nào trong danh sách này.</p>
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
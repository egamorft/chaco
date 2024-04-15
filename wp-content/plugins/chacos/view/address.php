<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Address</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/login.css">
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
         <a href="<?php echo home_url('/address') ?>" class="title-header-menu-page">Địa chỉ</a>
      </div>
      <div class="box-content-my-account">
         <div class="box-left-account">
            <p class="title-menu-child-account">Tài khoản của tôi</p>
            <a href="<?php echo home_url('/edit-account') ?>" class="link-page-account">Chỉnh sửa tài khoản</a>
            <a href="<?php echo home_url('/address') ?>" class="link-page-account">Địa chỉ ></a>
            <a href="<?php echo home_url('/order-history') ?>" class="link-page-account">Lịch sử đơn hàng</a>
            <a href="<?php echo home_url('/login') ?>" class="link-page-account">Đăng xuất</a>
         </div>
         <div class="box-right-account">
            <div class="line-title-my-account">
               <p class="title-account">Địa chỉ (1)</p>
               <span class="create-address" data-bs-toggle="modal" data-bs-target="#staticCreateAddress">TẠO ĐỊA CHỈ
                  MỚI</span>
            </div>
            <div class="box-info-address-account">
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
                     <div class="line-footer-info-address">
                        <p class="title-footer-info-address">Sửa</p>
                        <span class="title-footer-info-address"> | </span>
                        <a href="" class="title-footer-info-address">Xóa</a>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>

   <!-- Modal create address-->
   <div class="modal fade" id="staticCreateAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header model-header-address">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-address">
               <p class="title-account">THÊM ĐỊA CHỈ</p>
               <P class="line-child-create-address">Chi tiết địa chỉ <span class="title-more-header-address">* Trường
                     bắt buộc</span></P>
               <label class="title-lable-info">Tên địa chỉ</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* First Name</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Last Name</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Địa chỉ</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">Địa chỉ 2</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Thành phố</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Điện thoại</label>
               <input type="text" class="input-value-reg">
               <p class="title-note-create-address">Tại sao điều này là cần thiết?</p>
               <div class="d-flex align-items-center">
                  <input type="checkbox" id="defaultshipping">
                  <label for="defaultshipping" class="lable-create-address">Đặt địa chỉ giao hàng mặc định</label>
               </div>
               <div class="d-flex align-items-center">
                  <input type="checkbox" id="defaultshipping">
                  <label for="defaultshipping" class="lable-create-address">Đặt địa chỉ thanh toán mặc định</label>
               </div>
               <div class="box-btn-footer-create-address">
                  <button class="btn-add-address">Áp dụng</button>
                  <button class="btn-cancel-address">Hủy bỏ</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal edit address-->
   <div class="modal fade" id="staticCreateAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header model-header-address">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-address">
               <p class="title-account">SỬA ĐỊA CHỈ</p>
               <P class="line-child-create-address">Chi tiết địa chỉ <span class="title-more-header-address">* Trường
                     bắt buộc</span></P>
               <label class="title-lable-info">Tên địa chỉ</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* First Name</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Last Name</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Địa chỉ</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">Địa chỉ 2</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Thành phố</label>
               <input type="text" class="input-value-reg">
               <label class="title-lable-info">* Điện thoại</label>
               <input type="text" class="input-value-reg">
               <p class="title-note-create-address">Tại sao điều này là cần thiết?</p>
               <div class="d-flex align-items-center">
                  <input type="checkbox" id="defaultshipping">
                  <label for="defaultshipping" class="lable-create-address">Đặt địa chỉ giao hàng mặc định</label>
               </div>
               <div class="d-flex align-items-center">
                  <input type="checkbox" id="defaultshipping">
                  <label for="defaultshipping" class="lable-create-address">Đặt địa chỉ thanh toán mặc định</label>
               </div>
               <div class="box-btn-footer-create-address">
                  <button class="btn-add-address">Áp dụng</button>
                  <button class="btn-cancel-address">Hủy bỏ</button>
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
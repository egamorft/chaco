<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wishlist</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/detail-product.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/account.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="box-wishlist">
      <div class="line-header-menu-page">
         <a href="<?php echo home_url('/home') ?>" class="title-header-menu-page">Trang chủ</a>
         <span style="margin: 0 5px;">/</span>
         <a href="<?php echo home_url('/my-account') ?>" class="title-header-menu-page">Tài khoản của tôi</a>
         <span style="margin: 0 5px;">/</span>
         <a href="<?php echo home_url('/order-history') ?>" class="title-header-menu-page">Lịch sử đơn hàng</a>
      </div>
      <div class="box-content-my-account">
         <div class="box-left-account box-left-wishlist">
            <p class="title-menu-child-account">Tài khoản của tôi</p>
            <a href="<?php echo home_url('/edit-account') ?>" class="link-page-account">Chỉnh sửa tài khoản</a>
            <a href="<?php echo home_url('/address') ?>" class="link-page-account">Địa chỉ</a>
            <a href="<?php echo home_url('/order-history') ?>" class="link-page-account">Lịch sử đơn hàng</a>
            <a href="<?php echo home_url('/login') ?>" class="link-page-account">Đăng xuất</a>
         </div>
         <div class="box-right-account box-right-wishlist">
            <div class="line-title-my-account d-block">
               <p class="title-account">DANH SÁCH YÊU THÍCH</p>
               <p class="title-number-wishlist">2 sản phẩm</p>
            </div>
            <div class="wishlist-header-labels">
               <span class="wishlist-products-label">Products</span>
               <span class="wishlist-priority-label">Priority</span>
            </div>
            <div class="wishlist-product">
               <div class="wishlist-product-info-wrapper">
                  <div class="wishlist-product-img">
                     <img
                        src="https://s7d4.scene7.com/is/image/WolverineWorldWide/CHAW-JCH109140-022521-S22-000?wid=300&amp;hei=250&amp;op_usm=0.8,1&amp;qlt=80&amp;fmt=jpg">
                  </div>
                  <div class="wishlist-product-info">
                     <a class="name-label" href="#">Z/1
                        Adjustable Strap Classic Sandal</a>
                     <p tabindex="0" class="color-label">Color: Burnt Umber
                     </p>
                     <p class="size-label">Size:
                        <button class="wishlist-size-btn primary-links product-edit-btn" title="">
                           Select a size
                        </button>
                     </p>
                     <div class="quantity-wrapper">
                        <span>
                           <button class="quantity-minus" data-field="quantity">
                              <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/cartqty-minus-new.png" alt="Remove Quantity">
                           </button>
                        </span>
                        <input class="input-text quantity-number" type="text" name="Quantity" maxlength="3" min="1"
                           value="1">
                        <span>
                           <button class="quantity-plus" data-field="quantity">
                              <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/cartqty-plus-new.png" alt="Add Quantity">
                           </button>
                        </span>
                     </div>
                     <p class="cost-label">Cost:
                        <span class="price-sales">$105.00</span>
                     </p>
                     <p class="date-added-label">Date added: 04/15/2024</p>
                  </div>
               </div>
               <div class="wishlist-product-action-wrapper">
                  <form id="PriorityForm" action="" method="post" name="dwfrm_wishlist" novalidate="novalidate">
                     <div class="wishlist-product-priority">
                        <div class="form-row   ">
                           <label for="dwfrm_wishlist_items_i0_priority" class="row-label">
                              <span class="field-name" id="dwfrm_wishlist_items_i0_priority_label">
                                 Priority
                              </span>
                           </label>
                           <select class="input-select" id="dwfrm_wishlist_items_i0_priority"
                              name="dwfrm_wishlist_items_i0_priority">
                              <option class="select-option" label="None" value="">None</option>
                              <option class="select-option" label="Lowest" value="1">Lowest</option>
                              <option class="select-option" label="Low" value="2">Low</option>
                              <option class="select-option" label="Medium" value="3">Medium</option>
                              <option class="select-option" label="High" value="4" selected="selected">High</option>
                              <option class="select-option" label="Highest" value="5">Highest</option>
                           </select>
                        </div>
                     </div>
                     <div class="item-option option-update hide">
                        <button name="dwfrm_wishlist_items_i0_updateItem" class="button-text update-item"
                           type="submit">Update</button>
                     </div>
                  </form>
                  <div class="wishlist-product-controls">
                     <button class="cta-primary product-edit-btn" data-bs-toggle="modal"
                        data-bs-target="#staticEditWishlist">
                        Select a size
                     </button>
                     <div class="wishlist-actions">
                        <button class="wishlist-action-btn primary-links product-edit-btn" data-bs-toggle="modal"
                           data-bs-target="#staticEditWishlist">
                           Edit
                        </button>
                        <span class="wishlist-action-spacer">|</span>
                        <button class="wishlist-action-btn primary-links product-remove-btn" data-bs-toggle="modal"
                           data-bs-target="#staticDeleteWishlist">Remove</button>
                        <span class="wishlist-action-spacer">|</span>
                        <button class="wishlist-action-btn primary-links product-share-btn">Share</button>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <!-- Modal edit select sp-->
   <div class="modal fade" id="staticEditWishlist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-content-update">
         <div class="modal-content">
            <div class="modal-header modal-header-remove">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body body-update-wishlist">
               <div class="box-img-product box-img-sp-wishlist">
                  <div class="swiper swiperImageSmall">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide">
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide">
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide">
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide">
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                     </div>
                  </div>
                  <div class="swiper swiperImageBig">
                     <div class="swiper-wrapper" id="lightgallery">
                        <div class="swiper-slide position-relative">
                           <p class="title-sale-product">NEW</p>
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide position-relative">
                           <p class="title-sale-product">NEW</p>
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide position-relative">
                           <p class="title-sale-product">NEW</p>
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide position-relative">
                           <p class="title-sale-product">NEW</p>
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                        <div class="swiper-slide position-relative">
                           <p class="title-sale-product">NEW</p>
                           <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/detail-sp1.png" class="w-100" />
                        </div>
                     </div>
                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>
                  </div>
               </div>
               <div class="box-info-sp-update">
                  <div class="d-flex align-items-center mt-4">
                     <p style="font-size: 15px;font-weight: bold;margin-bottom: 0;color: #303030;">Select a Type:</p>
                     <p style="margin-bottom: 0;margin-left: 5px;font-size: 15px;">Medium</p>
                  </div>
                  <div class="d-flex justify-content-between w-100">
                     <div class="item-select-type item-select-type-active">Medium</div>
                     <div class="item-select-type">Wide</div>
                  </div>
                  <div class="d-flex mt-4">
                     <p style="color: #303030;font-weight: bold;margin-bottom: 0;font-size: 14px;">Select a Color : </p>
                     <p style="margin-bottom: 0;margin-left: 5px;font-size: 14px;">Tetra Moss</p>
                  </div>
                  <p class="price-item-color">$105.00 - $110.00</p>
                  <div class="box-color-product mt-1">
                     <div class="item-color-product item-color-active" onclick="toggleColorActive(this)"></div>
                     <div class="item-color-product" onclick="toggleColorActive(this)"></div>
                     <div class="item-color-product" onclick="toggleColorActive(this)"></div>
                     <div class="item-color-product" onclick="toggleColorActive(this)"></div>
                     <div class="item-color-product" onclick="toggleColorActive(this)"></div>
                     <div class="item-color-product" onclick="toggleColorActive(this)"></div>
                  </div>
                  <div class="d-flex mt-2">
                     <p style="color: #303030;font-weight: bold;margin-bottom: 0;font-size: 14px;">Select a Width & Size
                        :</p>
                     <p style="margin-bottom: 0;margin-left: 5px;font-size: 14px;">15 M</p>
                  </div>
                  <div class="box-w-S">M</div>
                  <div class="box-size-product mt-3">
                     <div class="item-size-product item-size-active" onclick="toggleSizeActive(this)">7</div>
                     <div class="item-size-product" onclick="toggleSizeActive(this)">8</div>
                     <div class="item-size-product" onclick="toggleSizeActive(this)">9</div>
                     <div class="item-size-product" onclick="toggleSizeActive(this)">10</div>
                     <div class="item-size-product" onclick="toggleSizeActive(this)">11</div>
                     <div class="item-size-product" onclick="toggleSizeActive(this)">12</div>
                  </div>
                  <div class="d-flex justify-content-between w-100 mt-5 mb-5">
                     <button class="btn-add-to-card">ADD TO CART</button>
                  </div>
                  <div class="accordion" id="accordionExample">
                     <div class="accordion-item accordion-item-infor">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed btn-infor-more" type="button"
                              data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="flase"
                              aria-controls="collapseOne">
                              <img
                                 src="https://www.chacos.com/on/demandware.static/Sites-chacos_us-Site/-/default/images/svg/icon-truck.svg"
                                 style="margin-right: 10px;">
                              Shipping
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body mb-3">
                              <p style="color: #004c59;margin-bottom: 0;font-size: 15px;">FREE EXPRESS SHIPPING ON $120+
                              </p>
                              <p style="font-size: 14px;margin-bottom: 0;">Order today to receive by <span
                                    style="color: #f65024;">Sat, 4/6</span></p>
                              <a href="#" style="color: #004c59;font-size: 14px;font-weight: bold;">See more
                                 details.</a>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item accordion-item-infor" style="border-bottom: 1px solid #dcdcdc;">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed btn-infor-more" type="button"
                              data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                              aria-controls="collapseTwo">
                              <img
                                 src="https://www.chacos.com/on/demandware.static/Sites-chacos_us-Site/-/default/images/svg/icon-return.svg"
                                 style="margin-right: 10px;">
                              Returns
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body mb-3">
                              <p style="font-size: 14px;margin-bottom: 0;">We are happy to offer free returns and
                                 exchanges.</p>
                              <a href="#" style="color: #004c59;font-size: 14px;font-weight: bold;">See more
                                 details.</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn-customize">
                     <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/color.png" style="width: 20px;"><span
                        style="font-size: 15px;color: #303030;font-weight: 600; margin-left: 6px;">CUSTOMIZE</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal delete wishlist-->
   <div class="modal fade" id="staticDeleteWishlist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header modal-header-remove">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p class="title-remove-sp">Loại bỏ sản phẩm?</p>
               <p class="content-remove-sp">Bạn có muốn xóa sản phẩm khỏi danh sách yêu thích của mình không?</p>
               <div class="d-flex justify-content-center">
                  <button type="button" class="btn-cancel" data-bs-dismiss="modal">Hủy</button>
                  <button type="button" class="btn-delete">Xóa</button>
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
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/detail-product.js"></script>
   <script>
   function toggleColorActive(item) {
      document.querySelectorAll('.item-color-product').forEach(function(el) {
         el.classList.remove('item-color-active');
      });
      item.classList.toggle('item-color-active');

   }

   function toggleSizeActive(item) {
      document.querySelectorAll('.item-size-product').forEach(function(el) {
         el.classList.remove('item-size-active');
      });
      item.classList.toggle('item-size-active');

   }
   </script>
</body>

</html>
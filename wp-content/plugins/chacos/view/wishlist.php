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
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/account.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
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
            <!-- <div class="wishlist-product" 
               data-product-name="Z/1 Adjustable Strap Classic Sandal" data-pli-uuid="88e7aa2458bd9d37f6ccd372f3"
               data-master-pid="24105W" data-pid="24105W" data-color-id="JCH109140Z">
               <div class="wishlist-product-info-wrapper">
                  <div class="wishlist-product-img">
                     <img tabindex="0" alt="Z/1 Adjustable Strap Classic Sandal, Burnt Umber, dynamic"
                        src="https://s7d4.scene7.com/is/image/WolverineWorldWide/CHAW-JCH109140-022521-S22-000?wid=300&amp;hei=250&amp;op_usm=0.8,1&amp;qlt=80&amp;fmt=jpg">
                  </div>
                  <div class="wishlist-product-info">
                     <a class="name-label"
                        href="https://www.chacos.com/US/en/z-1-adjustable-strap-classic-sandal/24105W.html?dwvar_24105W_color=JCH109140Z">Z/1
                        Adjustable Strap Classic Sandal</a>
                     <div class="bv-rating-section" data-bv-show="inline_rating" data-bv-product-id="chacos_24105W"
                        data-bv-redirect-url="https://www.chacos.com/US/en/z-1-adjustable-strap-classic-sandal/24105W.html"
                        data-bv-seo="false">
                     </div>
                     <p tabindex="0" class="color-label">Color: Burnt Umber
                     </p>
                     <p class="size-label">Size:
                        <button class="wishlist-size-btn primary-links product-edit-btn"
                           data-product-id="24105W~.~JCH109140Z"
                           data-href="/US/en/z-1-adjustable-strap-classic-sandal/24105W.html?dwvar_24105W_color=JCH109140Z"
                           title="">
                           Select a size
                        </button>
                     </p>
                     <div class="quantity-wrapper">
                        <span>
                           <button class="quantity-minus" data-field="quantity">
                              <img
                                 src="/on/demandware.static/Sites-chacos_us-Site/-/default/dw298eb72d/images/cartqty-minus-new.png"
                                 alt="Remove Quantity">
                           </button>
                        </span>
                        <input class="input-text quantity-number" type="text" name="Quantity" maxlength="3" min="1"
                           value="1">
                        <span>
                           <button class="quantity-plus" data-field="quantity">
                              <img
                                 src="/on/demandware.static/Sites-chacos_us-Site/-/default/dw2fd6d9f4/images/cartqty-plus-new.png"
                                 alt="Add Quantity">
                           </button>
                        </span>
                     </div>
                     <p tabindex="0" class="cost-label">Cost:
                        <span class="price-sales">$105.00</span>
                     </p>
                     <p tabindex="0" class="date-added-label">Date added: 04/15/2024</p>
                  </div>
               </div>
               <div class="wishlist-product-action-wrapper">
                  <form id="PriorityForm"
                     action="https://www.chacos.com/on/demandware.store/Sites-chacos_us-Site/default/Wishlist-WishListForm"
                     method="post" name="dwfrm_wishlist" novalidate="novalidate">
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
                     <button class="cta-primary product-edit-btn" data-product-id="24105W~.~JCH109140Z"
                        data-href="/US/en/z-1-adjustable-strap-classic-sandal/24105W.html?dwvar_24105W_color=JCH109140Z">
                        Select a size
                     </button>
                     <div class="wishlist-actions">
                        <button class="wishlist-action-btn primary-links product-edit-btn"
                           data-product-id="24105W~.~JCH109140Z"
                           data-href="/US/en/z-1-adjustable-strap-classic-sandal/24105W.html?dwvar_24105W_color=JCH109140Z"
                           title="">
                           Edit
                        </button>
                        <span class="wishlist-action-spacer">|</span>
                        <button class="wishlist-action-btn primary-links product-remove-btn">Remove</button>
                        <span class="wishlist-action-spacer">|</span>
                        <button class="wishlist-action-btn primary-links product-share-btn">Share</button>
                     </div>
                  </div>
               </div>
            </div> -->

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
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Danh mục</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/category.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="line-header-menu-page">
      <a href="/" class="title-header-menu-page">Home</a>
      <span style="margin: 0 5px;">/</span>
      <a href="" class="title-header-menu-page">Men</a>
      <span style="margin: 0 5px;">/</span>
      <a href="" class="title-header-menu-page">Sandanls</a>
   </div>

   <div class="box-slide-category">
      <p class="title-category-slide">FEATURED WOMEN'S Z/SANDALS</p>
      <div class="swiper categorySwiper">
         <div class="swiper-wrapper">
            <?php 
            for($i = 0;$i<7;$i++){
            ?>
            <div class="swiper-slide slide-col-item-category">
               <div class="line-add-cart-slide ">
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/add-to-cart.png">
                  <span class="title-quick">Quick Add</span>
               </div>
               <div class="position-relative">
                  <span class="tag-hot">NEW ARRIVAL</span>
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp2.jpg" class="w-100 img-big-slide-sp">
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/heart.svg" class="icon-heart" style="right: 5px;"
                     onclick="toggleHeart(this)">
               </div>
               <div>
                  <a class="link-color">20 colors</a>
                  <div class="box-option-color-style p-0">
                     <div class="swiper swiperOptionColor">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp2.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                           <div class="swiper-slide slide-item-option-style"><img
                                 src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="img-option-color">
                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-next btn-option-color-next"></div>
                     <div class="swiper-button-prev btn-option-color-prev"></div>
                  </div>
                  <p class="title-sp">WOMEN'S Z/1 ADJUSTABLE STRAP CLASSIC SANDAL</p>
                  <p class="title-price-sp">$105.00</p>
               </div>
            </div>
            <?php
    }
    ?>
         </div>
      </div>
      <div class="swiper-button-next next-category"></div>
      <div class="swiper-button-prev prev-category"></div>
      <div class="swiper-pagination swiper-pagination-category"></div>

   </div>

   <div class="box-content-sp">
      <p class="title-big-cate-sp">WOMEN'S Z/SANDALS <span class="count-cate-sp">30 Products</span></p>
      <div class="box-line-filter-mobie">
         <div class="filter-mobile-left" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilterMobile"
            aria-controls="offcanvasFilterMobile">
            <span style="font-weight: bold; color: #1d4b58;">FILTER</span>
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/chevron.svg" style="width: 12px;">
         </div>
         <div class="select-wrapper filter-mobile-right">
            <label for="sort-select" class="select-label">SORT BY</label>
            <select id="sort-select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
               style="font-weight: bold; color: #1d4b58;">
               <option value="1">Best Seller</option>
               <option value="2">Newest</option>
               <option value="3">High Price</option>
            </select>
         </div>
      </div>
      <div class="box-content">
         <div class="box-filter">
            <div class="select-wrapper">
               <label for="sort-select" class="select-label">SORT BY</label>
               <select id="sort-select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="1">Best Seller</option>
                  <option value="2">Newest</option>
                  <option value="3">High Price</option>
               </select>
            </div>

            <div class="content-filter">
               <div class="title-filter">
                  Find the right product for you. Choose your size, color and more.
               </div>
               <div class="name-filter">
                  FILTER <span class="count-filter-sp">(247 Products)</span>
               </div>

               <div class="accordion accordion-flush" id="accordionFilter">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="flush-filterOne">
                        <button class="accordion-button collapsed accordion-button-filter" type="button"
                           data-bs-toggle="collapse" data-bs-target="#flush-filter1" aria-expanded="false"
                           aria-controls="flush-filter1">
                           SIZE/WIDTH
                        </button>
                     </h2>
                     <div id="flush-filter1" class="accordion-collapse collapse" aria-labelledby="flush-filter1"
                        data-bs-parent="#accordionFilter">
                        <div class="accordion-body body-item-filter">
                           <p class="title-filter-item">Size</p>
                           <div class="box-item-filter-small">
                              <button class="btn-size-item size-item" onclick="toggleActive(this)">5</button>
                              <button class="btn-size-item size-item" onclick="toggleActive(this)">6</button>
                              <button class="btn-size-item size-item" onclick="toggleActive(this)">7</button>
                              <button class="btn-size-item size-item" onclick="toggleActive(this)">8</button>
                              <button class="btn-size-item size-item" onclick="toggleActive(this)">9</button>
                              <button class="btn-size-item size-item" onclick="toggleActive(this)">10</button>
                           </div>

                           <p class="title-filter-item">Width</p>
                           <div class="d-flex flex-column">
                              <div class="mb-1">
                                 <input id="input-filter" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter" class="title-input-filter">Medium <span
                                       style="color: #6F6F6F;">(211)</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="flush-filter-2">
                        <button class="accordion-button collapsed accordion-button-filter" type="button"
                           data-bs-toggle="collapse" data-bs-target="#flush-filter2" aria-expanded="false"
                           aria-controls="flush-filter2">
                           STYLE
                        </button>
                     </h2>
                     <div id="flush-filter2" class="accordion-collapse collapse" aria-labelledby="flush-filter2"
                        data-bs-parent="#accordionFilter">
                        <div class="accordion-body body-item-filter">
                           <div class="d-flex flex-column">
                              <div class="mb-1">
                                 <input id="input-filter-1" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-1" class="title-input-filter">Flip Flops <span
                                       style="color: #6F6F6F;">(10)</span>
                                 </label>
                              </div>
                              <div class="mb-1">
                                 <input id="input-filter-2" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-2" class="title-input-filter">Sandals <span
                                       style="color: #6F6F6F;">(54)</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="flush-filter-3">
                        <button class="accordion-button collapsed accordion-button-filter" type="button"
                           data-bs-toggle="collapse" data-bs-target="#flush-filter3" aria-expanded="false"
                           aria-controls="flush-filter3">
                           COLLECTION
                        </button>
                     </h2>
                     <div id="flush-filter3" class="accordion-collapse collapse" aria-labelledby="flush-filter3"
                        data-bs-parent="#accordionFilter">
                        <div class="accordion-body body-item-filter">
                           <div class="d-flex flex-column">
                              <div class="mb-1">
                                 <input id="input-filter-1" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-1" class="title-input-filter">Flip Flops <span
                                       style="color: #6F6F6F;">(10)</span>
                                 </label>
                              </div>
                              <div class="mb-1">
                                 <input id="input-filter-2" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-2" class="title-input-filter">Sandals <span
                                       style="color: #6F6F6F;">(54)</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="flush-filter-4">
                        <button class="accordion-button collapsed accordion-button-filter" type="button"
                           data-bs-toggle="collapse" data-bs-target="#flush-filter4" aria-expanded="false"
                           aria-controls="flush-filter4">
                           COLOR
                        </button>
                     </h2>
                     <div id="flush-filter4" class="accordion-collapse collapse" aria-labelledby="flush-filter4"
                        data-bs-parent="#accordionFilter">
                        <div class="accordion-body body-item-filter">
                           <div class="d-flex flex-column">
                              <div class="mb-1">
                                 <input id="input-filter-1" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-1" class="title-input-filter">Flip Flops <span
                                       style="color: #6F6F6F;">(10)</span>
                                 </label>
                              </div>
                              <div class="mb-1">
                                 <input id="input-filter-2" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-2" class="title-input-filter">Sandals <span
                                       style="color: #6F6F6F;">(54)</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="flush-filter-5">
                        <button class="accordion-button collapsed accordion-button-filter" type="button"
                           data-bs-toggle="collapse" data-bs-target="#flush-filter5" aria-expanded="false"
                           aria-controls="flush-filter5">
                           PRICE
                        </button>
                     </h2>
                     <div id="flush-filter5" class="accordion-collapse collapse" aria-labelledby="flush-filter5"
                        data-bs-parent="#accordionFilter">
                        <div class="accordion-body body-item-filter">
                           <div class="d-flex flex-column">
                              <div class="mb-1">
                                 <input id="input-filter-1" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-1" class="title-input-filter">Flip Flops <span
                                       style="color: #6F6F6F;">(10)</span>
                                 </label>
                              </div>
                              <div class="mb-1">
                                 <input id="input-filter-2" class="input-filter" type="checkbox" value="1">
                                 <label for="input-filter-2" class="title-input-filter">Sandals <span
                                       style="color: #6F6F6F;">(54)</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>

         </div>
         <div class="box-sp">
            <?php 
            for($i = 0;$i<12;$i++){
            ?>
            <div class="item-sp-filter">
               <div class="line-add-cart">
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/add-to-cart.png" alt="">
                  <span class="title-quick">Quick Add</span>
               </div>
               <div class="position-relative img-big-sp">
                  <span class="tag-hot">NEW ARRIVAL</span>
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg" class="w-100 img-big-option">
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/heart.svg" class="icon-heart"
                     onclick="toggleHeart(this)">
               </div>
               <div>
                  <a class="link-color">20 colors</a>
                  <div class="box-option-color-style">
                     <div class="swiper swiperOptionColor">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp2.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp2.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg"
                                 class="img-option-color">
                           </div>
                           <div class="swiper-slide"><img src="<?= WIDGET_URL_CHACOS ?>/asset/img/img-sp3.jpg"
                                 class="img-option-color">
                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-next btn-option-color-next"></div>
                     <div class="swiper-button-prev btn-option-color-prev"></div>
                  </div>
                  <p class="title-sp">WOMEN'S Z/1 ADJUSTABLE STRAP CLASSIC SANDAL</p>
                  <p class="title-price-sp mb-1">$69.99 - $105.00</p>
                  <div class="d-flex mb-1">
                     <div class="product-rate">
                        <div class="star-rating" style="--rating:4"></div>
                     </div>
                     <div class="ts-star">4.5 (1058)</div>
                  </div>
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/customize.png" class="w-100">
               </div>
            </div>
            <?php
    }
    ?>
         </div>
      </div>

      <div class="w-100 d-flex justify-content-end">
         <div class="line-load-more">
            <button class="btn-load-more">LOAD MORE</button>
         </div>
      </div>

   </div>

   <div class="box-introduce">
      <p class="title-introduce">MEN’S NEW SANDALS AND SHOES</p>
      <p class="content-introduce">Get a fresh look for the season from men’s new sandals and shoes from Chaco. Whether
         you’re looking for an
         upgrade for your sandals before spring break, a pair of protective men's water shoes for your next rafting
         trip, or boots or shoes as the cooler months start coming in, we have what you need for outdoor adventures any
         time of year. While our styles and webbings change, you’ll still find the LUVSEAT™ footbed in our men’s new
         sandals, shoes, and boots so you’ll have the all-day support and comfort you love in Chaco products all year
         round. Find your next pair of new Chacos for men!=</p>
   </div>

   <?php include plugin_dir_path( __FILE__ ) . 'layout/footer.php'?>

   <!-- filter mobile -->
   <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasFilterMobile"
      aria-labelledby="offcanvasFilterMobile" style="width: 70%;">
      <div class="offcanvas-body p-0">
         <div class="name-filter position-relative">
            FILTER <span class="count-filter-sp">(247 Products)</span>
            <button type="button" class="btn-close close-offcavans-filter-mobile" data-bs-dismiss="offcanvas"
               aria-label="Close"></button>
         </div>

         <div class="accordion accordion-flush" id="accordionFilter">
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-filter-mobileOne">
                  <button class="accordion-button collapsed accordion-button-filter" type="button"
                     data-bs-toggle="collapse" data-bs-target="#flush-filter-mobile1" aria-expanded="false"
                     aria-controls="flush-filter-mobile1">
                     SIZE/WIDTH
                  </button>
               </h2>
               <div id="flush-filter-mobile1" class="accordion-collapse collapse" aria-labelledby="flush-filter-mobile1"
                  data-bs-parent="#accordionFilter">
                  <div class="accordion-body body-item-filter">
                     <p class="title-filter-item">Size</p>
                     <div class="box-item-filter-small">
                        <button class="btn-size-item size-item" onclick="toggleActive(this)">5</button>
                        <button class="btn-size-item size-item" onclick="toggleActive(this)">6</button>
                        <button class="btn-size-item size-item" onclick="toggleActive(this)">7</button>
                        <button class="btn-size-item size-item" onclick="toggleActive(this)">8</button>
                        <button class="btn-size-item size-item" onclick="toggleActive(this)">9</button>
                        <button class="btn-size-item size-item" onclick="toggleActive(this)">10</button>
                     </div>

                     <p class="title-filter-item">Width</p>
                     <div class="d-flex flex-column">
                        <div class="mb-1">
                           <input id="input-filter-mobile" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile" class="title-input-filter">Medium <span
                                 style="color: #6F6F6F;">(211)</span>
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-filter-2">
                  <button class="accordion-button collapsed accordion-button-filter" type="button"
                     data-bs-toggle="collapse" data-bs-target="#flush-filter-mobile2" aria-expanded="false"
                     aria-controls="flush-filter-mobile2">
                     STYLE
                  </button>
               </h2>
               <div id="flush-filter-mobile2" class="accordion-collapse collapse" aria-labelledby="flush-filter-mobile2"
                  data-bs-parent="#accordionFilter">
                  <div class="accordion-body body-item-filter">
                     <div class="d-flex flex-column">
                        <div class="mb-1">
                           <input id="input-filter-mobile-1" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-1" class="title-input-filter">Flip Flops <span
                                 style="color: #6F6F6F;">(10)</span>
                           </label>
                        </div>
                        <div class="mb-1">
                           <input id="input-filter-mobile-2" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-2" class="title-input-filter">Sandals <span
                                 style="color: #6F6F6F;">(54)</span>
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-filter-3">
                  <button class="accordion-button collapsed accordion-button-filter" type="button"
                     data-bs-toggle="collapse" data-bs-target="#flush-filter-mobile3" aria-expanded="false"
                     aria-controls="flush-filter-mobile3">
                     COLLECTION
                  </button>
               </h2>
               <div id="flush-filter-mobile3" class="accordion-collapse collapse" aria-labelledby="flush-filter-mobile3"
                  data-bs-parent="#accordionFilter">
                  <div class="accordion-body body-item-filter">
                     <div class="d-flex flex-column">
                        <div class="mb-1">
                           <input id="input-filter-mobile-1" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-1" class="title-input-filter">Flip Flops <span
                                 style="color: #6F6F6F;">(10)</span>
                           </label>
                        </div>
                        <div class="mb-1">
                           <input id="input-filter-mobile-2" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-2" class="title-input-filter">Sandals <span
                                 style="color: #6F6F6F;">(54)</span>
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-filter-4">
                  <button class="accordion-button collapsed accordion-button-filter" type="button"
                     data-bs-toggle="collapse" data-bs-target="#flush-filter-mobile4" aria-expanded="false"
                     aria-controls="flush-filter-mobile4">
                     COLOR
                  </button>
               </h2>
               <div id="flush-filter-mobile4" class="accordion-collapse collapse" aria-labelledby="flush-filter-mobile4"
                  data-bs-parent="#accordionFilter">
                  <div class="accordion-body body-item-filter">
                     <div class="d-flex flex-column">
                        <div class="mb-1">
                           <input id="input-filter-mobile-1" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-1" class="title-input-filter">Flip Flops <span
                                 style="color: #6F6F6F;">(10)</span>
                           </label>
                        </div>
                        <div class="mb-1">
                           <input id="input-filter-mobile-2" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-2" class="title-input-filter">Sandals <span
                                 style="color: #6F6F6F;">(54)</span>
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-filter-5">
                  <button class="accordion-button collapsed accordion-button-filter" type="button"
                     data-bs-toggle="collapse" data-bs-target="#flush-filter-mobile5" aria-expanded="false"
                     aria-controls="flush-filter-mobile5">
                     PRICE
                  </button>
               </h2>
               <div id="flush-filter-mobile5" class="accordion-collapse collapse" aria-labelledby="flush-filter-mobile5"
                  data-bs-parent="#accordionFilter">
                  <div class="accordion-body body-item-filter">
                     <div class="d-flex flex-column">
                        <div class="mb-1">
                           <input id="input-filter-mobile-1" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-1" class="title-input-filter">Flip Flops <span
                                 style="color: #6F6F6F;">(10)</span>
                           </label>
                        </div>
                        <div class="mb-1">
                           <input id="input-filter-mobile-2" class="input-filter" type="checkbox" value="1">
                           <label for="input-filter-mobile-2" class="title-input-filter">Sandals <span
                                 style="color: #6F6F6F;">(54)</span>
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
   </script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/index.js"></script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/category.js"></script>
   <script>
   function toggleHeart(heart) {
      if (heart.src.includes('heart-solid.svg')) {
         heart.src = '<?= WIDGET_URL_CHACOS ?>/asset/img/heart.svg';
      } else {
         heart.src = '<?= WIDGET_URL_CHACOS ?>/asset/img/heart-solid.svg';
      }
   }

   function toggleActive(item) {
      document.querySelectorAll('.size-item').forEach(function(el) {
         el.classList.remove('active-filter');
      });
      item.classList.toggle('active-filter');

   }
   </script>
</body>

</html>
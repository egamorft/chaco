<?php 
/*
 Template Name: Home
 */
?>
<?php get_header(); ?>
<div class="box-banner swiper bannerSwiper">
   <div class="swiper-wrapper">
      <div class="swiper-slide box-item-banner">
         <img src="<?= get_template_directory_uri() ?>/assets/img/banner.png" class="w-100 img-banner-home">
         <img src="<?= get_template_directory_uri() ?>/assets/img/slide1.png" class="w-100 img-banner-home-mobile">
         <div class="box-contnt-banner">
            <div class="title-banner-one">LATEST DROP</div>
            <div class="title-banner-two"><span style="color: #1D4B58;">THE RETRO</span> <span
                  style="color: #B85B53;">COLLECTION</span></div>
            <div class="title-banner-three">Rewind and refresh your style with the Retro Collection.</div>
            <a href="#" class="btn-link-banner">SHOP RETRO COLLECTION</a>
         </div>
      </div>
      <div class="swiper-slide box-item-banner">
         <img src="<?= get_template_directory_uri() ?>/assets/img/banner2.png" class="w-100 img-banner-home">
         <img src="<?= get_template_directory_uri() ?>/assets/img/slide.jpg" class="w-100 img-banner-home-mobile">
         <div class="box-contnt-banner">
            <div class="title-banner-one">LATEST DROP</div>
            <div class="title-banner-two"><span style="color: #1D4B58;">SPRING
                  BRIGHTS</span> <span style="color: #B85B53;">COLLECTION</span></div>
            <div class="title-banner-three">Fresh designs and new colors help you
               kickoff the season in style.</div>
            <a href="#" class="btn-link-banner">SHOP RETRO COLLECTION</a>
         </div>
      </div>
   </div>
   <div class="swiper-pagination swiper-pagination-banner"></div>
</div>

<div class="box-shop-style">
   <div class="title-shop-style">Shop <span style="color: #E48665;">by style</span></div>
   <div class="swiper productSwiper">
      <div class="swiper-wrapper">
         <div class="swiper-slide box-item-product">
            <img src="<?= get_template_directory_uri() ?>/assets/img/z-sandals.png" class="img-product-style">
            <div class="title-product-bottom">Leather</div>
         </div>
         <div class="swiper-slide box-item-product">
            <img src="<?= get_template_directory_uri() ?>/assets/img/z-sandals.png" class="img-product-style">
            <div class="title-product-bottom">Leather</div>
         </div>
         <div class="swiper-slide box-item-product">
            <img src="<?= get_template_directory_uri() ?>/assets/img/z-sandals.png" class="img-product-style">
            <div class="title-product-bottom">Leather</div>
         </div>
         <div class="swiper-slide box-item-product">
            <img src="<?= get_template_directory_uri() ?>/assets/img/z-sandals.png" class="img-product-style">
            <div class="title-product-bottom">Leather</div>
         </div>
         <div class="swiper-slide box-item-product">
            <img src="<?= get_template_directory_uri() ?>/assets/img/z-sandals.png" class="img-product-style">
            <div class="title-product-bottom">Leather</div>
         </div>
         <div class="swiper-slide box-item-product">
            <img src="<?= get_template_directory_uri() ?>/assets/img/z-sandals.png" class="img-product-style">
            <div class="title-product-bottom">Leather</div>
         </div>
         <div class="swiper-slide box-item-product">
            <img src="<?= get_template_directory_uri() ?>/assets/img/z-sandals.png" class="img-product-style">
            <div class="title-product-bottom">Leather</div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination swiper-pagination-product"></div>
   </div>
</div>

<article class="ag-full-width home-common" id="home-cards">
   <div class="ag-site-width">
      <div class="sm-only bg-mobile"></div>
      <picture>
         <source
            srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwbc12c87c/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218-m.avif"
            type="image/avif" media="(max-width: 640px)" width="640" height="2038">
         <source
            srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843d42e9/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218-m.webp"
            type="image/webp" media="(max-width: 640px)" width="640" height="2038">
         <source
            srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw3227b531/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218-m.jpg"
            type="image/jpeg" media="(max-width: 640px)" width="640" height="2038">
         <source
            srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw0e77a83d/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218.avif"
            type="image/avif" media="(min-width: 641px)" width="1920" height="953">
         <source
            srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw9d331147/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218.webp"
            type="image/webp" media="(min-width: 641px)" width="1920" height="953">
         <img
            src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwd4fb53c0/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218.jpg"
            width="1920" height="953" alt=" " class="bg-image">
      </picture>
      <div class="parallax-wrap">
         <div value="6" class="lax card-wrap-left" style="transform: translateX(4.46667px) translateY(-0.3px);">
            <div class="card-1 hover-loop" style="will-change: transform;">

               <div class="img-wrap">
                  <picture>
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw6e64ffe2/content/seasonal-content/homepage/2024/03/04/card-1-m.avif"
                        type="image/avif" media="(max-width: 640px)" width="640" height="668">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwfb35e730/content/seasonal-content/homepage/2024/03/04/card-1-m.webp"
                        type="image/webp" media="(max-width: 640px)" width="640" height="668">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw7e9a16af/content/seasonal-content/homepage/2024/03/04/card-1-m.png"
                        type="image/png" media="(max-width: 640px)" width="640" height="668">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1c99cf48/content/seasonal-content/homepage/2024/03/19/card-1.avif"
                        type="image/avif" media="(min-width: 641px)" width="832" height="468">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw34462b3e/content/seasonal-content/homepage/2024/03/19/card-1.webp"
                        type="image/webp" media="(min-width: 641px)" width="832" height="468">
                     <img
                        src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw47437de9/content/seasonal-content/homepage/2024/03/19/card-1.png"
                        type="image/png" width="832" height="468" alt="" class="img-main">
                  </picture>
                  <img
                     src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc83083b3/content/seasonal-content/homepage/2024/03/04/bus-anim.gif"
                     alt="Driving bus animation." class="bus-anim">
               </div>
               <div class="copy-cta-arrow">
                  <h3>Come hang out.</h3>
                  <a href="https://www.chacos.com/US/en/tour/" class="btn lg-only">FOLLOW THE TOUR</a>
                  <picture>
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843e7457/content/seasonal-content/homepage/2024/02/18/arrow-left.avif"
                        type="image/avif" media="(max-width: 640px)" width="80" height="56">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1f635c30/content/seasonal-content/homepage/2024/02/18/arrow-left.webp"
                        type="image/webp" media="(max-width: 640px)" width="80" height="56">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw84404e19/content/seasonal-content/homepage/2024/02/18/arrow-left.png"
                        type="image/png" media="(max-width: 640px)" width="80" height="56">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843e7457/content/seasonal-content/homepage/2024/02/18/arrow-left.avif"
                        type="image/avif" media="(min-width: 641px)" width="95" height="58">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1f635c30/content/seasonal-content/homepage/2024/02/18/arrow-left.webp"
                        type="image/webp" media="(min-width: 641px)" width="95" height="58">
                     <img
                        src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw84404e19/content/seasonal-content/homepage/2024/02/18/arrow-left.png"
                        type="image/png" width="95" height="58" alt="" class="arrow-left">
                  </picture>
               </div>
               <a href="https://www.chacos.com/US/en/tour/" class="btn sm-only">FOLLOW THE TOUR</a>
            </div>
         </div>
         <div value="5" class="lax card-wrap-right" style="transform: translateX(3.72222px) translateY(-0.25px);">
            <div class="card-2 hover-loop" style="will-change: transform;">
               <div class="img-wrap">
                  <picture>
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwf8a3d8fe/content/seasonal-content/homepage/2024/03/19/card-2-m.avif"
                        type="image/avif" media="(max-width: 640px)" width="536" height="668">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw0fdf2d8e/content/seasonal-content/homepage/2024/03/19/card-2-m.webp"
                        type="image/webp" media="(max-width: 640px)" width="536" height="668">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/v1710993956919/content/seasonal-content/homepage/2024/03/19/card-2-m.jpg"
                        type="image/jpeg" media="(max-width: 640px)" width="536" height="668">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc032b6b2/content/seasonal-content/homepage/2024/03/19/card-2.avif"
                        type="image/avif" media="(min-width: 641px)" width="832" height="468">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw68d7092a/content/seasonal-content/homepage/2024/03/19/card-2.webp"
                        type="image/webp" media="(min-width: 641px)" width="832" height="468">
                     <img
                        src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw62824b24/content/seasonal-content/homepage/2024/03/19/card-2.png"
                        type="image/png" width="832" height="468" alt="" class="img-main">
                  </picture>
               </div>
               <div class="copy-cta-arrow">
                  <picture>
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc86e8a21/content/seasonal-content/homepage/2024/02/18/arrow-right.avif"
                        type="image/avif" media="(max-width: 640px)" width="84" height="62">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dweb26099d/content/seasonal-content/homepage/2024/02/18/arrow-right.webp"
                        type="image/webp" media="(max-width: 640px)" width="84" height="62">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw9a0abd2d/content/seasonal-content/homepage/2024/02/18/arrow-right.png"
                        type="image/png" media="(max-width: 640px)" width="84" height="62">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc86e8a21/content/seasonal-content/homepage/2024/02/18/arrow-right.avif"
                        type="image/avif" media="(min-width: 641px)" width="79" height="58">
                     <source
                        srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dweb26099d/content/seasonal-content/homepage/2024/02/18/arrow-right.webp"
                        type="image/webp" media="(min-width: 641px)" width="79" height="58">
                     <img
                        src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw9a0abd2d/content/seasonal-content/homepage/2024/02/18/arrow-right.png"
                        type="image/png" width="79" height="58" alt="" class="arrow-right">
                  </picture>
                  <h3>Bodhi Collection</h3>
                  <a href="https://www.chacos.com/US/en/bodhi-sandal/" class="btn lg-only">SHOP BODHI</a>
               </div>
               <a href="https://www.chacos.com/US/en/bodhi-sandal/" class="btn sm-only">SHOP THE COLLECTION</a>
            </div>
         </div>
         <div value="3" class="lax overlay-wrap-left" style="transform: translateX(2.23333px) translateY(-0.15px);">
            <picture>
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw3d2ca96b/content/seasonal-content/homepage/2024/02/18/overlay-left.avif"
                  type="image/avif" media="(max-width: 640px)" width="151" height="242">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw78431433/content/seasonal-content/homepage/2024/02/18/overlay-left.webp"
                  type="image/webp" media="(max-width: 640px)" width="151" height="242">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw459b2475/content/seasonal-content/homepage/2024/02/18/overlay-left.png"
                  type="image/png" media="(max-width: 640px)" width="151" height="242">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw3d2ca96b/content/seasonal-content/homepage/2024/02/18/overlay-left.avif"
                  type="image/avif" media="(min-width: 641px)" width="168" height="272">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw78431433/content/seasonal-content/homepage/2024/02/18/overlay-left.webp"
                  type="image/webp" media="(min-width: 641px)" width="168" height="272">
               <img
                  src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw459b2475/content/seasonal-content/homepage/2024/02/18/overlay-left.png"
                  width="168" height="272" alt="" class="overlay-left hover-loop" style="will-change: transform;">
            </picture>
         </div>
         <div value="4" class="lax overlay-wrap-right" style="transform: translateX(2.97778px) translateY(-0.2px);">
            <picture>
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw91483930/content/seasonal-content/homepage/2024/02/18/overlay-right.avif"
                  type="image/avif" media="(max-width: 640px)" width="169" height="173">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc8f3939e/content/seasonal-content/homepage/2024/02/18/overlay-right.webp"
                  type="image/webp" media="(max-width: 640px)" width="169" height="173">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw61ef603d/content/seasonal-content/homepage/2024/02/18/overlay-right.png"
                  type="image/png" media="(max-width: 640px)" width="169" height="173">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw91483930/content/seasonal-content/homepage/2024/02/18/overlay-right.avif"
                  type="image/avif" media="(min-width: 641px)" width="241" height="217">
               <source
                  srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc8f3939e/content/seasonal-content/homepage/2024/02/18/overlay-right.webp"
                  type="image/webp" media="(min-width: 641px)" width="241" height="217">
               <img
                  src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw61ef603d/content/seasonal-content/homepage/2024/02/18/overlay-right.png"
                  width="241" height="217" alt="" class="overlay-right hover-loop" style="will-change: transform;">
            </picture>
         </div>
      </div>
   </div>
</article>

<div class="box-favorites">
   <div class="box-left-favo-img">
      <picture>
         <source
            srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw0cc6ee87/content/seasonal-content/homepage/2024/02/18/home-favorites-20240218.gif"
            media="(max-width: 640px)">
         <img
            src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw0cc6ee87/content/seasonal-content/homepage/2024/02/18/home-favorites-20240218.gif"
            class="w-100">
      </picture>
   </div>
   <div class="box-right-favo">
      <div class="title-chacoNation">#ChacoNation</div>
      <div class="title-favorites">Favorites</div>
      <div class="swiper favoritesSwiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <img src="<?= get_template_directory_uri() ?>/assets/img/sp1.png" alt="" class="w-100">
               <div class="name-product-favo">WOMEN'S ZX/2® CLASSIC SANDAL</div>
               <div class="price-product-favo">$105.00</div>
            </div>
            <div class="swiper-slide">
               <img src="<?= get_template_directory_uri() ?>/assets/img/sp1.png" alt="" class="w-100">
               <div class="name-product-favo">WOMEN'S ZX/2® CLASSIC SANDAL
                  WOMEN'S ZX/2® CLASSIC SANDAL
               </div>
               <div class="price-product-favo">$105.00</div>
            </div>
            <div class="swiper-slide">
               <img src="<?= get_template_directory_uri() ?>/assets/img/sp1.png" alt="" class="w-100">
               <div class="name-product-favo">WOMEN'S ZX/2® CLASSIC SANDAL
                  WOMEN'S ZX/2® CLASSIC SANDAL
               </div>
               <div class="price-product-favo">$105.00</div>
            </div>
            <div class="swiper-slide">
               <img src="<?= get_template_directory_uri() ?>/assets/img/sp1.png" alt="" class="w-100">
               <div class="name-product-favo">WOMEN'S ZX/2® CLASSIC SANDAL
                  WOMEN'S ZX/2® CLASSIC SANDAL
               </div>
               <div class="price-product-favo">$105.00</div>
            </div>
         </div>
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>
      </div>
   </div>

</div>

<div class="box-fun-adventurous">
   <img src="<?= get_template_directory_uri() ?>/assets/img/line-top.png" class="line-video-top">
   <figure class="w-100 m-0">
      <video data-src-sm="https://chacos-for-life.s3.amazonaws.com/customizing-m.mp4"
         data-poster-sm="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwa163a259/content/seasonal-content/landing-pages/chacos-for-life/images/customizing-m.png"
         data-src-lg="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4"
         data-poster-lg="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw615a2a62/content/seasonal-content/landing-pages/chacos-for-life/images/customizing.png"
         autoplay="" playsinline="" muted="" loop=""
         poster="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw615a2a62/content/seasonal-content/landing-pages/chacos-for-life/images/customizing.png"
         src="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4" class="w-100 video-desktop"></video>

      <video data-responsive="" data-src-sm="https://chacos-for-life.s3.amazonaws.com/customizing-m.mp4"
         data-poster-sm="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwa163a259/content/seasonal-content/landing-pages/chacos-for-life/images/customizing-m.png"
         data-src-lg="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4"
         data-poster-lg="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw615a2a62/content/seasonal-content/landing-pages/chacos-for-life/images/customizing.png"
         autoplay="" playsinline="" muted="" loop="" class="customizing-video w-100 video-mobile"
         poster="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwa163a259/content/seasonal-content/landing-pages/chacos-for-life/images/customizing-m.png"
         src="https://chacos-for-life.s3.amazonaws.com/customizing-m.mp4"></video>
   </figure>
   <img src="<?= get_template_directory_uri() ?>/assets/img/line-bottom.png" class="line-video-bottom">
   <div class="box-content-fun">
      <div class="title-content-fun">FUN ADVENTUROUS, <span style="color: #E48665;">UNIQUELY YOU.</span></div>
      <div class="d-flex flex-column">
         <a href="#" class="btn-link-fun">START CUSTOMIZING</a>
         <a href="#" class="btn-link-fun">GET INSPIRED</a>
      </div>
   </div>
</div>

<div class="box-around">
   <div class="box-header-around">
      <p class="title-big-around">Around the <span style="color: #E45C37;">Chacosphere</span></p>
      <p class="title-small-around">Join the #ChacoNation on Instagram</p>
   </div>

   <div class="swiper photo-library1 mb-2">
      <div class="swiper-wrapper">
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
      </div>
   </div>
   <div class="swiper photo-library2 mb-2">
      <div class="swiper-wrapper">
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
      </div>
   </div>
   <div class="swiper photo-library3 mb-2">
      <div class="swiper-wrapper">
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
         <div class="swiper-slide"><img
               src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
               class="w-100"></div>
      </div>
   </div>


</div>
<div class="box-describe">
   <p class="title-describe-footer">Chaco Outdoor Sandals & Flips</p>
   <p class="content-describe-footer">Get ready for water, trail, and everything in between with Chaco sandals and
      flips. Our hiking sandals provide function and support for all your outdoor adventures. Plus, our sport sandals
      come in a variety of styles, colors, and fits, so you can find the perfect footwear for any occasion. Power
      your next adventure with sandals, flip flops, and shoes built to perform in style.</p>
</div>
<?php get_footer(); ?>
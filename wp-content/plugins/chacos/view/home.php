<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/home.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
   <style>
   .row-1 {
      animation: wave-row-1 3.4s ease-in-out infinite alternate;
   }

   .row-2 {
      animation: wave-row-2 3.5s ease-in-out infinite alternate;
   }

   .row-3 {
      animation: wave-row-3 3.6s ease-in-out infinite alternate;
   }

   @keyframes wave-row-1 {
      0% {
         transform: translateX(0);
      }

      50% {
         transform: translateX(50px);
      }

      100% {
         transform: translateX(0);
      }
   }

   @keyframes wave-row-2 {
      0% {
         transform: translateX(0);
      }

      50% {
         transform: translateX(55px);
      }

      100% {
         transform: translateX(0);
      }
   }

   @keyframes wave-row-3 {
      0% {
         transform: translateX(0);
      }

      50% {
         transform: translateX(60px);
      }

      100% {
         transform: translateX(0);
      }
   }
   </style>
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="box-banner swiper bannerSwiper">
      <div class="swiper-wrapper">
         <div class="swiper-slide box-item-banner">
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/banner.png" class="w-100 img-banner-home">
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/slide1.png" class="w-100 img-banner-home-mobile">
            <div class="box-contnt-banner">
               <div class="title-banner-one">LATEST DROP</div>
               <div class="title-banner-two"><span style="color: #1D4B58;">THE RETRO</span> <span
                     style="color: #B85B53;">COLLECTION</span></div>
               <div class="title-banner-three">Rewind and refresh your style with the Retro Collection.</div>
               <a href="#" class="btn-link-banner">SHOP RETRO COLLECTION</a>
            </div>
         </div>
         <div class="swiper-slide box-item-banner">
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/banner2.png" class="w-100 img-banner-home">
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/slide.jpg" class="w-100 img-banner-home-mobile">
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
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/z-sandals.png" class="img-product-style">
               <div class="title-product-bottom">Leather</div>
            </div>
            <div class="swiper-slide box-item-product">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/z-sandals.png" class="img-product-style">
               <div class="title-product-bottom">Leather</div>
            </div>
            <div class="swiper-slide box-item-product">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/z-sandals.png" class="img-product-style">
               <div class="title-product-bottom">Leather</div>
            </div>
            <div class="swiper-slide box-item-product">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/z-sandals.png" class="img-product-style">
               <div class="title-product-bottom">Leather</div>
            </div>
            <div class="swiper-slide box-item-product">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/z-sandals.png" class="img-product-style">
               <div class="title-product-bottom">Leather</div>
            </div>
            <div class="swiper-slide box-item-product">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/z-sandals.png" class="img-product-style">
               <div class="title-product-bottom">Leather</div>
            </div>
            <div class="swiper-slide box-item-product">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/z-sandals.png" class="img-product-style">
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
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/sp1.png" alt="" class="w-100">
                  <div class="name-product-favo">WOMEN'S ZX/2® CLASSIC SANDAL</div>
                  <div class="price-product-favo">$105.00</div>
               </div>
               <div class="swiper-slide">
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/sp1.png" alt="" class="w-100">
                  <div class="name-product-favo">WOMEN'S ZX/2® CLASSIC SANDAL
                     WOMEN'S ZX/2® CLASSIC SANDAL
                  </div>
                  <div class="price-product-favo">$105.00</div>
               </div>
               <div class="swiper-slide">
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/sp1.png" alt="" class="w-100">
                  <div class="name-product-favo">WOMEN'S ZX/2® CLASSIC SANDAL
                     WOMEN'S ZX/2® CLASSIC SANDAL
                  </div>
                  <div class="price-product-favo">$105.00</div>
               </div>
               <div class="swiper-slide">
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/sp1.png" alt="" class="w-100">
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
      <figure class="w-100">
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

      <div class="swiper photo-library">
         <div class="swiper-wrapper">
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-1"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
         </div>
      </div>
      <div class="swiper photo-library">
         <div class="swiper-wrapper">
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-2"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
         </div>
      </div>
      <div class="swiper photo-library">
         <div class="swiper-wrapper">
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
                  src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg"
                  class="w-100"></div>
            <div class="swiper-slide row-3"><img
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

   <!-- </div> -->

   <?php include plugin_dir_path( __FILE__ ) . 'layout/footer.php'?>

   <!-- </div> -->

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
   </script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/index.js"></script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/home.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/home.css">
   <style>
      #container {
         overflow: hidden;
         height: 300px;
         position: relative;
      }

      .row {
         display: flex;
         overflow: hidden;
      }

      .img-wrapper {
         flex: 1;
         position: relative;
         overflow: hidden;
         will-change: transform;
      }

      .img-wrapper img {
         width: 100%;
         height: auto;
      }

      @keyframes slide-up {
         0% {
            transform: translateY(100%);
            /* Đẩy ảnh xuống dưới */
         }

         100% {
            transform: translateY(0);
            /* Đưa ảnh về vị trí ban đầu */
         }
      }
   </style>
</head>

<body>
   <?php include plugin_dir_path(__FILE__) . 'layout/header.php' ?>

   <?php
   // Retrieve and display the sliders
   $args = array(
      'post_type'      => 'slider',
   );

   $slider_query = new WP_Query($args);
   ?>

   <!-- SLIDER -->
   <div class="box-banner swiper bannerSwiper">
      <div class="swiper-wrapper">
         <?php
         if ($slider_query->have_posts()) {
            foreach ($slider_query->get_posts() as $post) {
               $slider_query->the_post();
               $banner_image = get_field('slider_image');
               $title         = get_field('slider_title');
               $tag         = get_field('slider_tag');
               $desc         = get_field('slider_description');
               $button_title         = get_field('slider_button_title');
               $button_link         = get_field('slider_button_link');
         ?>
               <div class="swiper-slide box-item-banner">
                  <img src="<?= $banner_image['url'] ?>" class="w-100 img-banner-home">
                  <div class="box-contnt-banner">
                     <?php
                     if ($tag) {
                        echo '<div class="title-banner-one">' . htmlspecialchars($tag) . '</div>';
                     }
                     ?>

                     <?php
                     if ($title) {
                        $words = explode(' ', $title); // Split the title into an array of words
                        $wordCount = count($words); // Get the total number of words

                        $firstPart = ($wordCount > 1) ? implode(' ', array_slice($words, 0, -1)) : '';
                        $lastPart = ($wordCount > 0) ? $words[$wordCount - 1] : '';
                     }
                     ?>

                     <div class="title-banner-two"><span style="color: #1D4B58;"><?= $firstPart ?? "" ?></span> <span style="color: #B85B53;"><?= $lastPart ?? "" ?></span></div>
                     <?php
                     if ($desc) {
                        echo '<div class="title-banner-three">' . htmlspecialchars($desc) . '</div>';
                     }
                     ?>
                     <?php
                     if ($button_title) {
                     ?>
                        <a href="<?= $button_link ?? '#' ?>" class="btn-link-banner"><?= $button_title ?></a>
                     <?php
                     }
                     ?>
                  </div>
               </div>
         <?php
            }
         }
         ?>
      </div>
      <div class="swiper-pagination swiper-pagination-banner"></div>
   </div>

   <?php
   // Retrieve and display the shop_by_style
   $args = array(
      'post_type'      => 'shop_by_style',
   );
   $sbs_query = new WP_Query($args);
   ?>
   <!-- SHOP BY STYLE -->
   <div class="box-shop-style">
      <div class="title-shop-style">Shop <span style="color: #E48665;">by style</span></div>
      <?php
      if ($sbs_query->have_posts()) {
      ?>
         <div class="swiper productSwiper">
            <div class="swiper-wrapper">
               <?php
               foreach ($sbs_query->get_posts() as $post) {
                  $sbs_query->the_post();
                  $image = get_field('product_image');
                  $title = get_field('product_title');
                  $category = get_field('product_category');
               ?>

                  <div class="swiper-slide box-item-product">
                     <div class="title-product-top"><?= $category ?></div>
                     <img src="<?= $image['url'] ?>" class="img-product-style">
                     <div class="title-product-bottom"><?= $title ?></div>
                  </div>
               <?php
               }
               ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination swiper-pagination-product"></div>
         </div>
      <?php
      }
      ?>
   </div>

   <?php
   // Retrieve and display the home_card
   $args = array(
      'post_type'      => 'home_card',
   );

   $card_query = new WP_Query($args);
   ?>
   <!-- HOME CARD -->
   <article class="ag-full-width home-common" id="home-cards">
      <div class="ag-site-width">
         <div class="sm-only bg-mobile"></div>
         <picture>
            <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwbc12c87c/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218-m.avif" type="image/avif" media="(max-width: 640px)" width="640" height="2038">
            <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843d42e9/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218-m.webp" type="image/webp" media="(max-width: 640px)" width="640" height="2038">
            <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw3227b531/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218-m.jpg" type="image/jpeg" media="(max-width: 640px)" width="640" height="2038">
            <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw0e77a83d/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218.avif" type="image/avif" media="(min-width: 641px)" width="1920" height="953">
            <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw9d331147/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218.webp" type="image/webp" media="(min-width: 641px)" width="1920" height="953">
            <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwd4fb53c0/content/seasonal-content/homepage/2024/02/18/home-cards-bg-20240218.jpg" width="1920" height="953" alt=" " class="bg-image">
         </picture>
         <div class="parallax-wrap">
            <div value="6" class="lax card-wrap-left" style="transform: translateX(4.46667px) translateY(-0.3px);">
               <div class="card-1 hover-loop" style="will-change: transform;">
                  <div class="img-wrap">
                     <picture>
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw6e64ffe2/content/seasonal-content/homepage/2024/03/04/card-1-m.avif" type="image/avif" media="(max-width: 640px)" width="640" height="668">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwfb35e730/content/seasonal-content/homepage/2024/03/04/card-1-m.webp" type="image/webp" media="(max-width: 640px)" width="640" height="668">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw7e9a16af/content/seasonal-content/homepage/2024/03/04/card-1-m.png" type="image/png" media="(max-width: 640px)" width="640" height="668">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1c99cf48/content/seasonal-content/homepage/2024/03/19/card-1.avif" type="image/avif" media="(min-width: 641px)" width="832" height="468">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw34462b3e/content/seasonal-content/homepage/2024/03/19/card-1.webp" type="image/webp" media="(min-width: 641px)" width="832" height="468">
                        <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw47437de9/content/seasonal-content/homepage/2024/03/19/card-1.png" type="image/png" width="832" height="468" alt="" class="img-main">
                     </picture>
                     <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc83083b3/content/seasonal-content/homepage/2024/03/04/bus-anim.gif" alt="Driving bus animation." class="bus-anim">
                  </div>
                  <div class="copy-cta-arrow">
                     <h3>Come hang out.</h3>
                     <a href="https://www.chacos.com/US/en/tour/" class="btn lg-only">FOLLOW THE TOUR</a>
                     <picture>
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843e7457/content/seasonal-content/homepage/2024/02/18/arrow-left.avif" type="image/avif" media="(max-width: 640px)" width="80" height="56">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1f635c30/content/seasonal-content/homepage/2024/02/18/arrow-left.webp" type="image/webp" media="(max-width: 640px)" width="80" height="56">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw84404e19/content/seasonal-content/homepage/2024/02/18/arrow-left.png" type="image/png" media="(max-width: 640px)" width="80" height="56">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843e7457/content/seasonal-content/homepage/2024/02/18/arrow-left.avif" type="image/avif" media="(min-width: 641px)" width="95" height="58">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1f635c30/content/seasonal-content/homepage/2024/02/18/arrow-left.webp" type="image/webp" media="(min-width: 641px)" width="95" height="58">
                        <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw84404e19/content/seasonal-content/homepage/2024/02/18/arrow-left.png" type="image/png" width="95" height="58" alt="" class="arrow-left">
                     </picture>
                  </div>
                  <a href="https://www.chacos.com/US/en/tour/" class="btn sm-only">FOLLOW THE TOUR</a>
               </div>
            </div>
            <div value="5" class="lax card-wrap-right" style="transform: translateX(3.72222px) translateY(-0.25px);">
               <div class="card-2 hover-loop" style="will-change: transform;">
                  <div class="img-wrap">
                     <picture>
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwf8a3d8fe/content/seasonal-content/homepage/2024/03/19/card-2-m.avif" type="image/avif" media="(max-width: 640px)" width="536" height="668">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw0fdf2d8e/content/seasonal-content/homepage/2024/03/19/card-2-m.webp" type="image/webp" media="(max-width: 640px)" width="536" height="668">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/v1710993956919/content/seasonal-content/homepage/2024/03/19/card-2-m.jpg" type="image/jpeg" media="(max-width: 640px)" width="536" height="668">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc032b6b2/content/seasonal-content/homepage/2024/03/19/card-2.avif" type="image/avif" media="(min-width: 641px)" width="832" height="468">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw68d7092a/content/seasonal-content/homepage/2024/03/19/card-2.webp" type="image/webp" media="(min-width: 641px)" width="832" height="468">
                        <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw62824b24/content/seasonal-content/homepage/2024/03/19/card-2.png" type="image/png" width="832" height="468" alt="" class="img-main">
                     </picture>
                  </div>
                  <div class="copy-cta-arrow">
                     <picture>
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc86e8a21/content/seasonal-content/homepage/2024/02/18/arrow-right.avif" type="image/avif" media="(max-width: 640px)" width="84" height="62">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dweb26099d/content/seasonal-content/homepage/2024/02/18/arrow-right.webp" type="image/webp" media="(max-width: 640px)" width="84" height="62">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw9a0abd2d/content/seasonal-content/homepage/2024/02/18/arrow-right.png" type="image/png" media="(max-width: 640px)" width="84" height="62">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc86e8a21/content/seasonal-content/homepage/2024/02/18/arrow-right.avif" type="image/avif" media="(min-width: 641px)" width="79" height="58">
                        <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dweb26099d/content/seasonal-content/homepage/2024/02/18/arrow-right.webp" type="image/webp" media="(min-width: 641px)" width="79" height="58">
                        <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw9a0abd2d/content/seasonal-content/homepage/2024/02/18/arrow-right.png" type="image/png" width="79" height="58" alt="" class="arrow-right">
                     </picture>
                     <h3>Bodhi Collection</h3>
                     <a href="https://www.chacos.com/US/en/bodhi-sandal/" class="btn lg-only">SHOP BODHI</a>
                  </div>
                  <a href="https://www.chacos.com/US/en/bodhi-sandal/" class="btn sm-only">SHOP THE COLLECTION</a>
               </div>
            </div>
            <div value="3" class="lax overlay-wrap-left" style="transform: translateX(2.23333px) translateY(-0.15px);">
               <picture>
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw3d2ca96b/content/seasonal-content/homepage/2024/02/18/overlay-left.avif" type="image/avif" media="(max-width: 640px)" width="151" height="242">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw78431433/content/seasonal-content/homepage/2024/02/18/overlay-left.webp" type="image/webp" media="(max-width: 640px)" width="151" height="242">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw459b2475/content/seasonal-content/homepage/2024/02/18/overlay-left.png" type="image/png" media="(max-width: 640px)" width="151" height="242">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw3d2ca96b/content/seasonal-content/homepage/2024/02/18/overlay-left.avif" type="image/avif" media="(min-width: 641px)" width="168" height="272">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw78431433/content/seasonal-content/homepage/2024/02/18/overlay-left.webp" type="image/webp" media="(min-width: 641px)" width="168" height="272">
                  <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw459b2475/content/seasonal-content/homepage/2024/02/18/overlay-left.png" width="168" height="272" alt="" class="overlay-left hover-loop" style="will-change: transform;">
               </picture>
            </div>
            <div value="4" class="lax overlay-wrap-right" style="transform: translateX(2.97778px) translateY(-0.2px);">
               <picture>
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw91483930/content/seasonal-content/homepage/2024/02/18/overlay-right.avif" type="image/avif" media="(max-width: 640px)" width="169" height="173">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc8f3939e/content/seasonal-content/homepage/2024/02/18/overlay-right.webp" type="image/webp" media="(max-width: 640px)" width="169" height="173">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw61ef603d/content/seasonal-content/homepage/2024/02/18/overlay-right.png" type="image/png" media="(max-width: 640px)" width="169" height="173">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw91483930/content/seasonal-content/homepage/2024/02/18/overlay-right.avif" type="image/avif" media="(min-width: 641px)" width="241" height="217">
                  <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc8f3939e/content/seasonal-content/homepage/2024/02/18/overlay-right.webp" type="image/webp" media="(min-width: 641px)" width="241" height="217">
                  <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw61ef603d/content/seasonal-content/homepage/2024/02/18/overlay-right.png" width="241" height="217" alt="" class="overlay-right hover-loop" style="will-change: transform;">
               </picture>
            </div>
         </div>
      </div>
   </article>

   <?php
   // Restore the main query's original post data
   wp_reset_postdata();
   $favoritesHashtag = get_field('favorites_hashtag');
   ?>
   <div class="box-favorites">
      <div class="box-left-favo-img">
         <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" class="w-100">
      </div>
      <div class="box-right-favo">
         <div class="title-chacoNation">#ChacoNation</div>
         <div class="title-favorites">Favorites</div>
         <div class="swiper favoritesSwiper">
            <div class="swiper-wrapper">


               <?php
               $args = array(
                  'post_type' => 'product',
                  'posts_per_page' => -1,
               );

               $products = new WP_Query($args);
               if ($products->have_posts()) {
                  foreach ($products->posts as $post) {
                     setup_postdata($post);
                     global $product;
                     // Get product image
                     $product_image_id = $product->get_image_id();
                     $product_image_url = wp_get_attachment_image_url($product_image_id, 'full');
                     $productName = $product->get_name();
                     $productPrice = $product->get_price();
               ?>
                     <div class="swiper-slide">
                        <img src="<?php echo $product_image_url ? $product_image_url : '/wp-content/uploads/woocommerce-placeholder.png'; ?>" alt="" class="w-100">

                        <?php
                        if ($productName) {
                           echo '<div class="name-product-favo">' . $productName . '</div>';
                        }
                        ?>

                        <?php
                        if ($productPrice) {
                           echo '<div class="price-product-favo">' . number_format($productPrice, 0, '.', ',') . ' đ</div>';
                        }
                        ?>

                     </div>

               <?php
                  }
               }
               ?>

            </div>
         </div>
      </div>

   </div>

   <?php
   // Restore the main query's original post data
   wp_reset_postdata();
   $customTitle = get_field('custom_title');
   $customButtonTitle = get_field('custom_button_title');
   $customButtonLink = get_field('custom_button_link');

   if ($customTitle) {
      $words = explode(' ', $customTitle); // Split the title into an array of words
      $wordCount = count($words); // Get the total number of words

      $firstPart = ($wordCount > 2) ? implode(' ', array_slice($words, 0, -2)) : '';
      $lastPart = ($wordCount > 1) ? implode(' ', array_slice($words, -2)) : '';
   }
   ?>

   <div class="box-fun-adventurous">
      <figure class="w-100">
         <video data-src-sm="https://chacos-for-life.s3.amazonaws.com/customizing-m.mp4" data-poster-sm="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwa163a259/content/seasonal-content/landing-pages/chacos-for-life/images/customizing-m.png" data-src-lg="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4" data-poster-lg="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw615a2a62/content/seasonal-content/landing-pages/chacos-for-life/images/customizing.png" autoplay="" playsinline="" muted="" loop="" poster="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw615a2a62/content/seasonal-content/landing-pages/chacos-for-life/images/customizing.png" src="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4" class="w-100"></video>
      </figure>
      <div class="box-content-fun">
         <div class="title-content-fun"><?= $firstPart ?> <span style="color: #E48665;"><?= $lastPart ?></span></div>
         <?php
         if ($customButtonTitle) {
            echo '<a href=' . $customButtonLink . ' class="btn-link-fun">' . $customButtonTitle . '</a>';
         }
         ?>
      </div>
   </div>

   <?php
   // Restore the main query's original post data
   wp_reset_postdata();
   $socialTitle = get_field('social_title');
   $socialSubTitle = get_field('social_sub_title');
   $socialFooterTitle = get_field('social_footer_title');
   $socialDescription = get_field('social_description');

   if ($socialTitle) {
      $words = explode(' ', $socialTitle); // Split the title into an array of words
      $wordCount = count($words); // Get the total number of words

      $firstPart = ($wordCount > 1) ? implode(' ', array_slice($words, 0, -1)) : '';
      $lastPart = ($wordCount > 0) ? $words[$wordCount - 1] : '';
   }
   ?>
   <div class="box-around">
      <div class="box-header-around">
         <p class="title-big-around"><?= $firstPart ?> <span style="color: #E45C37;"><?= $lastPart ?></span></p>
         <p class="title-small-around"><?= $socialSubTitle ?></p>
      </div>

      <!-- <div id="container">
   <div class="row">
   <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>
    
    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>

    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>
    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>
    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>

    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>
    
    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>

    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>
    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>
    <div class="img-wrapper">
   <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2024/3/22/photo-1-17110846772691715316409.jpg" alt="Gallery">
    </div>

    </div> -->

      <div class="box-describe">
         <p class="title-describe-footer"><?= $socialFooterTitle ?></p>
         <p class="content-describe-footer"><?= $socialDescription ?></p>
      </div>

   </div>

   <?php include plugin_dir_path(__FILE__) . 'layout/footer.php' ?>

   </div>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/index.js"></script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/home.js"></script>
   <script>
      const rows = document.querySelectorAll('.row');

      function startScrolling() {
         rows.forEach(row => {
            const imgWrappers = row.querySelectorAll('.img-wrapper');
            imgWrappers.forEach((wrapper, index) => {
               wrapper.style.animation = `slide-up 1.5s ease-in-out ${index * 0.05}s forwards`;
            });
         });
      }

      window.onload = startScrolling;
   </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/home.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path(__FILE__) . 'layout/header.php' ?>

   <!-- Slider -->
   <?php
   if (have_rows('sliders')) {
   ?>
      <div class="box-banner swiper bannerSwiper">
         <div class="swiper-wrapper">

            <?php
            while (have_rows('sliders')) : the_row();

               $image = get_sub_field('image');
               $tag = get_sub_field('tag');
               $title = get_sub_field('title');
               $description = get_sub_field('description');
               $button_title = get_sub_field('button_title');
               $button_target = get_sub_field('button_target');

            ?>
               <div class="swiper-slide box-item-banner">
                  <img src="<?= $image['url'] ?? '#' ?>" class="w-100 img-banner-home">
                  <img src="<?= $image['url'] ?? '#' ?>" class="w-100 img-banner-home-mobile">
                  <div class="box-contnt-banner">
                     <?php
                     if ($tag) {
                        echo '<div class="title-banner-one">' . htmlspecialchars(strtoupper($tag)) . '</div>';
                     }
                     ?>
                     <?php
                     if ($title) {
                        $words = explode(' ', strtoupper($title));
                        $wordCount = count($words);

                        // 1 word last
                        $firstTitle = ($wordCount > 1) ? implode(' ', array_slice($words, 0, -1)) : '';
                        $lastTitle = ($wordCount > 0) ? $words[$wordCount - 1] : '';
                     }
                     ?>
                     <div class="title-banner-two"><span style="color: #1D4B58;"><?= $firstTitle ?? "" ?></span> <span style="color: #B85B53;"><?= $lastTitle ?? "" ?></span></div>
                     <?php
                     if ($description) {
                        echo '<div class="title-banner-three">' . htmlspecialchars($description) . '</div>';
                     }
                     ?>
                     <?php
                     if ($button_title) {
                        echo '<a href="' . $button_target . '" class="btn-link-banner">' . htmlspecialchars(strtoupper($button_title)) . '</a>';
                     }
                     ?>
                  </div>
               </div>
            <?php
            endwhile;
            ?>
         </div>
         <div class="swiper-pagination swiper-pagination-banner"></div>
      </div>
   <?php
   }
   ?>
   <!-- Slider -->

   <!-- Shop by style -->
   <?php
   if (have_rows('shop_by_style')) {
   ?>
      <div class="box-shop-style">
         <div class="title-shop-style">Shop <span style="color: #E48665;">by style</span></div>
         <div class="swiper productSwiper">
            <div class="swiper-wrapper">
               <?php
               while (have_rows('shop_by_style')) : the_row();
                  $image = get_sub_field('image');
                  $title = get_sub_field('title');
               ?>
                  <div class="swiper-slide box-item-product">
                     <img src="<?= $image['url'] ?>" class="img-product-style">
                     <div class="title-product-bottom"><?= $title ?></div>
                  </div>
               <?php
               endwhile;
               ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination swiper-pagination-product"></div>
         </div>
      </div>
   <?php
   }
   ?>
   <!-- Shop by style -->

   <!-- Home cards -->
   <?php
   $homeCards = get_field('home_cards');
   $leftCard = $homeCards['left_card'] ?? null;
   $rightCard = $homeCards['right_card'] ?? null;
   ?>

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
            <?php
            if ($leftCard) :
            ?>
               <div value="6" class="lax card-wrap-left" style="transform: translateX(4.46667px) translateY(-0.3px);">
                  <div class="card-1 hover-loop" style="will-change: transform;">
                     <div class="img-wrap">
                        <picture>
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw6e64ffe2/content/seasonal-content/homepage/2024/03/04/card-1-m.avif" type="image/avif" media="(max-width: 640px)" width="640" height="668">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwfb35e730/content/seasonal-content/homepage/2024/03/04/card-1-m.webp" type="image/webp" media="(max-width: 640px)" width="640" height="668">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw7e9a16af/content/seasonal-content/homepage/2024/03/04/card-1-m.png" type="image/png" media="(max-width: 640px)" width="640" height="668">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1c99cf48/content/seasonal-content/homepage/2024/03/19/card-1.avif" type="image/avif" media="(min-width: 641px)" width="832" height="468">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw34462b3e/content/seasonal-content/homepage/2024/03/19/card-1.webp" type="image/webp" media="(min-width: 641px)" width="832" height="468">
                           <img src="<?= $leftCard['image']['url'] ?>" type="image/png" width="832" height="468" alt="" class="img-main">
                        </picture>
                        <!-- <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc83083b3/content/seasonal-content/homepage/2024/03/04/bus-anim.gif" alt="Driving bus animation." class="bus-anim"> -->
                     </div>
                     <div class="copy-cta-arrow">
                        <?php
                        if ($leftCard['title']) {
                           echo '<h3>' . $leftCard['title'] . '</h3>';
                        }
                        ?>
                        <?php
                        if ($leftCard['button_title']) {
                           echo '<a href="' . $leftCard['button_target'] . '" class="btn lg-only">' . $leftCard['button_title'] . '</a>';
                        }
                        ?>
                        <picture>
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843e7457/content/seasonal-content/homepage/2024/02/18/arrow-left.avif" type="image/avif" media="(max-width: 640px)" width="80" height="56">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1f635c30/content/seasonal-content/homepage/2024/02/18/arrow-left.webp" type="image/webp" media="(max-width: 640px)" width="80" height="56">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw84404e19/content/seasonal-content/homepage/2024/02/18/arrow-left.png" type="image/png" media="(max-width: 640px)" width="80" height="56">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw843e7457/content/seasonal-content/homepage/2024/02/18/arrow-left.avif" type="image/avif" media="(min-width: 641px)" width="95" height="58">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw1f635c30/content/seasonal-content/homepage/2024/02/18/arrow-left.webp" type="image/webp" media="(min-width: 641px)" width="95" height="58">
                           <img src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw84404e19/content/seasonal-content/homepage/2024/02/18/arrow-left.png" type="image/png" width="95" height="58" alt="" class="arrow-left">
                        </picture>
                     </div>
                     <?php
                     if ($leftCard['button_title']) {
                        echo '<a href="' . $leftCard['button_target'] . '" class="btn sm-only">' . $leftCard['button_title'] . '</a>';
                     }
                     ?>
                  </div>
               </div>

            <?php endif; ?>

            <?php
            if ($rightCard) :
            ?>
               <div value="5" class="lax card-wrap-right" style="transform: translateX(3.72222px) translateY(-0.25px);">
                  <div class="card-2 hover-loop" style="will-change: transform;">
                     <div class="img-wrap">
                        <picture>
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwf8a3d8fe/content/seasonal-content/homepage/2024/03/19/card-2-m.avif" type="image/avif" media="(max-width: 640px)" width="536" height="668">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw0fdf2d8e/content/seasonal-content/homepage/2024/03/19/card-2-m.webp" type="image/webp" media="(max-width: 640px)" width="536" height="668">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/v1710993956919/content/seasonal-content/homepage/2024/03/19/card-2-m.jpg" type="image/jpeg" media="(max-width: 640px)" width="536" height="668">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc032b6b2/content/seasonal-content/homepage/2024/03/19/card-2.avif" type="image/avif" media="(min-width: 641px)" width="832" height="468">
                           <source srcset="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dw68d7092a/content/seasonal-content/homepage/2024/03/19/card-2.webp" type="image/webp" media="(min-width: 641px)" width="832" height="468">
                           <img src="<?= $rightCard['image']['url'] ?>" type="image/png" width="832" height="468" alt="" class="img-main">
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
                        <?php
                        if ($rightCard['title']) {
                           echo '<h3>' . $rightCard['title'] . '</h3>';
                        }
                        ?>
                        <?php
                        if ($rightCard['button_title']) {
                           echo '<a href="' . $rightCard['button_target'] . '" class="btn lg-only">' . $rightCard['button_title'] . '</a>';
                        }
                        ?>
                     </div>
                     <?php
                     if ($rightCard['button_title']) {
                        echo '<a href="' . $rightCard['button_target'] . '" class="btn sm-only">' . $rightCard['button_title'] . '</a>';
                     }
                     ?>
                  </div>
               </div>
            <?php endif; ?>

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
   <!-- Home cards -->

   <!-- Favorites -->
   <?php
   $favorites = get_field('favorites');
   $image = $favorites['image'] ?? null;
   $hashTag = $favorites['hashtag'] ?? null;
   $title = $favorites['title'] ?? null;
   $products = $favorites['products'] ?? null;

   if ($favorites) {
   ?>
      <div class="box-favorites">
         <div class="box-left-favo-img">
            <picture>
               <source srcset="<?= $image['url'] ?>" media="(max-width: 640px)">
               <img src="<?= $image['url'] ?>" class="w-100">
            </picture>
         </div>
         <div class="box-right-favo">
            <?php
            if ($hashTag) {
               echo '<div class="title-chacoNation">#' . $hashTag . '</div>';
            }
            ?>
            <?php
            if ($title) {
               echo '<div class="title-favorites">' . $title . '</div>';
            }
            ?>
            <?php
            if ($products) {
            ?>
               <div class="swiper favoritesSwiper">
                  <div class="swiper-wrapper">
                     <?php
                     foreach ($products as $pro) {
                     ?>
                        <div class="swiper-slide">
                           <img src="<?= $pro['image']['url'] ?>" alt="" class="w-100">
                           <div class="name-product-favo"><?= $pro['title'] ?></div>
                           <?php
                           if ($pro['price']) {
                              echo '<div class="price-product-favo">$' . $pro['price'] . '</div>';
                           }
                           ?>
                        </div>
                     <?php
                     }
                     ?>
                  </div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
               </div>
            <?php
            }
            ?>
         </div>

      </div>
   <?php
   }
   ?>
   <!-- Favorites -->

   <!-- Adventurous -->
   <?php
   $adventurous = get_field('adventurous');
   $poster = $adventurous['poster'] ?? null;
   $posterSM = $adventurous['poster_sm'] ?? null;
   $posterLG = $adventurous['poster_lg'] ?? null;
   $title = $adventurous['title'] ?? null;
   $button_1_title = $adventurous['button_1_title'] ?? null;
   $button_2_title = $adventurous['button_2_title'] ?? null;
   $button_1_target = $adventurous['button_1_target'] ?? '#';
   $button_2_target = $adventurous['button_2_target'] ?? '#';

   $words = explode(' ', strtoupper($title)); // Split the title into an array of words
   $wordCount = count($words); // Get the total number of words

   $firstPart = ($wordCount > 2) ? implode(' ', array_slice($words, 0, -2)) : '';
   $lastPart = ($wordCount > 1) ? implode(' ', array_slice($words, -2)) : '';

   if ($adventurous) {
   ?>
      <div class="box-fun-adventurous">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/line-top.png" class="line-video-top">
         <figure class="w-100 m-0">
            <video data-src-sm="https://chacos-for-life.s3.amazonaws.com/customizing-m.mp4" data-poster-sm="<?= $posterSM['url'] ?>" data-src-lg="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4" data-poster-lg="<?= $posterLG['url'] ?>" autoplay="" playsinline="" muted="" loop="" poster="<?= $poster['url'] ?>" src="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4" class="w-100 video-desktop">
            </video>

            <video data-responsive="" data-src-sm="https://chacos-for-life.s3.amazonaws.com/customizing-m.mp4" data-poster-sm="<?= $posterSM['url'] ?>" data-src-lg="https://chacos-for-life.s3.amazonaws.com/customizing-d.mp4" data-poster-lg="<?= $posterLG['url'] ?>" autoplay="" playsinline="" muted="" loop="" class="customizing-video w-100 video-mobile" poster="<?= $poster['url'] ?>" src="https://chacos-for-life.s3.amazonaws.com/customizing-m.mp4">
            </video>

         </figure>
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/line-bottom.png" class="line-video-bottom">
         <div class="box-content-fun">
            <div class="title-content-fun"><?= $firstPart ?> <span style="color: #E48665;"><?= $lastPart ?></span></div>
            <div class="d-flex flex-column">
               <?php
               if ($button_1_title) {
                  echo '<a href="' . $button_1_target . '" class="btn-link-fun">' . $button_1_title . '</a>';
               }
               ?>
               <?php
               if ($button_2_title) {
                  echo '<a href="' . $button_2_target . '" class="btn-link-fun">' . $button_2_title . '</a>';
               }
               ?>
            </div>
         </div>
      </div>
   <?php
   }
   ?>
   <!-- Adventurous -->

   <!-- Instagram social -->
   <?php
   $social = get_field('social');
   $title = $social['title'] ?? null;
   $description = $social['description'] ?? null;
   $first_gallery = $social['first_gallery'] ?? null;
   $second_gallery = $social['second_gallery'] ?? null;
   $last_gallery = $social['last_gallery'] ?? null;

   if ($title) {
      $words = explode(' ', $title); // Split the title into an array of words
      $wordCount = count($words); // Get the total number of words

      $firstPart = ($wordCount > 1) ? implode(' ', array_slice($words, 0, -1)) : '';
      $lastPart = ($wordCount > 0) ? $words[$wordCount - 1] : '';
   }
   if ($social) {
   ?>
      <div class="box-around">
         <?php
         if ($title || $description) {
         ?>
            <div class="box-header-around">
               <?php
               if ($title) {
                  echo '<p class="title-big-around">' . $firstPart . ' <span style="color: #E45C37;">' . $lastPart . '</span></p>';
               }
               ?>

               <?php
               if ($description) {
                  echo '<p class="title-small-around">' . $description . '</p>';
               }
               ?>
            </div>
         <?php
         }
         ?>

         <?php
         if ($first_gallery) {
         ?>
            <div class="swiper photo-library1 mb-2">
               <div class="swiper-wrapper">
                  <?php
                  foreach ($first_gallery as $gal) {
                     echo '<div class="swiper-slide"><img src="' . $gal['image']['url'] . '" class="w-100"></div>';
                  }
                  ?>
               </div>
            </div>
         <?php
         }
         ?>

         <?php
         if ($second_gallery) {
         ?>
            <div class="swiper photo-library2 mb-2">
               <div class="swiper-wrapper">
                  <?php
                  foreach ($second_gallery as $gal) {
                     echo '<div class="swiper-slide"><img src="' . $gal['image']['url'] . '" class="w-100"></div>';
                  }
                  ?>
               </div>
            </div>
         <?php
         }
         ?>

         <?php
         if ($last_gallery) {
         ?>
            <div class="swiper photo-library3 mb-2">
               <div class="swiper-wrapper">
                  <?php
                  foreach ($last_gallery as $gal) {
                     echo '<div class="swiper-slide"><img src="' . $gal['image']['url'] . '" class="w-100"></div>';
                  }
                  ?>
               </div>
            </div>
         <?php
         }
         ?>

      </div>
   <?php
   }
   ?>
   <!-- Instagram social -->

   <!-- Describe -->
   <?php
   $describe = get_field('describe');
   if ($describe) {
   ?>
      <div class="box-describe">
         <p class="title-describe-footer"><?= $describe['title'] ?></p>
         <p class="content-describe-footer"><?= $describe['content'] ?></p>
      </div>
   <?php
   }
   ?>
   <!-- Describe -->


   <?php include plugin_dir_path(__FILE__) . 'layout/footer.php' ?>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
   </script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/index.js"></script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/home.js"></script>
</body>

</html>
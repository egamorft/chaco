<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chacos</title>
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
   <?php wp_head(); ?>
</head>

<body>
   <div class="box-header">
      <div class="header-top">
         <div class="box-big-header-top">
            <a href="" class="title-header-top title-header-left">Easy & Free
               Returns</a>
            <div class="box-item-header-top">
               <span class="title-header-top box-help-header position-relative">Help</span>
               <ul class="dropdown-menu dropdown-menu-help">
                  <li><a class="dropdown-item-help dropdown-item" href="#"><img
                           src="https://www.chacos.com/on/demandware.static/Sites-chacos_us-Site/-/default/dwcb60ea97/images/Icon-clock.png"
                           class="mr-2"><span style="padding-left: 5px;">ORDER STATUS</span></a></li>
                  <li><a class="dropdown-item-help dropdown-item" href="#"><img
                           src="https://www.chacos.com/on/demandware.static/Sites-chacos_us-Site/-/default/dw3af3c900/images/Icon-chat-new.png"
                           class="mr-2"><span style="padding-left: 5px;">CHAT</span></a></li>
                  <li><a class="dropdown-item-help dropdown-item" href="#"><img
                           src="https://www.chacos.com/on/demandware.static/Sites-chacos_us-Site/-/default/dwdda501f6/images/Icon-service-new.png"
                           class="mr-2"><span style="padding-left: 5px;">CUSTOMER SERVICE</span></a></li>
                  <li><a class="dropdown-item-help dropdown-item" href=""><img
                           src="https://www.chacos.com/on/demandware.static/Sites-chacos_us-Site/-/default/dw5cc964b9/images/Icon-return-new.png"
                           class="mr-2"><span style="padding-left: 5px;">EXCHANGE & RETURN</span></a></li>
                  <li><a class="dropdown-item-help dropdown-item" href="#"><img
                           src="https://www.chacos.com/on/demandware.static/Sites-chacos_us-Site/-/default/dw5baa338f/images/Icon-truck-new.png"
                           class="mr-2"><span style="padding-left: 5px;">SHIPPING INFO</span></a></li>
               </ul>
               <img src="<?= get_template_directory_uri() ?>/assets/img/heart.png" class="icon-header">
               <div class="position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSale"
                  aria-controls="offcanvasRight">
                  <img src="<?= get_template_directory_uri() ?>/assets/img/Icon.png" class="icon-header">
                  <div class="circle">1</div>
               </div>
            </div>
         </div>
      </div>

      <div class="header-center">
         <div class="box-big-header-center">
            <div class="d-flex align-items-center">
               <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" class="img-logo">
               <div class="title-header-center menu-big-1">NEW</div>
               <div class="box-item-menu-header box-item-small-1">
                  <div class="item-menu-header-col">
                     <p class="title-big-menu-item">MEN</p>
                     <div class="d-flex flex-column">
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                     </div>
                  </div>
                  <div class="item-menu-header-col">
                     <p class="title-big-menu-item">MEN</p>
                     <div class="d-flex flex-column">
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                     </div>
                  </div>
                  <div class="item-menu-header-col">
                     <div class="d-flex flex-column">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/nav-header.png" class="w-75">
                        <a href="" class="item-link-mav-header">Shop Collab</a>
                     </div>
                  </div>
               </div>

               <div class="title-header-center menu-big-2">WOMEN</div>
               <div class="box-item-menu-header box-item-small-2">
                  <div class="item-menu-header-col">
                     <p class="title-big-menu-item">MEN</p>
                     <div class="d-flex flex-column">
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                     </div>
                  </div>
                  <div class="item-menu-header-col">
                     <p class="title-big-menu-item">MEN</p>
                     <div class="d-flex flex-column">
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                     </div>
                  </div>
                  <div class="item-menu-header-col">
                     <p class="title-big-menu-item">MEN</p>
                     <div class="d-flex flex-column">
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                        <a href="<?php echo home_url('/category') ?>" class="name-small-item-menu">1 Strap</a>
                     </div>
                  </div>
               </div>
               <div class="title-header-center">MEN</div>
               <div class="title-header-center">KIDS</div>
               <div class="title-header-center">GEAR</div>
               <div class="title-header-center">SALE</div>
               <div class="title-header-center">INSIDE CHACO</div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
               <div class="position-relative box-search-header">
                  <input type="text" class="input-search-header" id="searchInputs" placeholder="Search">
                  <img src="<?= get_template_directory_uri() ?>/assets/img/search-sm.png" class="btn-search-header">
               </div>
               <img src="<?= get_template_directory_uri() ?>/assets/img/shopping-cart.png" class="icon-cart">
            </div>
         </div>
      </div>

      <div class="header-bottom">
         <span class="title-header-bottom">Get 20% off new styles + extra 30% off sale styles.</span>
         <a href="#" class="title-link-header-bottom">Use Code: <span class="name-code">HELLOSPRING</span> »</a>
      </div>
      <div class="header-bottom">
         <span class="title-header-bottom">$40 Rambles Puffs, Boots & Clogs</span>
         <a href="#" class="title-link-header-bottom">Use Code: <span class="name-code">HELLOSPRING</span> »</a>
      </div>
   </div>
   <!-- search -->
   <div id="overlay-search" class="overlay"></div>
   <div class="box-active-search-header" id="search-box-focus">
      <div class="box-search-header position-relative" style="background-color: #004c59;border: 1px solid #004c59;">
         <input type="text" class="input-search-header" id="searchInputActive" placeholder="Search">
         <svg class="search-icon" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="26px"
            height="22px" style="margin-left: 3px;">
            <path
               d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
            </path>
         </svg>
      </div>
      <div class="box-content-search-header">
         <div class="box-content-search-header-left">

         </div>
         <div class="box-content-search-header-right">
            <p class="title-suggest-search">Popular Searches</p>
            <div class="d-flex flex-column mb-3">
               <a href="" class="item-search-suggest">bohdi</a>
               <a href="" class="item-search-suggest">crocs</a>
            </div>
         </div>
      </div>
   </div>

   <div class="box-header-mobile">
      <img src="<?= get_template_directory_uri() ?>/assets/img/menu.svg" class="icon-menu-header-mobile"
         data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasExample">
      <img src="<?= get_template_directory_uri() ?>/assets/img/search-sm.png" class="icon-search-header-mobile"
         data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearchRight" aria-controls="offcanvasSearchRight">
      <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" class="img-logo">
      <div class="position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSale"
         aria-controls="offcanvasRight">
         <img src="<?= get_template_directory_uri() ?>/assets/img/flag.svg" class="icon-header">
         <div class="circle-mobile">1</div>
      </div>
      <img src="<?= get_template_directory_uri() ?>/assets/img/shopping-cart.png" class="icon-cart">
   </div>

   <!-- model sale -->
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSale" aria-labelledby="offcanvasSaleLabel">
      <div class="offcanvas-body">
         <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSale"
            aria-controls="offcanvasSale" aria-label="Close"></button>
         <div class="box-sale-style mt-0">
            <div style="color: black;font-weight: bold;text-align: center;font-size: 18px;margin: 12px 0;">Today's
               Offers
            </div>
            <div style="color: black;text-align: center;font-size: 14px;margin-bottom: 14px;">Click offer codes below to
               apply in checkout.</div>
            <div class="item-sale-style">
               <img
                  src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc07ae136/content/seasonal-content/promos/2021/09/extole_updates_promotab_03.jpg"
                  class="w-100">
               <div class="line-sale-style">
                  No Code Necessary
               </div>
            </div>
            <div class="item-sale-style">
               <img
                  src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc07ae136/content/seasonal-content/promos/2021/09/extole_updates_promotab_03.jpg"
                  class="w-100">
               <div class="line-sale-style">
                  No Code Necessary
               </div>
            </div>
            <div class="item-sale-style">
               <img
                  src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc07ae136/content/seasonal-content/promos/2021/09/extole_updates_promotab_03.jpg"
                  class="w-100">
               <div class="line-sale-style">
                  No Code Necessary
               </div>
            </div>
            <div class="item-sale-style">
               <img
                  src="https://www.chacos.com/on/demandware.static/-/Sites-chacos_us-Library/default/dwc07ae136/content/seasonal-content/promos/2021/09/extole_updates_promotab_03.jpg"
                  class="w-100">
               <div class="line-sale-style">
                  No Code Necessary
               </div>
            </div>

         </div>
      </div>
   </div>

   <!-- model menu -->
   <div class="offcanvas offcanvas-start offcanvas-mobile-menu" tabindex="-1" id="offcanvasMenu"
      aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-body p-0">
         <div class="accordion" id="accordionExample">
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                     NEW
                  </button>
               </h2>
               <div id="collapseOne" class="accordion-collapse collapse bg-item-menu" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">

                  <div class="accordion accordion-flush" id="accordionFlushExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                           <button class="accordion-button collapsed line-menu-1-mobile" type="button"
                              data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                              aria-controls="flush-collapseOne">
                              SHOP NEW
                           </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse box-item-2-menu"
                           aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                           <a href="" class="line-menu-2-mobile">SHOP MENU 1</a>
                           <a href="" class="line-menu-2-mobile">SHOP MENU 2</a>

                        </div>
                     </div>

                  </div>
                  <a href="" class="line-menu-1-mobile">SHOP NOW</a>
               </div>
            </div>

            <div class="accordion-item">
               <h2 class="accordion-header" id="heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                     NEW 2
                  </button>
               </h2>
               <div id="collapse2" class="accordion-collapse collapse bg-item-menu" aria-labelledby="heading2"
                  data-bs-parent="#accordionExample">

                  <div class="accordion accordion-flush" id="accordionFlushExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading1">
                           <button class="accordion-button collapsed line-menu-1-mobile" type="button"
                              data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false"
                              aria-controls="flush-collapse1">
                              SHOP NEW
                           </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse box-item-2-menu"
                           aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">

                           <a href="" class="line-menu-2-mobile">SHOP MENU 1</a>
                           <a href="" class="line-menu-2-mobile">SHOP MENU 2</a>

                        </div>
                     </div>

                  </div>
                  <a href="" class="line-menu-1-mobile">SHOP NOW 2</a>
               </div>
            </div>

            <div class="accordion-item">
               <h2 class="accordion-header" id="heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                     NEW 3
                  </button>
               </h2>
               <div id="collapse3" class="accordion-collapse collapse bg-item-menu" aria-labelledby="heading3"
                  data-bs-parent="#accordionExample">

                  <div class="accordion accordion-flush" id="accordionFlushExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headings1">
                           <button class="accordion-button collapsed line-menu-1-mobile" type="button"
                              data-bs-toggle="collapse" data-bs-target="#flush-headings1" aria-expanded="false"
                              aria-controls="flush-headings1">
                              SHOP NEW 3
                           </button>
                        </h2>
                        <div id="flush-headings1" class="accordion-collapse collapse box-item-2-menu"
                           aria-labelledby="flush-headings1" data-bs-parent="#accordionFlushExample">

                           <a href="" class="line-menu-2-mobile">SHOP MENU 1</a>
                           <a href="" class="line-menu-2-mobile">SHOP MENU 2</a>

                        </div>
                     </div>

                  </div>
                  <a href="" class="line-menu-1-mobile">SHOP NOW 3</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- model search -->
   <div class="offcanvas offcanvas-end w-100 border-0" tabindex="-1" id="offcanvasSearchRight"
      aria-labelledby="offcanvasSearchRightLabel">
      <div class="offcanvas-header p-0 d-flex justify-content-between align-items-center">
         <div class="position-relative w-100">
            <input type="text" class="input-search-menu-mobile" placeholder="Search for products">
            <img src="<?= get_template_directory_uri() ?>/assets/img/search.svg" class="icon-search-menu-mobile">
         </div>
         <img src="<?= get_template_directory_uri() ?>/assets/img/xmark.svg" data-bs-dismiss="offcanvas"
            aria-label="Close" style="width: 23px;margin-left: 13px;margin-right: 13px;">
      </div>
      <div class="offcanvas-body" style="padding: 24px;">
         <p style="font-weight: 600;color: black;margin-bottom: 10px;">Popular Searches</p>
         <div class="d-flex flex-column">
            <a href="" class="item-search-hot">bohdi</a>
            <a href="" class="item-search-hot">crocs</a>
         </div>
      </div>
   </div>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Features</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/product-features.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="box-product-features">
      <div class="w-100 position-relative">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/intro-bg.jpg" class="w-100 img-intro-desktop">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/intro-bg-mobile.jpg" class="w-100 img-intro-mobile">
         <div class="box-content-features-1">
            <p class="title-content-features-1">Product Features</p>
            <p class="content-features-1">Learn more about the features and technology that make Chaco products
               best-in-class</p>
         </div>
      </div>
      <div class="box-staraps">
         <div class="item-staraps">
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/icon-adjust.png" alt="">
            <p class="title-starap">Adjust Your Straps</p>
            <p class="content-starap">
               Chaco offers the industry's only sandal with a 360 degree customizable fit. Click below for a
               step-by-step guide to adjusting your straps.</p>
            <a href="" class="link-strap">
               Strap Adjuster</a>
         </div>
      </div>
      <div class="box-our-fit">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/icon-luvseat.png" alt="">
         <p class="title-our-fit-1">Our Fit</p>
         <p class="content-out-fit-1">
            Chaco products are supportive and durable, promoting healthy alignment and arch support for all-day wear.
         </p>
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/luv-bg.png" alt="">
         <p class="title-our-fit-2">
            LUVSEAT <sup>TM</sup> Footbed</p>
         <p class="content-out-fit-1">
            Built into every pair of Chaco footwear, our LUVSEAT Footbed provides contoured arch support in a product so
            dependable, every single style is accepted by the American Podiatric Medical Association.</p>
         <div class="d-flex justify-content-center align-items-center">
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/logo-luvseat.png" class="w-100 h-100" style="padding: 0 16px;">
            <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/logo-ampa.png" class="w-100 h-100" style="padding: 0 16px;">
         </div>

      </div>
      <div class="box-ultimate">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/icon-durability.png" alt="">
         <p class="title-starap">
            Ultimate Durability</p>
         <p class="content-starap">
            Chaco makes all of our footbeds out of polyurethane (PU) compounds. Why PU? Because unlike disposable foam,
            PU doesn't break down or compress with wear. This makes for durable, long-lasting products that stay on your
            feet and outof the landfill.</p>
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/dura-bg.png" class="w-100">
      </div>
      <div class="box-outsoles">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/icon-outsoles.png" alt="">
         <p class="title-starap">Outsoles</p>
         <p class="content-starap">Our performance outsoles are designed for traction and grip in the toughest
            environments.</p>
         <div class="outsole-info">
            <div class="outsole-item" data-bs-toggle="modal" data-bs-target="#exampleModalVideo">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/outsoles-item.jpg" class="w-100">
               <p class="title-outsole-info">
                  ChacoGrip <sup>®</sup></p>
               <p class="content-outsole-info">
                  Made by us, for us. Our proprietary outsole compound was developed for performance tread in extreme
                  conditions.
               </p>
            </div>
            <div class="outsole-item">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/outsoles-item1.jpg" class="w-100">
               <p class="title-outsole-info">
                  EcoTread <sup>TM</sup></p>
               <p class="content-outsole-info">
                  Made by us, for us. Our proprietary outsole compound was developed for performance tread in extreme
                  conditions.
               </p>
            </div>
         </div>
      </div>
      <div class="box-care">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/icon-sandal.png" alt="">
         <p class="title-starap">Outsoles</p>
         <p class="content-starap">Our performance outsoles are designed for traction and grip in the toughest
            environments.</p>
         <div class="outsole-info">
            <div class="outsole-item">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/sandal-item-0.jpg" class="w-100">
               <p class="title-outsole-info">
                  Sandal Care & Cleaning</p>
               <p class="content-outsole-info">
                  If your straps won't adjust or your sandals need a good cleaning, we've got you covered.
               </p>
               <a href="" class="link-strap">
                  Learn More</a>
            </div>
            <div class="outsole-item">
               <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/sandal-item-1.jpg" class="w-100">
               <p class="title-outsole-info">
                  Rechaco Repairs</p>
               <p class="content-outsole-info">
                  Repairability is an important part of our sandal product philosophy. So when you've worn through your
                  soles or your straps are threadbare, let our repair experts step in.
               </p>
               <a href="" class="link-strap">Learn More</a>
            </div>
         </div>
      </div>

      <!-- Modal video-->
      <div class="modal fade" id="exampleModalVideo" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/xmark-solid.svg" data-bs-dismiss="modal" aria-label="Close"
            class="close-model-video">
         <div class="modal-dialog modal-dialog-video">
            <div class="modal-content modal-content-video">
               <div class="modal-body">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/OjeO1S8hQgM?si=JPGs7JHu1NBKcnqV"
                     title="YouTube video player" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
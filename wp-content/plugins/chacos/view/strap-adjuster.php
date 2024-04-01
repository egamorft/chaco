<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Strap-Adjuster</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/strap-adjuster.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="box-strap-adjuster">
      <div class="line-header-menu-page">
         <a href="/" class="title-header-menu-page">Home</a>
         <span style="margin: 0 5px;">/</span>
         <a href="" class="title-header-menu-page">Strap Adjuster</a>
      </div>
      <div class="box-content-strap-adjuster">
         <div class="box-header-strap">
            <p class="title-header-strap">Get The Perfect Fit</p>
         </div>
         <div class="chco-strp-types">
            <div class="item-strp-types">
               <a href="" class="chco-strp-types-link">
                  <p class="title-link-strp-types">No Toe Loop</p>
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/landing-sp.png" class="img-link-strp">
                  <div class="btn-chco-strp-types">CHOOSE</div>
               </a>
               <div class="content-item-strp-types">
                  <p class="title-content-item-strp">Sandals without the webbing strap around the big toe.</p>
                  <p class="name-content-item-strp">Current styles:</p>
                  <ul class="chco-strp-type__variants">
                     <li class="item-type__variants">Z/1®</li>
                     <li class="item-type__variants">ZX/1®</li>
                     <li class="item-type__variants">Z/Cloud</li>
                     <li class="item-type__variants">Z/Cloud X</li>
                     <li class="item-type__variants">Z/Volv</li>
                     <li class="item-type__variants">Z/Volv X</li>
                  </ul>
               </div>
            </div>
            <div class="item-strp-types">
               <a href="" class="chco-strp-types-link">
                  <p class="title-link-strp-types">Toe Loop</p>
                  <img src="<?= WIDGET_URL_CHACOS ?>/asset/img/landing-sp2.png" class="img-link-strp">
                  <div class="btn-chco-strp-types">CHOOSE</div>
               </a>
               <div class="content-item-strp-types">
                  <p class="title-content-item-strp">Sandals without the webbing strap around the big toe.</p>
                  <p class="name-content-item-strp">Current styles:</p>
                  <ul class="chco-strp-type__variants">
                     <li class="item-type__variants">Z/2®</li>
                     <li class="item-type__variants">ZX/2®</li>
                     <li class="item-type__variants">Z/Cloud 2</li>
                     <li class="item-type__variants">Z/Cloud X2</li>
                     <li class="item-type__variants">Z/Volv 2</li>
                     <li class="item-type__variants">Z/Volv X2</li>
                  </ul>
               </div>
            </div>
         </div>

         <div class="chco-strp-landing__copy">Adjust double and triple straps as a single strap.</div>
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
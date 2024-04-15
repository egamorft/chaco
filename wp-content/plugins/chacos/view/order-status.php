<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ORDER STATUS</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/menu-contact.php'?>
   <div class="content-contact-center">
      <p class="title-page-order-status">View the status of an order by entering your order number and billing zip code
         below.<br />
         To view a complete order history you must log in.</p>
      <p class="title-bold-page-order-status">Get the status of a single order</p>
      <div class="">
         <label for="dwfrm_ordertrack_orderNumber" class="row-label">
            <span class="required-indicator" aria-label="required field">*</span>
            <span class="field-name" id="dwfrm_ordertrack_orderNumber_label">
               Order Number
            </span>
         </label>
         <input class="input-text required" id="dwfrm_ordertrack_orderNumber" type="text"
            name="dwfrm_ordertrack_orderNumber" value="" maxlength="25">
      </div>
   </div>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/contact-us.php'?>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/footer.php'?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
   </script>
   <script src="<?= WIDGET_URL_CHACOS ?>/asset/js/index.js"></script>
</body>

</html>
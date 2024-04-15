<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ACCOUNT</title>
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
      <p class="title-contact-center">Account</p>
      <div class="contact-center-content">
         CREATE AN ACCOUNT
         Register today to enjoy fast and easy checkout. A chacos.com account allows you to store payment methods and
         addresses, check the status of orders, view your order history, select shopping preferences and save items in
         your shopping bag for up to 30 days.

         MANAGE ACCOUNT
         Login to change any of your account information including shipping and billing information, your preferred
         payment method and your preferences regarding receiving chacos.com emails.

         PASSWORD HELP
         Forgot your Password? No problem. Go to Your Account , there you can view your password hint or have your
         password emailed to you.

         MANAGE EMAIL PREFERENCES
         Go to your email preferences to manage your email updates or unsubscribe from chacos.com emails.
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
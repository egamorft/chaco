<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/login.css">
   <link rel="stylesheet" href="<?= WIDGET_URL_CHACOS ?>/asset/css/style.css">
</head>

<body>
   <?php include plugin_dir_path( __FILE__ ) . 'layout/header.php'?>

   <div class="box-sgin-in">
      <div class="line-header-menu-page">
         <a href="/" class="title-header-menu-page">Home</a>
         <span style="margin: 0 5px;">/</span>
         <a href="" class="title-header-menu-page">Login</a>
      </div>
      <div class="box-content-login-register">
         <div class="item-login-register">
            <p class="title-login-register">Login</p>
            <p class="content-login-register">If you are a registered user, please enter your email and password.</p>
            <label for="email-login" class="lable-login">Your Email</label>
            <input type="email" id="email-login" class="inpit-login">
            <label for="pass-login" class="lable-login">Password</label>
            <input type="email" id="pass-login" class="inpit-login">
            <div class="d-flex align-items-center">
               <input class="input-checkbox" type="checkbox" name="dwfrm_login_rememberme" id="dwfrm_login_rememberme"
                  value="true">
               <label for="dwfrm_login_rememberme" class="checkbox-label-login ">
                  Remember Me
               </label>
            </div>
            <a href="" class="link-forgot-pass">Forgot Password?</a>
            <button class="btn-login">login</button>
         </div>
         <div class="item-login-register">
            <p class="title-login-register">Register Now</p>
            <p class="content-login-register">Benefits of creating an account</p>
            <ul>
               <li><strong>Faster Checkout</strong> Store your payment methods and shipping addresses for later
                  use.<br><br></li>
               <li><strong>Track Orders</strong> Save and review order history.<br><br></li>

            </ul>
            <p class="content-login-register">If you are under 18, you must have your parent or guardian's permission to
               submit your personal information.</p>
            <p class="content-login-register">
               <a href="" target="_blank" class="link-here">Click here</a> to read
               our privacy policy.
            </p>
            <button class="btn-login">CREATE AN ACCOUNT NOW</button>
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
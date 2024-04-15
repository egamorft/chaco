<div class="box-big-footer">
   <div class="box-footer">
      <div class="d-flex justify-content-between align-center flex-wrap">
         <div class="box-help">
            <p class="text-help">NEED HELP?</p>
            <div class="w-100 d-flex align-items-center">
               <div class="box-item-help">
                  <img src="<?= get_template_directory_uri() ?>/assets/img/call.png" class="icon-contanct">
                  <span>(888) 211 - 1908</span>
               </div>
               <div class="box-item-help">
                  <img src="<?= get_template_directory_uri() ?>/assets/img/chat.png" class="icon-contanct">
                  <span>Chat Now</span>
               </div>
            </div>
         </div>

         <div class="box-join">
            <p class="text-help">JOIN THE #CHACONATION</p>
            <div class="d-flex align-items-center justify-content-between">
               <img src="<?= get_template_directory_uri() ?>/assets/img/instagram.png" class="icon-contanct">
               <img src="<?= get_template_directory_uri() ?>/assets/img/tik-tok.png" class="icon-contanct">
               <img src="<?= get_template_directory_uri() ?>/assets/img/pinterest.png" class="icon-contanct">
               <img src="<?= get_template_directory_uri() ?>/assets/img/youtube.png" class="icon-contanct">
            </div>
         </div>

      </div>

      <div class="box-footer-bottom">
         <div class="d-flex flex-column">
            <p class="title-footer-link">POPULAR LINKS</p>
            <a href="" class="name-footer-link">Best Sellers</a>
            <a href="" class="name-footer-link">New Arrivals</a>
            <a href="" class="name-footer-link">Slides</a>
            <a href="" class="name-footer-link">Sandals</a>
            <a href="" class="name-footer-link">Custom</a>
            <a href="" class="name-footer-link">Shoes</a>
            <a href="" class="name-footer-link">Boots</a>
            <a href="" class="name-footer-link">Text an Expert</a>
         </div>
         <div class="d-flex flex-column">
            <p class="title-footer-link">POPULAR LINKS</p>
            <a href="" class="name-footer-link">888-211-1908</a>
            <a href="" class="name-footer-link">Contact Us</a>
            <a href="" class="name-footer-link">Shipping Information</a>
            <a href="" class="name-footer-link">Returns & Exchanges</a>
            <a href="" class="name-footer-link">Warranty</a>
            <a href="" class="name-footer-link">FAQ</a>
         </div>
         <div class="d-flex flex-column">
            <p class="title-footer-link">POPULAR LINKS</p>
            <a href="" class="name-footer-link">Order Status</a>
            <a href="" class="name-footer-link">Shopping Cart</a>
            <a href="" class="name-footer-link">Sign In</a>
            <a href="" class="name-footer-link">Register</a>
            <a href="" class="name-footer-link">Email Unsubscribe</a>
         </div>
         <div class="d-flex flex-column">
            <p class="title-footer-link">POPULAR LINKS</p>
            <a href="" class="name-footer-link">Sustainability</a>
            <a href="" class="name-footer-link">Find A Store</a>
            <a href="" class="name-footer-link">Size Chart</a>
            <a href="" class="name-footer-link">Sandal Adjustment</a>
            <a href="" class="name-footer-link">Gift Cards</a>
            <a href="" class="name-footer-link">Careers</a>
            <a href="" class="name-footer-link">Blog</a>
            <a href="" class="name-footer-link">Email Preferences</a>
            <a href="" class="name-footer-link">Pro Deal</a>
         </div>
         <div class="d-flex flex-column">
            <p class="title-footer-link">POPULAR LINKS</p>
            <p class="title-small-footer">Get 20% off your first order! Plus, be the first to know about new arrivals,
               stories, and events</p>
            <div>
               <input type="text" class="input-footer-sign" placeholder="Email Address">
               <button class="btn-sign-footer">Sign up</button>
            </div>
            <p class="title-small-footer">This site is protected by reCAPTCHA and the Policy and Terms of Service apply.
            </p>
         </div>
      </div>

   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.1.0/lg-fullscreen.min.js"></script>
<script>
function toggleHeart(heart) {
   if (heart.src.includes('heart-solid.svg')) {
      heart.src = '<?= get_template_directory_uri() ?>/assets/img/heart.svg';
   } else {
      heart.src = '<?= get_template_directory_uri() ?>/assets/img/heart-solid.svg';
   }
}

function toggleActive(item) {
   document.querySelectorAll('.size-item').forEach(function(el) {
      el.classList.remove('active-filter');
   });
   item.classList.toggle('active-filter');

}

function toggleWishlist(element) {
   var wishlist = element.parentElement.querySelector('.box-wishlist');
   wishlist.style.display = "flex";
}

function hideWishlist(element) {
   var wishlist = element.parentElement.querySelector('.box-wishlist');
   wishlist.style.display = "none";
}

function toggleColorActive(item) {
   document.querySelectorAll('.item-color-product').forEach(function(el) {
      el.classList.remove('item-color-active');
   });
   item.classList.toggle('item-color-active');

}

function toggleSizeActive(item) {
   document.querySelectorAll('.item-size-product').forEach(function(el) {
      el.classList.remove('item-size-active');
   });
   item.classList.toggle('item-size-active');

}
</script>
<?php wp_footer(); ?>
</body>

</html>
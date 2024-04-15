<?php 
/*
 Template Name: Order-status
 */
?>
<?php get_header(); ?>
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
<?php get_footer(); ?>
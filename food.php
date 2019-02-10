<?php
include_once 'header.php';
  ?>
<link rel="stylesheet" href="slick/slick.css">
<script src="slick/slick.js"></script>
<link rel="stylesheet" herf="slick/slick-theme.css">
    
  <div class="kitchen_ko_wrapper">
  	<div class="d-flex justify-content-around">
  	
    <div class="khana_ko_holder">
     
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
    </div>
  	</div>
  </div>
   <script type="text/javascript">
 $('.d-flex').slick(
{
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
   autoplay: true,
 autoplaySpeed: 3000,
  dots: false,
    prevArrow: false,
    nextArrow: false
   
}
 	);
  </script>

  <?php
    include "footer.php";
  
  ?>
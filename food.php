<?php
include_once 'header.php';
  ?>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
<link rel="stylesheet" href="slick/slick.css">
<script src="slick/slick.js"></script>
<link rel="stylesheet" herf="slick/slick-theme.css">
<link href="https://fonts.googleapis.com/css?family=Felipa" rel="stylesheet">
  <div class="kitchen_ko_wrapper">
     <div class="kogo">
  <img src='all_img/logo.png'  alt='Moon Tower Inn (Birtamod) Logo'/>
  </div>
	  <div class="everyboss">
  	<div class="d-flex justify-content-around">
  	
    <div class="khana_ko_holder">
     
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
      <div class="white_box_holder">

					
				<p>
				coffee
				<h1>
					Rs 40 
				</h1>
				</p>
				</div>
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
      <div class="white_box_holder">

				
			<p>
			coffee
			<h1>
				Rs 40 
			</h1>
			</p>
			</div>
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
      <div class="white_box_holder">

      
              <p>
                coffee
                <h1>
                  Rs 40 
                </h1>
              </p>
              </div>
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
      <div class="white_box_holder">

                    
              <p>
                coffee
                <h1>
                  Rs 40 
                </h1>
              </p>
              </div>
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
      <div class="white_box_holder">

      
      <p>
        coffee
        <h1>
          Rs 40 
        </h1>
      </p>
      </div>
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
      <div class="white_box_holder">

						
					<p>
					coffee
					<h1>
						Rs 40 
					</h1>
					</p>
					</div>
    </div>
    <div class="khana_ko_holder">
      <img src="all_img/coffee.jpg" alt="coffee at hotel moontower inn">
      <div class="white_box_holder">

					
				<p>
				coffee
				<h1>
					Rs 40 
				</h1>
				</p>
				</div>
    </div>
	  </div>
	  <div class="below_the_belt">
		  <h1>Best food at the best price</h1>
      <div class="br_on_mobile"> <br> </div><div class="br_on_mobile"> <br> </div>


		  <div class="for_p_on_mobile"><p>Taste &#9989;  Quality &#9989;</p>
		  <p>Best rates &#9989; Party items &#9989;</p></div>
		  <div class="visit"">
			  Visit today <br>
			  Or call Us 023 112985
		  </div>

	  </div>
	  </div>
  </div>
   <script type="text/javascript">

    if ($(window).width() < 820) 
    {
      $('.d-flex').slick({
        infinite:true,
        slidesToShow:2,
        slidesToScroll:2,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: false,
        nextArrow: false
      })

    }
    else if ($(window).width() > 820) 
    {
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
    }

  </script>

  <?php
    include "footer.php";
  
  ?>
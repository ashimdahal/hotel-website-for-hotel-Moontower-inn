<?php
    include "header.php"

?>


<div class="wrapper_about_us">
     <div class="kogo">
  <img src='all_img/logo.png'  alt='Moon Tower Inn (Birtamod) Logo'/>
  </div>
    <div class="first_text_holder">
        <h1> Hotel Moontower Inn </h1>
        <h2>-Our Mission-</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus soluta sed, dolor sit, ullam, harum ipsam laboriosam delectus explicabo itaque officia corrupti nulla porro reiciendis quaerat debitis exercitationem culpa qui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio adipisci dicta, dolor odio porro, et tenetur, debitis qui aperiam nemo numquam laborum! Ut at vel vitae, accusantium magnam rem possimus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur laborum quo eos quos ad, vero neque. Molestiae quasi neque quos beatae libero esse, odit illo cupiditate eveniet sit, atque quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit debitis quaerat, voluptatum iusto maiores amet dolorum ratione porro ipsum, consectetur velit, quis obcaecati qui nam voluptate illum saepe molestias eum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus soluta sed, dolor sit, ullam, harum ipsam laboriosam delectus explicabo itaque officia corrupti nulla porro reiciendis quaerat debitis exercitationem culpa qui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio adipisci dicta, dolor odio porro, et tenetur, debitis qui aperiam nemo numquam laborum! Ut at vel vitae, accusantium magnam rem possimus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur laborum quo eos quos ad, vero neque. Molestiae quasi neque quos beatae libero esse, odit illo cupiditate eveniet sit, atque quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit debitis quaerat, voluptatum iusto maiores amet dolorum ratione porro ipsum, consectetur velit, quis obcaecati qui nam voluptate illum saepe molestias eum.</p>

</div>
</div>
<script>
    var needtobe=$(".first_text_holder").height()
    console.log(needtobe)
    needtobe = needtobe +500
    $(".wrapper_about_us").height(needtobe)

</script>
<?php
    include "footer.php";

?>
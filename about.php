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
        <?php
        $conn = mysqli_connect("localhost","root","","moontower_admins");
        $sql = "select * from about ";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo '<p>'. $row['details'].'</p>';

         ?>
        
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

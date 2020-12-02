<?php
if(empty($_GET['ln'])) {$pageLang='en';}
    else {$pageLang=$_GET['ln'];}
$termsTable=mysqli_query($link, "SELECT * FROM settings");
    $terms1=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms1[$oneTerm['code']]=$oneTerm['value'];
    }
?>
<section id="home" class="jumbotron text-center">
    <div class="container">
     <?php echo $terms1['home1']?> 
    </div>
  </section>
<?php

if(empty($_GET['ln'])) {$pageLang='en';}
    else {$pageLang=$_GET['ln'];}
$termsTable=mysqli_query($link, "SELECT * FROM settings");
    $terms1=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms1[$oneTerm['code']]=$oneTerm['value'];
    }
    $termsTable=mysqli_query($link, "SELECT * FROM menu WHERE lang='$pageLang'");
    $terms2=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms2[$oneTerm['code']]=$oneTerm['value'];
    }
?>

<div id="#home"  class="navbar fixed-top navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      
        <a href="#" class="navbar-brand d-flex align-items-center">
			<?php echo $terms1['logo']?>
		</a>
    
      <a class="navbar-brand d-flex align-items-center" href="#home"><?php echo $terms2['menu1']?></a>
      <a class="navbar-brand d-flex align-items-center" href="#services"><?php echo $terms2['menu2']?></a>
      <a class="navbar-brand d-flex align-items-center" href="#footer"><?php echo $terms2['menu5']?></a>


       <ul class="navbar-nav ml-auto" style="margin-left: 3%;">
                <?php
                    $langTable = mysqli_query($link, "SELECT * FROM languages");
                    $langs=array();
                    while($oneLang=mysqli_fetch_assoc($langTable)){
                        echo '<li class="nav-item">
                        <a class="navbar-brand d-flex" href="?ln='.$oneLang['code'].'">'.$oneLang['code'].'</a>
                    </li>'; 
                    }
                ?>
            </ul>
            
    </div>
  </div>
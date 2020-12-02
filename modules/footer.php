<?php
	if(empty($_GET['ln'])) {$pageLang='en';}
    else {$pageLang=$_GET['ln'];}
$termsTable=mysqli_query($link, "SELECT * FROM settings");
    $terms1=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms1[$oneTerm['code']]=$oneTerm['value'];
    }
    $termsTable=mysqli_query($link, "SELECT * FROM terms WHERE lang='$pageLang'");
    $terms2=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms2[$oneTerm['code']]=$oneTerm['value'];
    }
?>
<div style="background-color: #323232; height: 400px;" id="footer" class="container">
    <p class="float-right">
      <a href="#home"><?php echo $terms2['backtotop']?></a>
    <div>
    	<?php echo $terms1['map']?>
    </div>
  </div>
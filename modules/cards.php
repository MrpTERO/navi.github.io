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
$termsTable=mysqli_query($link, "SELECT * FROM services WHERE lang='$pageLang'");
    $terms3=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms3[$oneTerm['code']]=$oneTerm['title'];
        $terms4[$oneTerm['code']]=$oneTerm['lead'];
        $terms5[$oneTerm['code']]=$oneTerm['photo'];
        $terms6[$oneTerm['code']]=$oneTerm['fullText'];
    }

?>

<div id="services" class="album py-5 bg-light">
    <div class="container">
    	<div style="text-align: center;" class="section-title">
          <h2><?php echo $terms2['term1']?></h2>
          <hr>
          
        </div>
      <div  class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <?php echo $terms5['service1']?>
            <div class="card-body">
            <h2 class="card-text"><?php echo $terms3['service1']?></h2>
            <p class="card-text"><?php echo $terms4['service1']?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-toggle="modal" data-target="#naviinfo1" type="button" class="btn btn-sm btn-outline-secondary"><?php echo $terms2['button1']?></button>
                  
                </div>
                <div class="modal fade" id="naviinfo1" tabindex="-1" role="dialog" aria-labelledby="naviinfo1Label" aria-hidden="true">
  					<div class="modal-dialog">
    					<div class="modal-content">
      						<div class="modal-header">
        					<h5 class="modal-title" id="naviinfo1Label"><?php echo $terms3['service1']?></h5>
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
      						</div>
      					<div class="modal-body">
       						<?php echo $terms6['service1']?>
      					</div>
      					<div class="modal-footer">
        				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        				
      					</div>
    					</div>
  					</div>
				</div>
              </div>
            </div>
          </div>
        </div>
        

        
        
      </div>
    </div>
  </div>
<?php
if(empty($_GET['ln'])) {$pageLang='en';}
    else {$pageLang=$_GET['ln'];}
    $termsTable=mysqli_query($link, "SELECT * FROM terms WHERE lang='$pageLang'");
    $terms2=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms2[$oneTerm['code']]=$oneTerm['value']; 
      }
        $termsTable=mysqli_query($link, "SELECT * FROM settings");
    $terms1=array();
    while($oneTerm=mysqli_fetch_assoc($termsTable)) {
        $terms1[$oneTerm['code']]=$oneTerm['value'];
    }
   
?>
<?php echo $terms1['navi3']?>
<div id="services" class="album py-5 bg-light">
    <div class="container">
      <div style="text-align: center;" class="section-title">
        <h2><?php echo $terms2['form']?></h2>
        <hr>
      </div>
<form>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01"><?php echo $terms2['form_name']?></label>
      <input type="text" class="form-control" id="validationDefault01" <?php echo $terms2['ph_name']?> required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02"><?php echo $terms2['form_surname']?></label>
      <input type="text" class="form-control" id="validationDefault02" <?php echo $terms2['ph_surname']?> required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03"><?php echo $terms2['form_city']?></label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04"><?php echo $terms2['form_state']?></label>
      <select class="custom-select" id="validationDefault04" required>
        <option selected disabled value=""><?php echo $terms2['choose']?></option>
        <?php echo $terms2['options']?>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05"><?php echo $terms2['form_zip']?></label>
      <input type="text" class="form-control" id="validationDefault05" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        <?php echo $terms2['agree']?>
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit"><?php echo $terms2['submit']?></button>
</form>
</div>
</div>
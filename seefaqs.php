<?php
include_once 'includes/fags.php';
include_once 'header.php';
 $msg = '';
  if (isset($_GET['id'])) {
    $FAQs = FAQs::find($_GET['id']);
    
  }
  
    $FAQs = FAQs::all();

?>


<link rel="stylesheet" type="text/css" href="css/W3.css">

<?php
            $model ='';
                if ($FAQs){
                    foreach ($FAQs as $FAQ) {
                        # code...
                        $model.= "<div class='w3-row-padding w3-margin-top'>
							        <div class='w3-col m3'>
							          <div class='w3-card-2 w3-white w3-round-large'>
							            <div class='w3-container'>
							             <p>John</p>
							             <p><img src='images/FAQs/$FAQ->passport' class='w3-circle w3-image' alt='Avatar' width='96' height='96'></p>
							            </div>
							          </div>
							        </div>
							        <div class='w3-col m9'>
							          <div class='w3-card-2 w3-white w3-round-large'>
							            <div class='w3-container'>
							              <p>$FAQ->FAQs.</p>
							              <p>$FAQ->date.</p>
							            </div>
							          </div>
							        </div>
							      </div>";
							    }
							echo $model;
				}
	?>						      

<?php  include_once 'footer.php';?>
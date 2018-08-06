<?php

    include_once 'includes/fags.php';
    include_once 'header.php';

    $result = '';
    if (isset($_POST['click'])){
        $FAQs = FAQs::instantiate($_POST);
        if($FAQs){ $FAQs->attach_file($_FILES['passport']);
            if ($FAQs->save_with_file()){
                    $result = "<div class='alert alert-success alert-dismissable'>
                                    <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <h4 class='text-center'><strong>FAQs Submitted Successfully</strong></h4>
                                    <p class='text-center'>Thank you for Sharing your FAQs with Us.</p>
                                    </div>";
                }else {
                  $result = "<div class='alert alert-danger alert-dismissable'>
                    <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <h4 class='text-center'><strong>Oops.. Something went Wrong.</strong></h4>
                    <p class='text-center'>Please check your Inputs and try again.</p>
                    </div>";
                }
        }

            
    }

?>




<body>
    <div class="section section-header">
        <div class="parallax filter filter-color-black">
            <div class="container">
                <div class="content">

                    <?php 
                        echo "$result";
                    ?>

                    <div class="title-area">
                        <h1 class="title-modern">Share FAQs</h1>
                        <h3>To enhance our services, we would like you to post your questions and answer will be given to the question </h2>
                        <div class="separator line-separator">♦</div>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>


    
    <div class="section section-our-team-freebie">
        <div class="parallax filter">
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">FAQs Form.</h2>
                </div>
                <div class="col-md-offset-2 col-md-6 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <div class="separator line-separator">♦</div>
                    <form action="fags.php" method="post" enctype="multipart/form-data">
                        <h4>passport</h4>
                            <div class="form-group">
                                
                                <input type="file" class="form-control"   name="passport"  required="" style="height: 150px; width: 150px; padding-left: 30px;">
                            </div> 
                         
                      <div class="form-group">
                            <h4>Phone Number:</h4>
                            <input type="phone" class="form-control" name="phone" required="">
                        </div>
                      <div class="form-group">
                        <h4>Email:</h4>
                        <input type="email" class="form-control" name="email" required="">
                       
                      </div>
                </div>

                         
                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Write Your FAQs Below:</h3>
                    <div class="separator line-separator">♦</div>

                      <div class="form-group">
                        <!-- <h4>Don't leave any stone unturned.</h4> -->
                        <textarea class="form-control" rows="30" name="FAQs" required="" style="height:150px">                        
                       </textarea>
                        </div>
                    

                    <div class="button-get-started">
                         <input class="btn btn-default btn-fill btn-lg " role="button" name="click" type="submit" aria-pressed="true">
                    </div>
                  </form>  
                </div>

          </div>
     </div>   
<?php  include_once 'footer.php';?>
   
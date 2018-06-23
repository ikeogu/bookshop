<?php
include ("header.php");
    include_once 'includes/customer.php';
    $result = '';
  
      if(isset($_POST['create'])){
              $customer = Customer::instantiate($_POST);

              $header = 'Registration Status';
              $message ='Customer created successsfully.';
              $message2= 'Customer was not created.';
              if($customer)
            if ($customer->insertcustomer()) {
                   $result = '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  '."$header".'<hr/>'."$message".'</div>';
             }else {
                   $result = '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  '."$header".'<hr/>'."$message2".'</div>';
                }
            }   
?>

<!-- begin snippet: js hide: false console: true babel: false -->

<!-- language: lang-js -->
<script src="js/jquery.min.js"></script>
<script>
        var allowsubmit = false;
        $(function(){
            //on keypress 
            $('#confpass').keyup(function(e){
                //get values 
                var pass = $('#pass').val();
                var confpass = $(this).val();
                
                //check the strings
                if(pass == confpass){
                    //if both are same remove the error and allow to submit
                    $('.error').text('');
                    allowsubmit = true;
                }else{
                    //if not matching show error and not allow to submit
                    $('.error').text('Password not matching');
                    allowsubmit = false;
                }
            });
            
            //jquery form submit
            $('#form').submit(function(){
            
                var pass = $('#pass').val();
                var confpass = $('#confpass').val();
 
                //just to make sure once again during submit
                //if both are true then only allow submit
                if(pass == confpass){
                    allowsubmit = true;
                }
                if(allowsubmit){
                    return true;
                }else{
                    return false;
                }
            });
        });
    </script>   

<!-- language: lang-html -->
<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <?php echo $result;?>
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                               <h4 class="title">Signup</h4>
                        </div>
                        <div class="content">
                            <form action="signup.php" method="POST" enctype="multipart/form-data" id="loginForm" name="loginForm">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Username"  name="username">
                                         </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label> 
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>    
                                </div>                                 

                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group" >
                                            <label>password</label>
                                            <input type="password" class="form-control" placeholder="password" name="password" id="pass">
                                        </div>
                                    </div>
                                    
                                        
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-group">
                                                    <label>confirm password</label>
                                                    <input type="password" class="form-control" placeholder="confirm password" name="" id="confpass" >
                                                </div>
                                        </div>
                                    </div>    

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" placeholder="phone" name="phone" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-6 col-md-6">
                                           
                                            <button type="submit" class="btn btn-success btn-fill col-sm-4 col-md-4" name="create" >Sign up</button>
                                        
                                                <a type="button" class="btn btn-success btn-fill  col-md-4 col-sm-4" href="login.php" >Login</a>
                                        </div>
                                    </div> 
                                </form>     
                            </div >
                        </div>
                    </div>
                </div> 
            </div>
        </div>   
<section>
  <?php include ("footer.php");?>  
</section>
</body>         
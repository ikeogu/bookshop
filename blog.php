<?php
  include_once 'includes/blog.php';
  include_once 'includes/comment.php';
  include_once 'includes/session.php';
  include_once 'header.php';

  $result = '';
    if (isset($_POST['click'])){
        $comments =Comment::instantiate($_POST);
        
        if($comments){ $comments->attach_file($_FILES['image']);
            if ($comments->save_with_file()){
                    $result = "<div class='alert alert-success alert-dismissable'>
                                    <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <h4 class='text-center'><strong>Comment Posted</strong></h4>
                                    <p class='text-center'>Thank you for Sharing your mind with Us.</p>
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
 
  if (isset($_GET['id'])) {
    $blogs = Blog::find($_GET['id']);
    
  }
  
    $blogs = Blog::all();

     if (isset($_GET['id'])) {
    $comments = Comment::find($_GET['id']);
    
  }
  
  $comments = Comment::all();

?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="../lib/w3.css">

<body>
<nav class="w3-sidenav w3-light-grey" style="width:25%">
  <a href="javascript:void(0)" 
  onclick="w3_close()"
  class="w3-closenav w3-large">Close &times;</a>
  <a class="w3-text-blue-grey" href="index.php">Home</a>
  				
</nav>
<section style="margin-left:10%">
  <div id="main" style="margin-left:10%"> <!-- Start main -->

    <header class="w3-container w3-blue-grey">
      <span class="w3-opennav w3-xlarge" onclick="w3_open()" style="display:none">&#9776;</span>
      <h1>Heldy-Books Blog</h1>
    </header>
    
                <?php
                  $model ='';
                      if ($blogs){
                          foreach ($blogs as $blog) {
                              # code...
                                        $model.= "
                  <div class='w3-container' >
                    <h6 class='w3-opacity'>RECENT POSTS</h6>
                    <hr>
                    <h2>$blog->title</h2>
                    <h5><i class='fa fa-clock-o'></i> Post by $blog->name. $blog->date</h5>
                    <p class='w3-small'>Tags: <span class='w3-tag w3-small w3-red'>$blog->tags</span> </P>
                    <p>$blog->text.</p>
                    <br><br>
                  </div>";
                        }
                    echo $model;
                  }
                ?>                  
         
                <div class='w3-card-2 w3-container' style="margin-left: 50px;">
                  <h4>Leave a Comment:</h4>
                  <form action="blog.php" method="post" enctype="multipart/form-data" >
                    <div class="row">
                      
                        <div class="form-group col-lg-4 col-md-4">
                          <label>Name</label>
                            <input type="text" class="form-control" placeholder="name"  name="name">
                        </div>
                       <div class="form-group col-lg-4 col-md-4">
                          <label>Image</label>
                            <input type="file" class="form-control"   name="image">
                        </div>
                    </div> 
                    <div class="row"> 
                      <div class="form-group col-lg-8">
                      <textarea class="w3-input form-control" placeholder="Say something nice.." name="text" style="height: 80px;" required></textarea>
                      </div>
                    </div>
                    <button type="submit" class="w3-section w3-btn w3-green" name="click">Submit</button>

                    <div>
                    <?php echo $result?>
                    </div>
                  </form>
                </div>

                <?php
                  $del ='';
                    if ($comments){
                      foreach ($comments as $comment) {
                             $model.= "

                      <p><span class='w3-badge w3-black'></span>Comment: </p><br>

                      <div class='w3-row'>
                        <div class='w3-col s2 col-lg-2 text-center'>
                          <img class='w3-circle w3-image' src='images/comment/$comment->image' width='96' height='96'>
                        </div>
                        <div class='w3-col s10  col-lg-10 w3-container'>
                          <h4>$comment->name <span class='w3-opacity w3-medium'>$comment->date</span></h4>
                          <p>$comment->text</p><br>
                        </div>
                      </div>";
                        }
                    echo $model;
                    }
                ?>  
     </div> <!-- End main -->
   </section>
   <section style="padding-top:80px; ">
      <?php include_once 'footer.php';?>
   </section>
       
  <script>
  function w3_open() {
    document.getElementById("main").style.marginLeft = "25%"
    document.getElementsByClassName("w3-sidenav")[0].style.width ="25%";
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-opennav")[0].style.display = 'none';
  }
  function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-opennav")[0].style.display = "inline-block";
  }
  </script>
       
  </body>

  <!-- Mirrored from www.w3schools.com/w3css/demo_template_blog.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:53 GMT -->
  </html> 

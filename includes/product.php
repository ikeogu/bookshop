<?php
 include_once 'Model.php';

 /**
 * 
 */
 class Product extends Model
 {
 	protected $product_id;
 	public $category;
 	public  $dateout;
 	public $title;
 	public $publisher;
 	public $price;
  public $logo;
  public $descr;
  public $size;
  public $quantity;
  public $file;
  
 	protected static $class_name = 'Product';
	protected static $primary_key = 'product_id';
	protected static $table_name = 'products';
	protected static $table_fields = array('publisher','title','logo','price','descr','product_id','category','dateout','size','quantity','file' );

 	function __construct()
 	{
 		# code...
 		parent::__construct();
 	}

   public function getProductId(){
    return $this->product_id;
   }
 	 
 	public function setNewProductId(){

		
		//prod/001
		if($lastproduct = static::last()){
      $lastId = explode ('/',$lastproduct->product_id);
      $lastId[1]++;
    $this->product_id = 'PROD/'.$lastId[1];
    }else{
      $this->product_id = 'PROD/01'; 
    }


	}


 	public function insertProduct(){
 		$this->setNewProductId();
 		return ($this->create())? true : false;
 	}

  protected $upload_errors = array (
      UPLOAD_ERR_OK         => "No errors.",
      UPLOAD_ERR_INI_SIZE   => "Larger than upload_max_filesize.",
      UPLOAD_ERR_FORM_SIZE  => "Larger than form MAX_FILE_SIZE.",
      UPLOAD_ERR_PARTIAL    => "Partial upload",
      UPLOAD_ERR_NO_FILE    =>  "No file.",
      UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
      UPLOAD_ERR_CANT_WRITE => "Cant write to disk.",
      UPLOAD_ERR_EXTENSION  => "File upload stopped by extension." );

    

    public function  attach_file($file){
      //recieves $_file ('UPLOADED  FILE')
      //ERROR CHECKNG , SET OJESCT ATTRIBUTESss
      if(!$file || empty($file) || !is_array($file)){
        $this->errors[] = "No file ws uploaded. ";
        return  false;
      }elseif($file['error'] != 0){
        $this->errors[] = $this->upload_errors[$file['error']];
        return  false;
      }else{
        if (!isset($this->product_id) AND !isset($this->file)) 
          $this->setNewProductId();
        //$ext = pathinfo($file['name'],PATHINFO_EXTENSION);
        $this->temp_path = $file['tmp_name'];
        $this->logo = str_replace("/", "_", $this->product_id).".".basename($file['type']);
        $this->file = str_replace("/", "_", $file['name']);
        $this->type = $file['type'];
        $this->size = $file['size'];
        return true;
      }
    }

    public function save_with_file(){

      if(!empty($this->errors)){return false;}
      if(empty($this->logo) || empty($this->temp_path) AND empty($this->file) || empty($this->temp_path)){
        $this->errors[] = "The file location was not avaliable.";
        return false;
      }
      $target_path = "../images/product/".$this->logo;
      $target_path = "../upload/document/".$this->file;
      if(move_uploaded_file($this->temp_path, $target_path)){
        if(static::find($this->product_id AND $this->file)){
          $this->update();
        }
        else{
        
          $this->create();
        }
        unset($this->temp_path);
        return true;
      }else {
        $this->errors[]= "The file uploads failed, possible due to incorrect permission on the upload folder";
        return false;
      }
    }

 	public  static function Product(){
	
    $display = "<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators'>
                  <li data-target='#carousel-example-generic' data-slide-to='0' class='activ'><i class='fa fa-angle-left'></i>
                  </li>
                  <li data-target='#carousel-example-generic' data-slide-to='1'><i class='fa fa-angle-right'></i>
                  </li>
                </ol>
                <div class='carousel-inner result' role='listbox'>
                  <div class='item active'>
                    <div class='row'>";
                      if($all = static::All() )
                      foreach ($all as $index => $product ){
                        $product->price/= 100;
                         if ($index != 0 && $index % 4==0)
          $display.="<div>
                      <div class='col-sm-3  col-lg-4'>
                      <div class='thumbnail'>
                        <span class='service-link text-center'>
                          <img class='img-responsive' src='images/product/<?php echo $product->logo?>' width='100' height='80' class='img-responsive'  alt=''>
                        </span>
                        <div class='caption'>
                          <div class='category'>$product->category
                            <div class='pull-right'>
                              <i class='fa fa-star'></i>
                              <i class='fa fa-star'></i>
                              <i class='fa fa-star'></i>
                            </div>
                          </div>
                          <h4>Name:{$product->title}</h4>
                          <h5> Price: N$product->price</h5>
                          <h5>Description:  $product->descr</h6>
                          <h6>size  $product->size MB</h6>
                          <div><a href= 'login.php' class='btn btn-default' role='button'>Add to Cart</a><span class='pull-right'><i class='fa fa-heart-o'
                            ></i> Add to Wishlist</span>
                          </div>
                        </div>
                      </div>
                    </div>";}             
      $display.="</div>
                </div>
              </div>
    <script src='js/jquery.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='js/custom.js'></script>
</body>
<script type=text/javascript' src='js/bootstrap.min.jscol-lg-4 '></script>
</body>
</html>";
              echo $display;
            
          } 

public static function display(){



 $pro =" <div id='best-selling' class='carousel slide' data-ride='carousel'>
          <ol class='carousel-indicators'>
            <li data-target='#best-selling' data-slide-to='0' class='active'><i class='fa fa-angle-left'></i></li>
            <li data-target='#best-selling' data-slide-to='1'><i class='fa fa-angle-right'></i></li>
          </ol>
          <div class='carousel-inner result' role='listbox'>
            <div class='item active'>
              <div class='row'>
                <div class='col-sm-6'>
                  <div class='media'>
                    ";
                    if($all =static::All())
             foreach ($all as $product){
              $product->price/= 100;
                if($product->category == "Text Book"){    

                  $pro.="<div class='media-left'><img class='img-responsive' src='./images/product/<?php echo $product->logo?' alt=''></div>
                    <div class='media-body'>


                  <div class='category'> $product->category
                        <div class='pull-right'>
                          <i class='fa fa-star'></i>
                          <i class='fa fa-star'></i>
                          <i class='fa fa-star'></i>
                          <i class='fa fa-star'></i>
                          <i class='fa fa-star-o'></i>
                        </div>
                      </div>
                      <h3>$product->descr</h3>
                      <strong>N.$product->price</strong>

                   <div>
                        <a href='#' class='btn btn-default' role='button'>Add to Cart</a><span class='pull-right'><i class='fa fa-heart-o'></i> Add to Wishlist</span></div>
                    </div>
                    </div>
                </di>";}
                    
                  } 

                $pro.="   </div>
                          </div>
                        </div>
                      </div>
                    </div>
              ";
                echo $pro; 
   }  


   public static function show(){
      $show= "<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators'>
                  <li data-target='#carousel-example-generic' data-slide-to='0' class='activ'><i class='fa fa-angle-left'></i>
                  </li>
                  <li data-target='#carousel-example-generic' data-slide-to='1'><i class='fa fa-angle-right'></i>
                  </li>
                </ol>
                <div class='carousel-inner result' role='listbox '>
                  <div class='item active'>
                    <div class='row'>";
                      if($all = static::All() )
                      foreach ($all as $index => $product ){
                        $product->price/= 100;
                        if ($index != 0 && $index % 1==0)
          $show.="<div>
                      <div class='col-sm-3  col-lg-3'>
                      <div class='thumbnail'>
                        <span class='service-link text-center'>
                          <img class='img-responsive' src='images/product/$product->logo' width='100' height='80' class='img-responsive'  alt=''>
                        </span>
                        <div class='caption'>
                          <div class='category'>$product->category
                            <div class='pull-right'>
                              <i class='fa fa-star'></i>
                              <i class='fa fa-star'></i>
                              <i class='fa fa-star'></i>
                            </div>
                          </div>
                          <h4>Name:{$product->title}</h4>
                          <h5> Price: N$product->price</h5>
                          <h5>Description:  $product->descr</h6>
                          <h6>size  $product->size MB</h6>
                          <div><a href= 'login.php' class='btn btn-success' role='button'>Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>";}             
      $show.="</div>
                </div>
              </div>
    <script src='js/jquery.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='js/custom.js'></script>
</body>
<script type=text/javascript' src='js/bootstrap.min.jscol-lg-4 '></script>
</body>
</html>";
              echo $show;
            

   } 

   public  static function panel(){

    $panel = '';

 $panel = "<div id='mainBody' class='container'>
            <font color='green'><h3> Products </h3>
            <div class ='row'>"; 
      
if($all =static::All())
foreach ($all as $index=>$product){
  $product->price/= 100;
  if ($index != 0 && $index % 4==0)
    $panel.="</div>
  <div class ='row'>";

  $panel.= "<div class='col-lg-2  col-md-2 result'>
              <div class='panel panel-default '> 
                <div>
                 <img src='images/product/$product->logo' style='max-width: 80px; max-height: 80px;'/>
                 </div>
                <div class='panel-body'>
                 <strong> $product->category</strong>
                  <strong> $product->title</strong>
                  <h4> $product->publisher</h4>
                  <h4> N$product->price </h4>
                  <h4>size:$product->size</h4>
                </div>
                <div class='panel-footer'>
                  <h4><a class='btn btn-success' title='Click to view!' href='user_product_details.php?id=$product->product_id'><i class='fa icon-check'></i> VIEW </a>

                
                </div>  
              </div>
            </div>";}

$panel.=" </div>    
          </font>   
          </div>";

echo $panel;
   }       
}
?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
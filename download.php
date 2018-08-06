<?php
      include_once 'includes/product.php';
      include_once 'includes/transaction.php';
      include_once 'includes/session.php';
      // include_once 'verify.php';
      $hash = $_GET['code'];
      $product_id = $_GET['id'];
      $dfile = Transaction::Where(array('hash'=>$hash, 'product_id'=>$product_id));
      $product = Product::find($product_id);
      //var_dump($dfile); 
     //var_dump($product); exit();
      $download_path = 'upload/document/'.$product->file;
      $file_to_download = $download_path;


ignore_user_abort(true);
set_time_limit(0); // disable the time limit for this script
 
$path = 'upload/document/'.$product->file; // change the path to fit your websites document structure
 
$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '',$file_to_download); // simple file name validation
$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); // Remove (more) invalid characters
$fullPath = $path.$dl_file;
 
if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "pdf":
        header("Content-type: application/pdf");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
        break;
        // add more headers for other content types here
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
        break;
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit
?>
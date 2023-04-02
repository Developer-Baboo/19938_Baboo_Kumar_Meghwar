<?php
require_once("./Include/connection.php");
if (isset($_REQUEST['send'])) {
    $count = 0;
    $folder = "Images";
    if (!is_dir($folder)) {
        if (!mkdir($folder)) {
            $message = "Folder Not Created";
            header("location:index.php?msg=$message&color=red");
            die;
        }
    }

    $files= $_FILES['multiple_file'];
    // echo "<pre>";print_r($_FILES);die;
    foreach ($files['name'] as $key => $value) {
        if(move_uploaded_file($files['tmp_name'][$key], $folder."/".$files['name'][$key]))
        {
            $file_extension = pathinfo($folder."/".$files['name'][$key],PATHINFO_EXTENSION);
            
            $query=" INSERT INTO images(image_name)Values('".$files['name'][$key]."')";
            $result=mysqli_query($connection,$query);
            
        }
                
        }
}
?>


<?php 
   $qry="SELECT *FROM images";
   $result=mysqli_query($connection,$qry);
   if (mysqli_num_rows($result)) {
       while ($row=mysqli_fetch_assoc($result)) {
          ?>
            <img src="<?php echo $folder."/".$row['image_name']?>">
          <?php
       }
   }
?>
<?php
    if(isset($_POST['submit'])){
        //check submit buton click... 
    
        $file_name = $_FILES['image']['name']; //get details
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $temp_name = $_FILES['image']['tmp_name'];
        $save_as= 'images/'; // upload files to images directory

        $file_uploaded = move_uploaded_file($temp_name, $save_as . $file_name);

        }
    ?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Images Uploader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center text-info">Simple image Uploader</h1>
        <h3 class="h3 lead">Upload Your File</h3>

            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div><!-- End File Uploader-->
            <button type="submit" name="submit" class="btn btn-primary form-control">Upload</button> 
            </form>
           
   
     <div  class="d-flex justify-content-between">
     <?php
                if(isset($_POST['submit'])){
                
                if($file_uploaded){
                   
                     
                      echo '<img src="'. $save_as . $file_name . '" class="upload_img">';
                      
                  
                }
            }
  
    ?>
     </div>
      </div>
               
                

 
    
</body>
</html>

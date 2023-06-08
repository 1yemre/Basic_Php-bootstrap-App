<?php


 $course1="Php Course";
 $course1Info="PHP training from A to Z.";
 $course1Img="picture_2.png";
 $course1_broadcasting="2023";
 $course1_comment="100";
 $course1_like="300";

 $course2="C# Course";
 $course2Info="C# training from A to Z.";
 $course2Img="picture1.png";
 $course2_broadcasting="2023";
 $course2_comment="200";
 $course2_like="500";


 $course3="Pyhton Course";
 $course3Info="Pyhton training from A to Z.";
 $course3Img="picture_3.png";
 $course3_broadcasting="2023";
 $course3_comment="95";
 $course3_like="700";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
</head>
<body>

<div class="container my-3">

     <div class="card mb-3">
         <div class="row">
               <div class="col-3">
                  <img src="<?php echo $course1Img;  ?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-9">
             <div class="card-body">
            <h5 class="card-title"><?php echo $course1 ;  ?></h5>
            <p class="card-text"><?php  echo $course1Info; ?></p>
                    <p>
                            <span class="badge rounded-pill text-bg-primary">
                                    Like : <?php echo $course1_like  ?>
                            </span>
                        
                   
                    
                            <span class="badge rounded-pill text-bg-danger">
                                   Comment :  <?php echo $course1_comment  ?>
                            </span>
                       </p>  
                    
                </div>   

             </div>
          </div>
       </div>
    </div>
</div>


<div class="container my-3">

     <div class="card mb-3">
         <div class="row">
               <div class="col-3">
                  <img src="<?php echo $course2Img;  ?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-9">
             <div class="card-body">
            <h5 class="card-title"><?php echo $course2 ;  ?></h5>
            <p class="card-text"><?php  echo $course2Info; ?></p>
                    <p>
                            <span class="badge rounded-pill text-bg-primary">
                                    Like : <?php echo $course2_like  ?>
                            </span>
                        
                   
                    
                            <span class="badge rounded-pill text-bg-danger">
                                   Comment :  <?php echo $course2_comment  ?>
                            </span>
                       </p>  
                    
                </div>   

             </div>
          </div>
       </div>
    </div>
</div>

<div class="container my-3">

     <div class="card mb-3">
         <div class="row">
               <div class="col-3">
                  <img src="<?php echo $course3Img;  ?>" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-9">
             <div class="card-body">
            <h5 class="card-title"><?php echo $course3 ;  ?></h5>
            <p class="card-text"><?php  echo $course3Info; ?></p>
                    <p>
                            <span class="badge rounded-pill text-bg-primary">
                                    Like : <?php echo $course3_like  ?>
                            </span>
                        
                   
                    
                            <span class="badge rounded-pill text-bg-danger">
                                   Comment :  <?php echo $course3_comment  ?>
                            </span>
                       </p>  
                    
                </div>   

             </div>
          </div>
       </div>
    </div>
</div>


</body>
</html>
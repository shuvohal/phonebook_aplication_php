<?php
require_once __DIR__ ."/autoload.php";

$data = array_reverse(json_decode(file_get_contents('data/contacts.json')));


      $check = $data; 
   
   if(isset($_GET['search'])){
      
   
      if($_GET['search']){
          $check = array_filter( $data, function($item){

        if( strtolower($item -> name) == strtolower( $_GET['search'] ) || $item -> phone == $_GET['search'] ){
              return $item;
        }
         

        });
      }else{
         $check = $data; 
      }
     

        
   }

  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phonebook application</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
       


    <div class="contact-head">
      <a href="./create.php">create new contact</a>
          <form action ="" method ="GET">
              <input type="search" name="search" placeholder="search contact" >
              <input type="submit" value="search" >
         </form>
    </div>


      <div class="contact-list">
     <?php foreach( $check  as $item) :
      
     

      
      ?> 
    
     
      <div class="list-item">
        <img src ="<?php echo $item -> photo;?>" alt="">
        <div class="item-details">
            <h3><?php echo $item -> name;?></h3>
            <p><?php echo $item -> phone;?></p>
            <p><?php echo $item -> location;?></P>
        </div>
      </div>
       
 <?php  endforeach; ?>
      </div>

    </div>
</body>
</html>
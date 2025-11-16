<?php
require_once __DIR__ ."/autoload.php";

$data = json_decode(file_get_contents('data/contacts.json'));

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
        <a href="./create.php">create new contact</a>
      <div class="contact-list">
     <?php foreach($data as $item) : ?> 
    
     
      <div class="list-item">
        <img src ="<?php echo $item -> photo;?>" alt="">
        <div class="item-details">
            <h3><?php echo $item -> name;?></h3>
            <p><?php echo $item -> phone;?></p>
            <p><?php echo $item -> location;?></P>
        </div>
      </div>
       
 <?php endforeach; ?>
      </div>

    </div>
</body>
</html>
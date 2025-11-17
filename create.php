
<?php
require_once __DIR__ ."/autoload.php";



if (isset($_POST['contact_form'])){

     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $location = $_POST['location'];

     $photo = $_POST['photo'];

      $group = $_POST['group'];
       $gender = $_POST['gender'];
           

    $old_data = json_decode(file_get_contents('data/contacts.json'));

    array_push($old_data,[
        'id'       => createID(),
        'name'     => $name,
        'phone'    => $phone,
        'location' => $location,
        'photo'    => $photo,
        'group'    => $group,
        'gender'   => $gender,
        'status'   => true,
        'createdAt'   => time(),
        'updateAt'   => null,

    ]);
         
    file_put_contents('data/contacts.json', json_encode($old_data));
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
    <div class="container ">
        <a href="./index.php">All contacts</a>
      <h2>Create new contact</h2>
      
      <hr>
 
    <form action="" method="POST" class="contact-from">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="phone" name="phone">
        <input type="text" placeholder="Location" name="location">
        <input type="text" placeholder="photo" name="photo">
        <label>
           
            <input type="radio" value="male" name="gender">
             Male
        </label>


        <label>
            
            <input type="radio" value="female" name="gender">
            Female
        </label>

        <select name="group" id="">
           <option value ="Family">Family</option>
            <option value ="Friends">Friends</option>
             <option value ="Relatives">Relatives</option>
              <option value ="Others">Others</option>
        </select>

        <input type="submit" name="contact_form" value="contact_form">



    </form>

    </div>
</body>
</html>
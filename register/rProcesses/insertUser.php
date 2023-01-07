<?php

include '../helpers/credentials.php';

if (isset($_POST['registerBtn'])){
      // Make the variables of the inputs from the form
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $email= $_POST['email'];
      $numbers= $_POST['numbers'];
      $gender= $_POST['gender'];
      $passwords= $_POST['passwords'];
      $street1= $_POST['street1'];
      $street2= $_POST['street2'];
      $city= $_POST['city'];
      $states= $_POST['states'];
      $zipcode= $_POST['zipcode'];
      $comment= $_POST['comment'];
      //Get image data from the form
      $pic= $_FILES['pic']['name'];

      //The path to store the uploaded image
      $target= "../images/uploadImages/".basename($_FILES['pic']['name']);

      


    $sql = "INSERT INTO college (firstname, lastname, email, numbers, gender, passwords, 
    street1, street2, city, states, zipcode, comment, pic)
     
    VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$numbers}', '{$gender}', '{$passwords}', 
    '{$street1}', '{$street2}', '{$city}','{$states}', '{$zipcode}', '{$comment}', '{$pic}')";

    // Now lets move the uploaded image into the folder: uploadImages
    if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
      $msg= "Image uploaded successfully";
    }else{
      $msg = "There was a problem uploading image";
    }
    

    if (mysqli_query($conn, $sql)) {
      echo "  <div class='alert alert-success alert-dismissible fade show'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Success!</strong> User Registered</div>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
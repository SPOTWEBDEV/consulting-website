
<?php

$url = $domain . 'client/access/index.php';
if(isset($_SESSION['user_login'])) {
    $id = $_SESSION['user_login'];
    $select = mysqli_query($connection, "SELECT * FROM `clients` WHERE `id`='$id'");
         if (mysqli_num_rows($select)){
             while($row = mysqli_fetch_assoc($select)){
                    $email = $row['email'];
                    $name = $row['firstname'] . ' '. $row['lastname'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $password = $row['password'];
                    $phone = $row['phone'];
                    $img = $row['img'];
                    $bal = $row['bal'];
                    $country = $row['country'];
                    $occupation = $row['occupation'];
                    $birthday  = $row['birthday'];
                    $bio = $row['bio'];
                    $joining = $row['date'];
                    $location = $row['address'] . '' . $row['state'];
                    $state = $row['state'];
                    $bio = ($bio == "" )? "Hello! My name is $name, and I\'m excited to manage my finances with $sitename": $bio;
          }
         }
         else{
             echo "<script>window.open('$url', '_self');</script>";
         }
} else {
    echo "<script>window.open('$url.', '_self');</script>";;
}













?>



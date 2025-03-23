<?php
include('../../database.php');

if (isset($_POST['from'])) {
         $url = $domain . 'client/access/register.php';
         if ($_POST['from'] == $url) {

                  $targetDir = "../../../uploads/profile/";
                  $targetFile = $targetDir . basename($_FILES["image"]["name"]);
                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                           $phoneNumberInput = $_POST['phoneNumberInput'];
                           $emailAddressInput = $_POST['emailAddressInput'];
                           $passwordInput = $_POST['passwordInput'];
                           $FirstNameInput = $_POST['FirstNameInput'];
                           $lastNameInput = $_POST['lastNameInput'];
                           $addressLineInput = $_POST['addressLineInput'];
                           $cityAddressInput = $_POST['cityAddressInput'];
                           $stateAddressInput = $_POST['stateAddressInput'];
                           $countryAddressInput = $_POST['countryAddressInput'];
                           $date = date('Y-m-d h:m:s a');
                           $description = $_POST['description'];
                           $birthDateInput = $_POST['birthDateInput'];
                           $occupation = $_POST['occupation'];
                           $img = $_FILES["image"]["name"];

                           $sql = "INSERT INTO `clients`(`firstname`, `lastname`, `email`, `phone`, `password`, `date`, `img`, `birthday`, `address`, `state`, `occupation`, `country`, `bio`) VALUES ('$FirstNameInput','$lastNameInput','$emailAddressInput','$phoneNumberInput','$passwordInput','$date','$img','$birthDateInput','$addressLineInput','$stateAddressInput','$occupation','$countryAddressInput','$description')";

                           $select = mysqli_query($connection, $sql);
                           if ($select) {
                                    echo "REGISTER";
                           }
                  } else {
                           echo "Error uploading image.";
                  }
         }
}

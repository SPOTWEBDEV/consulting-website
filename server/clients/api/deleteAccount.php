<?php
include('../../database.php');

if (isset($_POST['from'])) {
         $url = $domain . 'client/setting.php';
         if ($_POST['from'] == $url){
                  $id = $_POST['id'];
                  $password = $_POST['password'];
                  $select = mysqli_query($connection, "DELETE FROM `clients` WHERE `id`='$id'");
                  if($select){
                           echo "DELETED";
                  }
         }
}

<?php
include('../connection.php');

if (isset($_GET['reference']) && isset($_GET['id'])) {
    $reference = $_GET['reference'];
    $id = $_GET['id'];


    // Paystack Verification
    $url = "https://api.paystack.co/transaction/verify/" . $reference;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $payment_key",
        "Cache-Control: no-cache",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    if ($result === false) {
        die("cURL Error: " . curl_error($ch));
    }
    $response = json_decode($result);
    curl_close($ch);




    if ($response->status && $response->data->status == "success") {
        $status = "success";
    } else {
        $status = $response->data->status;
    }

    echo $status . ' - ' . $id;

    $query = mysqli_query($connection, "UPDATE `booking` SET `status` = '$status' , `reference`='$reference' WHERE `id` = '$id'");

    if ($status == 'success') {
         header("Location: ../../support_success?status=$status&reference=$reference");
    }




    exit;
}

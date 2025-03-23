<?php
if (isset($_POST['book_btn'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $type   = $_POST['type'];
    $amounts = $_POST['amount'];

    $amount = str_replace('$', '', $amounts);

    $status = "pending"; // Initial status before payment completion

                                 // Insert initial record with "pending" status
    $date = date("Y-m-d H:i:s"); // Current date and time

    $check = mysqli_query($connection, "SELECT * FROM `users` WHERE `email`='$email'");
    echo mysqli_error($connection);
    if (! mysqli_num_rows($check)) {
        $query = mysqli_query($connection, " INSERT INTO `users`(`name`, `email`, `phone`, `date_registered`, `status`) VALUES ('$name','$email','$phone','$date','')");
        echo mysqli_error($connection);
        if (! $query) {
            echo "<script>window.onload = () => Model('Something went wrong , your booking could not be completed. Please try again later or contact support', 'danger');</script>";
        }
    }

    $statement = mysqli_query($connection, "INSERT INTO `booking`(`name`,`email`,`phone`,`type`,`date`, `amount`,`status`) VALUES ('$name','$email','$phone','$type','$date','$amount','$status')");
    if ($statement) {

        $url    = "https://api.paystack.co/transaction/initialize";
        $fields = [
            'email'        => $email,
            'amount'       => $amount * 100, // Ensure $amount is an integer
            'callback_url' => $domain . "server/payment/callback.php?id={$connection->insert_id}",
            'metadata'     => ["cancel_action" => $domain . "book-me/?cancel={$connection->insert_id}"],
        ];

        $fields_string = http_build_query($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $payment_key",
            "Cache-Control: no-cache",
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        if ($result === false) {
            echo "<script>window.onload = () => Model('cURL Error: " . curl_error($ch) . "', 'danger');</script>";
        } else {
            $response = json_decode($result);
            if (isset($response->data->authorization_url)) {
                header("Location: " . $response->data->authorization_url); // Redirect to Paystack
                exit;
            } else {
                echo "<script>window.onload = () => Model('Paystack Error: " . $response->message . "', 'danger');</script>";
            }
        }

        curl_close($ch);
    } else {
        echo "<script>window.onload = () => Model('Your booking could not be completed. Please try again later or contact support', 'danger');</script>";
    }
}

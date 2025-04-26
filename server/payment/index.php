<?php
function makePayment($amount, $email, $insert_id, $who)
{
    global $domain, $connection, $payment_key;
    $url    = "https://api.paystack.co/transaction/initialize";
    $fields = [
        'email'        => $email,
        'amount'       => $amount * 100, 
        'currency'     => 'USD',
        'callback_url' => $domain . "server/payment/callback.php?id={$connection->insert_id}&who={$who}",
        'metadata'     => ["cancel_action" => $domain ."/" . $who . "/?cancel={$connection->insert_id}"],
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

}


?>
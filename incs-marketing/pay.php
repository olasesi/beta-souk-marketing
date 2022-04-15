<?php
$result = array();

//Set other parameters as keys in the $postdata array
$_POST['price'];
$postdata = [
    'email' => $email,
    'amount' => $price*100,
    'reference' => $reference_num,
    'callback_url' => GEN_WEBSITE.'/buy-verify-payment.php'
];

$url = "https://api.paystack.co/transaction/initialize";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Authorization: '.API_KEY,
    'Content-Type: application/json',

];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$request = curl_exec($ch);

curl_close($ch);

if ($request) {

    $result = json_decode($request, true);

    header('Location: ' . $result['data']['authorization_url']);

}

   exit();
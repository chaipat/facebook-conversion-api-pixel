<?php
function hash_data($data) {
    return hash('sha256', $data);
}

$access_token = 'YOUR_ACCESS_TOKEN';
$pixel_id = 'YOUR_PIXEL_ID';
$url = "https://graph.facebook.com/v12.0/$pixel_id/events";

$data = [
    'data' => [
        [
            'event_name' => 'Purchase',
            'event_time' => time(),
            'user_data' => [
                'em' => hash_data('user@example.com'),
                'ph' => hash_data('1234567890'),
                // ... other user data parameters
            ],
            'custom_data' => [
                'currency' => 'usd',
                'value' => 30.00
            ],
            'event_source_url' => 'https://yourwebsite.com/product-page',  // The URL where the event occurred
            'action_source' => 'website'
        ]
    ],
    'access_token' => $access_token
];

$options = [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json'
    ],
    CURLOPT_RETURNTRANSFER => true,
];

$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo 'Response:' . $response;
}
curl_close($ch);
?>

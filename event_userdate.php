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
                'ge' => hash_data('m'),
                'db' => hash_data('19900101'),
                'ln' => hash_data('Doe'),
                'fn' => hash_data('John'),
                'ct' => hash_data('San Francisco'),
                'st' => hash_data('CA'),
                'zp' => hash_data('94107'),
                'country' => hash_data('US'),
                'external_id' => 'unique_user_id',
                'client_ip_address' => '192.168.0.1',
                'client_user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'fbc' => 'fbclid=IwAR0...',
                'fbp' => 'fb.1.1558571054389.1098115397'
            ],
            'custom_data' => [
                'currency' => 'usd',
                'value' => 30.00
            ],
            'event_source_url' => 'https://yourwebsite.com',
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

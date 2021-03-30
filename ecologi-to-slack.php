<?php

/**
 * Your Ecologi username
 */
$username = 'change-me';

/**
 * Your Slack Webhook URL
 * https://api.slack.com/messaging/webhooks
 */
$slackWebhookUrl = 'change-me';

/**
 * ---- No need to edit below this point ----
 */

$data = json_decode(file_get_contents('https://public.ecologi.com/users/' . $username . '/impact'));

if (empty($data)) {
    exit;
}

$curlHandle = curl_init($slackWebhookUrl);

# Setup request to send json via POST.
$payload = json_encode([
    "blocks" => [
        [
            "type" => "section",
            "text" => [
                "type" => "mrkdwn",
                "text" => "Our positive impact to date:",
            ]
        ],
    ],
    "attachments" => [
        [
            'text' => '🌱 ' . $data->trees . ' trees planted',
            'color' => 'good',
        ],
        [
            'text' => '♻️ ' . $data->carbonOffset . 'T of CO2 offset',
            'color' => 'good',
        ],
        [
            'text' => 'https://ecologi.com/' . $username,
        ],
    ],
]);

curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curlHandle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curlHandle);
curl_close($curlHandle);

if ($result === false) {
    echo 'There was an error posting to Slack';
}

<?php
const API_KEY = "BYzWKMwjN4XZdPNMzBN5IoNzOmN7A9";
const API_URL = "https://api.cloudways.com/api/v1";
const EMAIL   = "iamvishalsharma423@gmail.com";

// Use this function to contact the Cloudways API
function callCloudwaysAPI($method, $url, $accessToken, $post=[])
{
    $baseURL = API_URL;
    $ch      = curl_init();
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_URL, $baseURL.$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set Authorization Header
    if ($accessToken) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer '.$accessToken]);
    }

    // Set Post Parameters
    $encoded = '';
    if (count($post)) {
        foreach ($post as $name => $value) {
            $encoded .= urlencode($name).'='.urlencode($value).'&';
        }

        $encoded = substr($encoded, 0, (strlen($encoded) - 1));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);
        curl_setopt($ch, CURLOPT_POST, 1);
    }

    $output   = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpcode != '200') {
        die('An error occurred code: '.$httpcode.' output: '.substr($output, 0, 10000));
    }

    curl_close($ch);
    return json_decode($output);
}

// Fetch Access Token
$tokenResponse = callCloudwaysAPI(
    'POST',
    '/oauth/access_token',
    null,
    [
        'email'   => EMAIL,
        'api_key' => API_KEY,
    ]
);

$accessToken = $tokenResponse->access_token;


// Array of Cloudways applications and their IDs
$apps = [
    "pokipro awin" => 3382098,
    // Add as many apps as you need
];

// Get the event data from the GitHub webhook payload
$eventData = json_decode(trim(file_get_contents("php://input")), true);

// Get the Cloudways app ID based on the GitHub repository name
$app_id    = $apps[$eventData['repository']['name']];
file_put_contents('github_pull.txt', json_encode($eventData) . "\n\n", FILE_APPEND);

// Call the Cloudways API to deploy the changes
$gitPullResponse = callCloudwaysAPI(
    'POST',
    '/git/pull',
    $accessToken,
    [
        'server_id'   => "714825",
        'app_id'      => $app_id,
        'git_url'     => $eventData['repository']['ssh_url'],
        'branch_name' => "BRANCH_NAME_HERE",
    ]
);

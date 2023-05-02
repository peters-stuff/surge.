<?php
die();
// Set up the API endpoint and authorization headers
$endpoint = 'https://api.openai.com/v1/engines/davinci-codex/completions';
$api_key = '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';

// Get the user's message from the request
$user_message = $_GET['message'];

// Set up the request data for the OpenAI API
$request_data = array(
    'prompt' => $user_message,
    'max_tokens' => 60,
    'temperature' => 0.7
);

// Set up the headers for the API request
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $api_key
);

// Send the API request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Parse the API response and extract the generated text
$response_data = json_decode($response, true);

if (isset($response_data['choices'][0]['text'])) {
    $generated_text = $response_data['choices'][0]['text'];
} else {
    $generated_text = "I'm sorry, I couldn't understand your request.";
}

// Output the generated text as the bot's response
echo $generated_text;

?>

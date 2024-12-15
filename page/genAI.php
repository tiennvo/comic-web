<?php

require __DIR__ . '/../vendor/autoload.php';
require_once('model/connection.php'); 
require_once('function/function.php');
$db=new config();
$db->config();

use GuzzleHttp\Client;

if (isset($_POST['question'])) {
    $arr2 = $db->GetGenres();
    $textgenres = "";
    foreach($arr2 as $textg){				
        $textgenres .= $textg['Id'] . ': ' . $textg['Name'].', ';
    }
    $question = $_POST['question'];
    $result = callApiAndGetResult($question . ' hãy chọn giúp tôi 1 trong những thể loại sau phù hợp vớo hoàn cảnh bây giờ, chỉ được trả lời là số ID (' . $textgenres . ')');
    
    // Trả kết quả dưới dạng JSON
    echo json_encode(['result' => $result]);
} else {
    
}

function fetchResponse($url, $model, $messages) {
    $client = new Client();

    $payload = [
        "model" => $model,
        "messages" => $messages
    ];

    $headers = [
        "Content-Type" => "application/json",
        "Accept" => "text/event-stream"
    ];

    $responseText = '';

    try {
        // Gửi POST request
        $response = $client->post($url, [
            'json' => $payload,
            'headers' => $headers,
            'stream' => true
        ]);

        $body = $response->getBody();
        while (!$body->eof()) {
            $line = $body->read(1024);
            // Tách các JSON
            preg_match_all('/\{.*?\}/', $line, $matches);

            // Xử lý từng JSON được tách ra
            foreach ($matches[0] as $json) {
                $data = json_decode($json, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    //print_r($data); // In toàn bộ dữ liệu đã giải mã
                    if (isset($data['content'])) {
                        $responseText = $data['content']; // In nội dung nếu có
                    }
                } 
            }
        }

    } catch (Exception $e) {
        $responseText = "An error occurred: " . $e->getMessage() . "\n";
    }

    return $responseText;
}

function callApiAndGetResult($question) {
    $chatUrl = "http://localhost:8080/backend-api/v2/conversation";
    $model = "gpt-4o";
    $messages = [
        ["role" => "system", "content" => $question]
    ];

    return fetchResponse($chatUrl, $model, $messages); 
}
?>

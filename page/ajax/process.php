<?php
require __DIR__ . '/../genAI.php';

$question = "Chào bạn?";

// Gọi hàm API
try {
    $result = callApiAndGetResult($question);
    echo htmlspecialchars($result); // Trả kết quả về AJAX
} catch (Exception $e) {
    echo "Error: " . htmlspecialchars($e->getMessage());
}

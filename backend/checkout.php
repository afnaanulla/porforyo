<?php
// cors setup
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Content-Type: application/json");

// handle preflight options request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// read json input
$data = json_decode(file_get_contents("php://input"), true);

if ($data && isset($data['cart'])) {
    $orderId = uniqid("order_");
    $cart = $data['cart'];

    $order = [
        "order_id" => $orderId,
        "timestamp" => date("Y-m-d H:i:s"),
        "cart" => $cart
    ];

    $ordersFile = 'orders.json';
    $existing = file_exists($ordersFile) ? json_decode(file_get_contents($ordersFile), true) : [];
    $existing[] = $order;
    file_put_contents($ordersFile, json_encode($existing, JSON_PRETTY_PRINT));

    echo json_encode([
        "success" => true,
        "message" => "Order placed successfully!",
        "order_id" => $orderId
    ]);
} else {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => "Invalid cart data"
    ]);
}
?>

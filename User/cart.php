<?php
session_start();
// Khởi tạo giỏ hàng nếu chưa tồn tại
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Kiểm tra xem có sản phẩm được thêm vào giỏ hàng hay không
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Tạo một mảng để biểu diễn sản phẩm
    $product = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => 1 // Mặc định là 1 sản phẩm
    );

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
    $product_exists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] === $product_id) {
            $item['quantity'] += 1;
            $product_exists = true;
            break;
        }
    }

    // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm nó vào
    if (!$product_exists) {
        array_push($_SESSION['cart'], $product);
    }
}
?>
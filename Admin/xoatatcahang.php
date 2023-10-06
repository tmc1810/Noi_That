<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_ids"])) {
    // Kết nối đến cơ sở dữ liệu MySQL
    $servername = "localhost";
    $username = "tendangnhap";
    $password = "matkhau";
    $dbname = "tencsdl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Lấy danh sách ID cần xóa từ dữ liệu POST
    $delete_ids = $_POST["delete_ids"];

    // Xóa dữ liệu từ MySQL
    $delete_query = "DELETE FROM tenbang WHERE id IN (" . implode(",", $delete_ids) . ")";
    if ($conn->query($delete_query) === TRUE) {
        echo "Xóa thành công";
    } else {
        echo "Lỗi khi xóa dữ liệu: " . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
} else {
    echo "Không có dữ liệu được gửi hoặc yêu cầu không hợp lệ.";
}
?>

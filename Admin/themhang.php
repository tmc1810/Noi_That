<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hãng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./FrontEnd/style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
</head>
<script>
document.getElementById("category-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Ngăn chặn gửi biểu mẫu mặc định

    // Thực hiện các bước xử lý dữ liệu và thêm hãng vào cơ sở dữ liệu ở đây
    // Sau khi thêm thành công, bạn có thể chuyển hướng bằng JavaScript:

    window.location.href = "quan_ly_hang.php"; // Chuyển đến trang quan_ly_hang.php
});
</script>

<body>


    <?php
include './sidebar_quantri.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tenhang']) && isset($_POST['sdt']) && isset($_POST['diachi']) && isset($_POST['anhdaidien'])) {
        $tenhang = $_POST['tenhang'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $anhdaidien = $_POST['anhdaidien'];
        
        // Thực hiện kết nối đến cơ sở dữ liệu
        $conn = mysqli_connect('localhost', 'root', '', 'noi_that');

        if (!$conn) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
        }

        // Sử dụng truy vấn SQL để thêm dữ liệu
        $sql = "INSERT INTO hang_san_xuat (ten_hang, so_dien_thoai, dia_chi, anh_dai_dien) VALUES ('$tenhang', '$sdt', '$diachi', '$anhdaidien')";

        if (mysqli_query($conn, $sql)) {
            echo "Thêm hãng thành công!";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }

        // Đóng kết nối
        mysqli_close($conn);
    }
}
?>

    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2">
                            <h5>Thêm hãng</h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-horizontal" id="category-form" action="#" method="POST">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tên hãng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tenhang">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Thứ tự</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="thutu" value="0">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sdt">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="diachi">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                            <div class="col-sm-10">
                                <input class="btn bg-secondary text-white" type="file" value="Chọn ảnh đại diện"
                                    name="anhdaidien" />
                            </div>
                        </div>

                        <form class="form-horizontal" id="category-form" action="#" method="POST">
                            <!-- Các trường nhập dữ liệu -->
                            <div class="control-group form-group buttons">
                                <button class="btn btn-primary" type="submit" id="btnAddCate">Thêm hãng</button>
                                <!-- <div id="success-message" style="display: none;" class="alert alert-success">Thêm thành công!</div> -->
                            </div>
                        </form>
                    

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

</html>
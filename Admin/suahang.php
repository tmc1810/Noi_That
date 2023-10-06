<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./FrontEnd/style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
</head>

<body>
    <?php
    include './sidebar_quantri.php';

    // Import kết nối CSDL
    require_once 'ketnoi.php';

    // Kiểm tra xem có tham số id được gửi từ URL không
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        // Lấy giá trị tham số id
        $id = $_GET['id'];

        // Thực hiện truy vấn SQL để lấy thông tin hãng với id tương ứng
        $sql = "SELECT * FROM hang_san_xuat WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $hang = mysqli_fetch_assoc($result);

            // Xử lý biểu mẫu chỉnh sửa ở đây
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Lấy dữ liệu từ biểu mẫu chỉnh sửa (sửa thông tin hãng ở đây)
                $tenHangMoi = $_POST['tenhang'];

                // Thực hiện truy vấn SQL để cập nhật thông tin hãng
                $sqlUpdate = "UPDATE hang_san_xuat SET ten_hang = '$tenHangMoi' WHERE id = $id";
                if (mysqli_query($conn, $sqlUpdate)) {
                    // Nếu cập nhật thành công, chuyển hướng trở lại trang quản lý hãng
                    header("Location: quan_ly_hang.php");
                    exit();
                } else {
                    echo "Lỗi: " . mysqli_error($conn);
                }
            }
        } else {
            echo "Không tìm thấy hãng với id này.";
        }
    } else {
        echo "Tham số id không hợp lệ.";
    }
    ?>

    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2">
                            <h5>Sửa hãng</h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-horizontal" id="category-form" action="#" method="post">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tên hãng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tenhang" value="<?php echo $hang['ten_hang']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Thứ tự</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="0">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                            <div class="col-sm-10">
                                <input class="btn bg-secondary text-white" type="button" value="Chọn ảnh đại diện" />
                            </div>
                        </div>

                        <div class="control-group form-group buttons">
                            <input class="btn btn-primary" href="quan_ly_danh_muc.php" id="btnAddCate" type="submit" value="Sửa hãng" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

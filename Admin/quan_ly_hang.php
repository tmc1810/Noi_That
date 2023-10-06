<head>
    <title>Quản lý hãng</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
</head>

<body>
    <?php
        include './sidebar_quantri.php';
    ?>
    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2">
                            <h2 style="color: #FFF;">Quản lý hãng<h2>
                        </div>
                        <div class="p-2 ms-auto">
                            <form action="themhang.php" method="POST">
                                <!-- Nội dung của biểu mẫu -->
                                <button style="margin-top: 12px;" type="submit" class="btn btn-primary">Thêm</button>
                            </form>
                        </div>
                        <div class="p-2"><button class="btn btn-danger" onclick="deleteCheckedItems()">Xóa</button></div>
                    </div>
                </div>

                <div class="accordion-body">
                    <form class="form-inline" action="quan_ly_hang.php" method="GET">
                        <input class="" placeholder="Tên hãng" style="height: 35px;" name="search" type="text" />
                        <button class="btn bg-warning" type="submit" style="margin-top: -6px;">Tìm kiếm</button>
                    </form>

                    <br>
<?php
// Import kết nối CSDL
require_once 'ketnoi.php';

// Xử lý tìm kiếm
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Truy vấn dữ liệu từ bảng hang_san_xuat
$query = "SELECT * FROM hang_san_xuat";
// Thêm điều kiện tìm kiếm nếu có tên hãng được nhập
if (!empty($search)) {
    $query .= " WHERE ten_hang LIKE '%$search%'";
}
$result = mysqli_query($conn, $query);

// Kiểm tra xem có dữ liệu trả về hay không
if (mysqli_num_rows($result) > 0) {
    echo '<table class="table table-bordered table-hover vertical-center">';
    echo '<thead>';
    echo '<tr>';
    echo '<th id="manufacturer-grid_cnumber">&nbsp;</th>';
    echo '<th class="checkbox-column" id="manufacturer-grid_c0"><input type="checkbox" id="checkAll" onclick="toggleCheckboxes()"></th>';
    echo '<th id="manufacturer-grid_cavatar">&nbsp;</th>';
    echo '<th id="manufacturer-grid_c1">Tên hãng</th>';
    //echo '<th id="manufacturer-grid_corder" style="text-align:center;">Thứ tự</th>';
    echo '<th></th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td width="30px">' . $row['id'] . '</td>';
        echo '<td width="30px"><input value="' . $row['id'] . '" type="checkbox"></td>';
        echo '<td width="60px;"></td>';
        echo '<td>' . $row['ten_hang'] . '</td>';
        //echo '<td width="80px" style="text-align:center;">' . $row['thu_tu'] . '</td>';
        echo '<td style="width: 100px;" align="center"><a class="fa-solid fa-pen-to-square" href="suahang.php?id=' . $row['id'] . '"></a>&emsp;<a class="fa-solid fa-trash" href="xoahang.php?id=' . $row['id'] . '"></a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'Không có dữ liệu.';
}

// Đóng kết nối CSDL
mysqli_close($conn);
?>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleCheckboxes() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var checkAll = document.getElementById('checkAll');

            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = checkAll.checked;
            }
        }

        function deleteCheckedItems() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var formData = new FormData();

            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    formData.append('xoahang_ids[]', checkboxes[i].value);
                }
            }

            // Gửi dữ liệu đã đánh dấu lên server để xóa
            fetch('xoahang.php', {
                method: 'POST',
                body: formData
            }).then(function(response) {
                if (response.ok) {
                    // Xóa thành công, tải lại trang để cập nhật dữ liệu
                    window.location.reload();
                }
            });
        }
    </script>
</body>
</html>
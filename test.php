<!DOCTYPE html>
<html>
<head>
    <title>Xóa dữ liệu đã đánh dấu</title>
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
                    formData.append('delete_ids[]', checkboxes[i].value);
                }
            }

            // Gửi dữ liệu đã đánh dấu lên server để xóa
            fetch('delete.php', {
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
</head>
<body>
    <table>
        <tr>
            <th><input type="checkbox" id="checkAll" onclick="toggleCheckboxes()"></th>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
        </tr>
        <?php
        // Kết nối đến cơ sở dữ liệu MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tencsdl";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        // Truy vấn dữ liệu từ bảng MySQL và hiển thị nó trong bảng HTML
        $sql = "SELECT * FROM tenbang";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><input type='checkbox' value='" . $row["id"] . "'></td>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["ten"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Không có dữ liệu.";
        }

        // Đóng kết nối
        $conn->close();
        ?>
    </table>
    <button onclick="deleteCheckedItems()">Xóa các mục đã đánh dấu</button>
</body>
</html>

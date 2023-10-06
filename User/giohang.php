<?php
    include './navbarweb.php'
?>
<?php
    // Danh sách các sản phẩm với số lượng và giá của chúng (VNĐ)
    $items = array(
        array("Ảnh sản phẩm"=>"../IMG sản phẩm/Bàn làm việc/Bàn làm việc Hopper/1.jpg","Tên sản phẩm" => "Bàn làm việc Hopper", "Số lượng" => 1, "Giá (VNĐ)" => 9490000),
        array("Ảnh sản phẩm"=>"../IMG sản phẩm/Giường ngủ/Giường Coastal.jpg","Tên sản phẩm" => "Giường Coastal", "Số lượng" => 1, "Giá (VNĐ)" => 5625000),
        array("Ảnh sản phẩm"=>"../IMG sản phẩm/Sofa/Sofa 3 chỗ Penny/1.jpg","Tên sản phẩm" => "Sofa 3 chỗ Penny", "Số lượng" => 1, "Giá (VNĐ)" => 6300000),
    );

    // Biến để tính tổng tiền
    $totalVND = 0;
    ?>
<div class="body-web">
    <div class="container pt-5">
        <table class="table table-hover">
            <thead>
                <tr style="font-size:20px;">
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                    <th><th>
                </tr>    
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td>
                        <div class="card" style="border: none;">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img  src="<?php echo $item["Ảnh sản phẩm"]; ?>" height="110px" width="115px">
                                </div>
                                <div class="col-md-4" style="margin-top: 30px;">
                                    <div class="card-body">
                                        <h5 style="color: rgb(87,87,87); font-weight: 350;"><?php echo $item["Tên sản phẩm"]; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div style="margin-top: 40px;">
                            <button class="btnDecrease">-</button>
                                <input style="width: 20px; text-align: center;" type="text" min="0" value="<?php echo $item["Số lượng"]; ?>" class="quantity">
                            <button class="btnIncrease">+</button>
                        </div>
                    </td>
                    <td><p style="margin-top: 40px;"><?php echo number_format($item["Giá (VNĐ)"]) . ' VNĐ'; ?></p></td>
                    <td><a class="fa-solid fa-trash" style="color: black; margin-top: 40px; text-direction:none;" href="#"></a></td>
                </tr>
                <?php
                // Tính tổng tiền cho từng sản phẩm và cộng vào tổng tiền chung
                $subtotalVND = $item["Số lượng"] * $item["Giá (VNĐ)"];
                $totalVND += $subtotalVND;
                ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div style="margin-left: 800px;">
            <div style="display: flex;justify-content: space-between;background-color:rgba(197, 198, 199, 0.741); width: 400px; height: 50px;padding:12px;">
                <p style="font-size: 18px; font-weight: 350;">TỔNG CỘNG<span id="totalAmount" style="margin-left: 100px;"><?php echo number_format($totalVND) . ' VNĐ'; ?></span></p>
            </div>
            <br>
            <a href="thanhtoan.php"><button class="btn btn-warning text-white" style="font-weight: 350; width: 400px;">XÁC NHẬN VÀ TIẾP TỤC</button></a>
        </div>
        <br>
    </div>
</div>
<script>
    // Lấy tất cả các phần tử input và nút tăng giảm
    var quantityInputs = document.querySelectorAll('.quantity');
    var btnDecrease = document.querySelectorAll('.btnDecrease');
    var btnIncrease = document.querySelectorAll('.btnIncrease');

    // Lặp qua các phần tử input và nút tăng giảm
    quantityInputs.forEach(function(input, index) {
        btnDecrease[index].addEventListener('click', function() {
            if (input.value > 0) {
                input.value--;
                updateTotal();
            }
        });

        btnIncrease[index].addEventListener('click', function() {
            input.value++;
            updateTotal();
        });

        input.addEventListener('change', updateTotal);
    });

    // Hàm cập nhật tổng tiền
    function updateTotal() {
        var total = 0;
        quantityInputs.forEach(function(input, index) {
            var quantity = parseInt(input.value);
            var price = <?php echo json_encode($items); ?>[index]["Giá (VNĐ)"];
            var subtotal = quantity * price;
            total += subtotal;
        });

        // Cập nhật tổng tiền vào phần tử có id "totalAmount"
        document.getElementById('totalAmount').textContent = total.toLocaleString() + ' VNĐ';
    }
</script>
<?php
    include './footerweb.php'
?>
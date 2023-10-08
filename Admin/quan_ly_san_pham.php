<head>
    <title>Quản lý sản phẩm</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
</head>

<body>
    <?php
        include './sidebar_quantri.php';
        include './connect.php';
        $sql = "SELECT*FROM san_pham";
        $products=mysqli_query($connect, $sql);
    ?>
    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2"><h5>Quản lý sản phẩm<h5></div>
                        <div class="p-2 ms-auto"><a href="themsanpham.php" class="btn btn-primary">Đăng</a></div>
                        <div class="p-2"><a href="xoasanpham.php" class="btn btn-danger" >Xóa</a></div>
                    </div>
                </div>
                <div class="accordion-body">
                <form class="form-inline" id="yw0" action="/quantri/economy/product/index" method="get">   
                    <input class="" placeholder="Tên sản phẩm" style="height:35px;" name="Product[name]" id="Product_name" type="text" maxlength="300" />    
                    <input class="" placeholder="Mã sản phẩm" style="max-width: 130px;height:35px;" name="Product[code]" id="Product_code" type="text" maxlength="50" />        
                    <select class="" name="Product[status]" id="Product_status" style="height:35px;">
                    <option value="" selected="selected">---Trạng thái---</option>
                    <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>
                    </select>    
                    <select class="" name="Product[state]" id="Product_state" style="height:35px;">
                    <option value="" selected="selected">---Tình trạng---</option>
                    <option value="1">Còn hàng</option>
                    <option value="0">Hết hàng</option>
                    </select>    
                    <select class="" name="Product[product_category_id]" id="Product_product_category_id" style="height:35px;">
                    <option value="" selected="selected">Danh mục sản phẩm</option>
                    <option value="53254">QUẠT TRẦN MỸ</option>
                    </select>    
                    <button class="btn bg-warning" type="submit" >Tìm kiếm</button>
                </form>
                <br>
                <table class="table table-bordered table-hover vertical-center">
                        <thead>
                            <tr>
                                <th class="checkbox-column"><input type="checkbox" value="1" /></th>
                                <th>&nbsp;</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Đã bán</th>
                                <th>Số lượng</th>
                                <th>Trạng thái</th>
                                <th>Lượt xem</th>
                                <th>Ngày đăng</th>
                                <th class="button-column">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($products as $product){ ?>
                                <tr>
                                    <td width="5"><input value="202886" id="product-grid_c0_0" type="checkbox"/></td>
                                    <td><img src="<?php echo($product['anh_thumbnail']) ?>" height="100px" /></td>
                                    <td><?php echo($product['id']) ?></td>
                                    <td><?php echo($product['ten_san_pham']) ?></td>
                                    <td><?php echo($product['gia_ban']) ?></td>
                                    <td>KHÓA THÔNG MINH</td>
                                    <td><?php echo($product['da_ban']) ?></td>
                                    <td><?php echo($product['so_luong']) ?></td>
                                    <td><?php
                                        if($product['hien_thi']=="co"){
                                            echo("Hiển thị");
                                        }
                                        else{
                                            echo("Ẩn");
                                        }
                                    ?></td>
                                    <td><?php echo($product['luot_xem']) ?></td>
                                    <td><?php echo($product['ngay_cap_nhat_san_pham']) ?></td>
                                    <td style="width: 100px;" align="center"><a class="fa-solid fa-magnifying-glass" href="#"></a>&ensp; 
                                    <a class="fa-solid fa-pen-to-square" href="suasanpham.php"></a>&ensp;<a class="fa-solid fa-trash" href="xoasanpham.php?id=<?php echo($product['id']) ?>"></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="./FrontEnd/style.js"></script>
</body>
<head>
    <title>Quản lý sản phẩm</title>
</head>

<body>
    <?php
        include './sidebar_quantri.php'
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
                    <th class="checkbox-column" id="product-grid_c0"><input type="checkbox" id="select-all"></th>
                    <th id="product-grid_cavatar">&nbsp;</th>
                    <th id="product-grid_c1">Mã sản phẩm</th>
                    <th id="product-grid_c2">Tên sản phẩm</th>
                    <th id="product-grid_cprice">Giá sản phẩm</th>
                    <th id="product-grid_cproduct_category_id">Danh mục</th>
                    <th id="product-grid_c3">Đã bán</th>
                    <th id="product-grid_c4">Số lượng</th>
                    <th id="product-grid_cstatus">Trạng thái</th>
                    <th id="product-grid_c5">Lượt xem</th>
                    <th id="product-grid_ccreated_time">Ngày đăng</th>
                    <th class="button-column" id="product-grid_c7">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td width="5"><input type="checkbox"  class="checkbox-item"></td>
                        <td><img src="https://hello.nanoweb.vn/mediacenter/media/images/945/products/945/30/s50_50/8-1570679331.jpg"/></td>
                        <td></td>
                        <td>DHI-ASL6101K</td>
                        <td>9.490.000</td>
                        <td>KHÓA THÔNG MINH</td>
                        <td>1</td>
                        <td>0</td>
                        <td>Hiển thị</td>
                        <td>2</td>
                        <td>27-09-2023</td>
                        <td style="width: 100px;" align="center"><a class="fa-solid fa-magnifying-glass" href="#"></a>&ensp; <a class="fa-solid fa-pen-to-square" href="suasanpham.php"></a>&ensp;<a class="fa-solid fa-trash" href="#"></a></td>
                    </tr>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <script src="./FrontEnd/style.js"></script>
</body>
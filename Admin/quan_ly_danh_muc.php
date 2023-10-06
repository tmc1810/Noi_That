<head>
    <title>Quản lý danh mục</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
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
                        <div class="p-2"><h5>Quản lý danh mục<h5></div>
                        <div class="p-2 ms-auto"><a href="themdanhmuc.php" class="btn btn-primary">Thêm</a></div>
                        <div class="p-2"><a href="xoadanhmuc.php" class="btn btn-danger" >Xóa</a></div>
                    </div>
                </div>
                <div class="accordion-body">
                    <table class="table table-bordered table-hover vertical-center">
                        <thead>
                            <tr>
                                <th id="news-categories-grid_cnumber">&nbsp;</th>
                                <th class="checkbox-column" id="product-grid_c0"><input type="checkbox" id="select-all"></th>
                                <th id="news-categories-grid_ccat_name">Tên danh mục</th>
                                <th id="news-categories-grid_cshowinhome">Hiển thị ở trang chủ</th>
                                <th id="news-categories-grid_cstatus" >Trạng thái</th>
                                <th id="news-categories-grid_ccat_order" >Thứ tự</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                            <td style="width: 50px; text-align: center;">1</td>
                            <td width="5"><input type="checkbox" class="checkbox-item"></td>
                            <td>QUẠT TRẦN MỸ</td>
                            <td style="width: 100px; text-align: center;">Có</td>
                            <td style="width: 100px;text-align: center;">Hiển thị</td>
                            <td style="width: 80px;"><input class="updateorder" style="width: 50px;" rel="/quantri/economy/productcategory/updateorder/id/53254" type="text" value="1" name="cat_order" id="cat_order" /></td>
                            <td style="width: 100px;" align="center"><a class="fa-solid fa-pen-to-square" href="suadanhmuc.php"></a>&emsp;<a class="fa-solid fa-trash" href="#"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="./FrontEnd/style.js"></script>
</body>
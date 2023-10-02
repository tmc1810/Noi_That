<head>
    <title>Quản lý hãng</title>
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
                        <div class="p-2"><h5>Thêm hãng<h5></div> 
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-horizontal" id="category-form" action="#" method="post">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tên hãng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
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
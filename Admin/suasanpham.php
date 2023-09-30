<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./FrontEnd/style.css">
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
                        <div class="p-2"><h5>Sửa sản phẩm<h5></div>
                        <div class="p-2 ms-auto">
                            <div class="control-group form-group buttons">
                                <input class="btn btn-primary" href="quan_ly_danh_muc.php" id="btnAddCate" type="submit" value="Lưu" />                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-horizontal" id="category-form" action="#" method="post">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Thông tin cơ bản</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Mô tả sản phẩm</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ảnh/video</button>
                        </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <br>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Danh mục</label>
                                    <div class="col-sm-10">
                                        <select class="span10 col-sm-12" style="height: 40px;" name="ProductCategories[status]" id="ProductCategories_status">
                                            <option value="1">Giường</option>
                                            <option value="2">Sofa</option>
                                        </select>  
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Hãng sản xuất</label>
                                    <div class="col-sm-10">
                                        <select class="span30 col-sm-12" style="height: 40px;" name="ProductCategories[status]" id="ProductCategories_status">
                                            <option value="1">Việt Nam</option>
                                            <option value="2">Mỹ</option>
                                        </select>  
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Số lượng</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" value="0">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Trạng thái</label>
                                    <div class="col-sm-10">
                                        <select class="span10 col-sm-12" style="height: 40px;" name="ProductCategories[status]" id="ProductCategories_status">
                                            <option value="1" selected="selected">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        </select>  
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Tình trạng</label>
                                    <div class="col-sm-10">
                                        <input id="ytProductCategories_showinhome" type="hidden" value="0" name="ProductCategories[showinhome]" />
                                        <input name="ProductCategories[showinhome]" id="ProductCategories_showinhome" value="1" type="checkbox" /> <i style="color: rgba(89, 89, 89, 0.503);">Chọn nếu còn hàng</i>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <br>
                                <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Mô tả vắn tắt</label>
                                    <div class="col-sm-10">
                                        <textarea class="span12 col-sm-12" style="height: 300px;" name="ProductInfo[product_sortdesc]" id="ProductInfo_product_sortdesc"></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Mô tả</label>
                                    <div class="col-sm-10">
                                        <textarea class="span12 col-sm-12" style="height: 300px;" name="ProductInfo[product_sortdesc]" id="ProductInfo_product_sortdesc"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                <br>  
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh sản phẩm</label>
                                    <div class="col-sm-10">
                                        <input class="btn bg-success text-white" type="button" value="Thêm ảnh" />    
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./bootstrap5/js/bootstrap.min.js"></script>
</body>
</html>
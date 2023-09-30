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
                        <div class="p-2"><h5>Sửa tài khoản<h5></div> 
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-horizontal" id="category-form" action="#" method="post">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tên truy cập</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                        <div class="col-sm-10">
                            <input type="repassword" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10">
                            <select class="span10 col-sm-12" style="height:40px; width: 100px;" name="ProductCategories[status]" id="ProductCategories_status">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>  
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Cấp bậc</label>
                        <div class="col-sm-10">
                            <select class="span10 col-sm-12" style="height:40px; width: 100px;" name="ProductCategories[status]" id="ProductCategories_status">
                                <option value="0">Quản trị</option>
                                <option value="1">Khách</option>
                            </select>  
                        </div>
                    </div>
                    <div class="control-group form-group buttons">
                        <input class="btn btn-primary" href="quan_ly_danh_muc.php" id="btnAddCate" type="submit" value="Sửa tài khoản" />                    
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
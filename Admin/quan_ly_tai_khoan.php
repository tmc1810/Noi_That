<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
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
                        <div class="p-2"><h5>Quản lý tài khoản<h5></div>
                        <div class="p-2 ms-auto"><a href="themtaikhoan.php" class="btn btn-primary">Thêm</a></div>
                        
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-inline" id="yw0" action="/quantri/useradmin/useradmin/index" method="get">
                        <input class="" placeholder="id" style="height:35px;" name="UsersAdmin[user_id]" id="UsersAdmin_user_id" type="text" />    
                        <input class="" placeholder="Tên truy cập" style="height:35px;" name="UsersAdmin[user_name]" id="UsersAdmin_user_name" type="text" maxlength="100" />    
                        <input class="" placeholder="email" style="height:35px;" name="UsersAdmin[email]" id="UsersAdmin_email" type="text" maxlength="100" />    
                        <select class="" name="UsersAdmin[sex]" id="UsersAdmin_sex" style="height:35px;">
                            <option value="" selected="selected">Giới tính</option>
                            <option value="0">Chưa xác định</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>    
                        <button class="btn bg-warning" type="submit" >Tìm kiếm</button> 
                    </form>
                    <br>
                    <table class="table table-bordered table-hover vertical-center">
                        <thead>
                        <tr>
                            <th id="users-grid_cnumber">&nbsp;</th>
                            <th id="users-grid_c0">id</th>
                            <th id="users-grid_c1">Tên truy cập</th>
                            <th id="users-grid_c2">email</th>
                            <th id="users-grid_csex">Giới tính</th>
                            <th id="users-grid_ccreated_time">Ngày tạo</th>
                            <th>Cấp bậc</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>1</td>
                                <td>3960</td>
                                <td>nam157</td>
                                <td>nam@gmail.com</td>
                                <td>Nam</td>
                                <td>27-09-2023</td>
                                <td>Quản trị</td>
                                <td style="width: 100px;" align="center"><a class="fa-solid fa-pen-to-square" href="suataikhoan.php"></a>&emsp;<a class="fa-solid fa-trash" href="#"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hãng</title>
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
                        <div class="p-2"><h5>Quản lý hãng<h5></div>
                        <div class="p-2 ms-auto"><a href="themhang.php" class="btn btn-primary">Thêm</a></div>
                        <div class="p-2"><a href="xoahang.php" class="btn btn-danger" >Xóa</a></div>
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-inline" id="yw0" action="/quantri/economy/product/index" method="get">   
                        <input class="" placeholder="Tên sản phẩm" style="height:35px;" name="Product[name]" id="Product_name" type="text" maxlength="300" /> 
                        <button class="btn bg-warning" type="submit" >Tìm kiếm</button>
                    </form>
                    <br>
                    <table class="table table-bordered table-hover vertical-center">
                        <thead>
                        <tr>
                            <th id="manufacturer-grid_cnumber">&nbsp;</th>
                            <th class="checkbox-column" id="manufacturer-grid_c0"><input type="checkbox" value="1" name="manufacturer-grid_c0_all" id="manufacturer-grid_c0_all" /></th>
                            <th id="manufacturer-grid_cavatar">&nbsp;</th><th id="manufacturer-grid_c1">Tên hãng</th>
                            <th id="manufacturer-grid_corder">Thứ tự</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                        <td width="30px">1</td>
                        <td width="30px"><input value="7388" id="manufacturer-grid_c0_0" type="checkbox" name="manufacturer-grid_c0[]" /></td>
                        <td width="60px;"></td><td>Việt nam</td><td width="80px" style="text-align:center;">0</td>
                        <td style="width: 100px;" align="center"><a class="fa-solid fa-pen-to-square" href="suahang.php"></a>&emsp;<a class="fa-solid fa-trash" href="#"></a></td>
                        </tr>
                        </tbody>
                    </table>
                     
                </div>
            </div>
        </div>
    </div>
</body>
</html>
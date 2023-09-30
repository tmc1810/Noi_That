<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
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
                        <div class="p-2"><h5>Quản lý đơn hàng<h5></div>
                        <div class="p-2 ms-auto"><button class="btn btn-danger">Xóa</button></div>
                        
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="search-active-form" style="position: relative; margin-top: 10px;">
                        <div class="form-search">
                            <form class="form-inline" id="yw0" action="/quantri/economy/order/index" method="get">    
                                <input class="" placeholder="Khách hàng" style="height:35px;" name="Orders[billing_name]" id="Orders_billing_name" type="text" maxlength="100" />
                                <input class="" placeholder="Từ ngày"  style="height:35px;" id="Orders_from_date" type="text" value="" name="Orders[from_date]" />
                                <input class="" placeholder="Đến ngày" style="height:35px;" id="Orders_to_date" type="text" value="" name="Orders[to_date]" />    
                                <button class="btn bg-warning" type="submit" >Tìm kiếm</button> 
                            </form>
                            <br>
                            <table class="table table-bordered table-hover vertical-center">
                                <thead>
                                <tr>
                                    <th class="checkbox-column" id="orders-grid_c0"><input type="checkbox" value="1" name="orders-grid_c0_all" id="orders-grid_c0_all" /></th>
                                    <th id="orders-grid_corder_id">#</th><th id="orders-grid_ccustomer">Khách hàng</th>
                                    <th id="orders-grid_cuser_id">&nbsp;</th><th id="orders-grid_ccreated_time">Thời gian tạo</th>
                                    <th id="orders-grid_corder_status">Trạng thái đơn hàng</th><th id="orders-grid_ctransport_status">Trạng thái vận chuyển</th>
                                    <th id="orders-grid_corder_total">Tổng cộng</th><th class="button-column" id="orders-grid_c1">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td width="5"><input value="20689" id="orders-grid_c0_0" type="checkbox" name="orders-grid_c0[]" /></td>
                                        <td>#20689</td><td>ádjapdsoj</td><td>Khách vãng lai</td><td>30-09-2023, 12:52:25</td><td>Chờ xử lý</td>
                                        <td>Chưa giao hàng</td><td><span class = "pricetext">9.490.000</span><span class = "currencytext">đ</span></td>
                                        <td style="width: 100px;" align="center"><a class="fa-solid fa-pen-to-square" href="#"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
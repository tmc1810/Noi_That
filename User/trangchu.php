<?php
    include_once 'connect.php'; // nạp file kết nối database để truy suất dữ liệu
?>
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="cssweb.css">
    <title>TMC INTERIOR</title>
</head>
<body>
    <header class="navbar navbar-expand-lg bg-body-tertiary" id="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" alt="Logo" width="120" height="80" class="d-inline-block align-text-top">
            </a>
            
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="trangchu.php">TRANG CHỦ</a></li>
                <li class="nav-item"><a class="nav-link" href="sanpham.php">SẢN PHẨM</a></li>
                <li class="nav-item"><a class="nav-link" href="gioithieu.php">GIỚI THIỆU</a></li>
                <li class="nav-item"><a class="nav-link" href="lienhe.php">LIÊN HỆ</a></li>
            </ul>

            <ul class="nav justify-content-end">
                <li><a class="fa-solid fa-magnifying-glass" href="#"></a></li>
                <li><a class="fa-solid fa-cart-shopping" href="giohang.php"></a></li>
                <li><a class="fa-regular fa-user" href="thongtintaikhoan.php"></a></li>
            </ul>
          </div>
        </div>
    </header>
    
    <div class="body-web">
        <ul>
            <li>
                <div class="title">
                    <p class="tmc">TMC </p> 
                    <p> I N T E R I O R</p> 
                </div>
                <img src="./img/background1.jpg" width="100%">
            </li>
            <li>
                <div class="main-gioithieu">
                    <div class="main-title">
                        <div>
                            <h3>
                                <span>01</span>
                                <span class="hello">GIỚI THIỆU</span>
                                <hr>
                            </h3>
                            <h6>
                                WHO WE ARE
                                <hr>
                            </h6>
                        </div>
                        <div class="comment">
                            <h2>Công ty TNHH Nội Thất TMC Interior là doanh nghiệp chuyên sản xuất, kinh doanh các sản phẩm nội thất bằng gỗ. Kể từ khi thành lập đến nay, cùng với những nỗ lực không ngừng trong quá trình sản xuất kinh doanh, Luôn đặt lợi ích của khách hàng làm tiêu chí hoạt động. Công ty đã tạo cho mình được chỗ đứng vững chắc, được khách hàng tín nhiệm. Cùng với đội ngũ nhân viên giỏi về chuyên môn, năng động trong công việc. TMC Interior hứa hẹn sẽ mang đến sự hài lòng cho quý khách.</h2>
                        </div>

                        <button class="btn btn-warning"><a class="click" href="#">Tìm hiểu thêm</a></button>

                        <div class="menu-list">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <h1>10</h1>
                                    <h7 style="color:#FFF;">Hơn 10 năm kinh</h7><br>
                                    &emsp;<h7 style="color:#FFF;">nghiệm trong</h7><br>
                                    &emsp;&emsp;&ensp;<h7 style="color:#FFF;">ngành</h7>
                                </li>

                                </li>
                                <li class="nav-item">
                                    <h1>20</h1>
                                    <h7 style="color:#FFF;">Hơn 10 năm kinh</h7><br>
                                    &emsp;<h7 style="color:#FFF;">nghiệm trong</h7><br>
                                    &emsp;&emsp;&ensp;<h7 style="color:#FFF;">ngành</h7>
                                </li>

                                </li>
                                <li class="nav-item">
                                    <h1 style="margin-left: 2px;">88%</h1>
                                    <h7 style="color:#FFF;">Hơn 10 năm kinh</h7><br>
                                    &emsp;<h7 style="color:#FFF;">nghiệm trong</h7><br>
                                    &emsp;&emsp;&ensp;<h7 style="color:#FFF;">ngành</h7>
                                </li>
                            </ul>
                        </div>

                        <div class="img-title">
                            <img src="./img/hehe.jpg" width="450px" height="550px">
                        </div>
                    </div>
                </div>
                   <img src="./img/background2.jpg" width="100%" height="1000px">
            </li>
            <li>
                <div class="main-view">
                    <div class="view-title">
                        <div>
                            <h3>
                                <span class="hello">SẢN PHẨM</span>
                                <span style="margin-left:50px;">02</span>
                                <hr>
                            </h3>
                            <h6>
                                <hr>
                            </h6>
                        </div>
                    </div>
                    <div class="row" style="margin-top:300px; margin-left: 600px;">
                        <?php 
                            $sql = "SELECT * FROM danh_muc";
                            $result = $conn->query($sql);// đây là phần thực hiện truy vấn
                            if ($result->num_rows > 0) { // nếu dữ liệu có thì ta sử dụng while để duyệt qua từng hàng (có thể sử dụng foreach)
                                $count = 0; // Đếm sản phẩm đã hiển thị
                                while ($row = $result->fetch_assoc()) { 
                                    if ($count % 3 == 0 && $count != 0) { // Đóng hàng sau khi hiển thị 3 sản phẩm
                                        echo '</div><div class="row" style="margin-left: 600px;" >';
                                    }
                        ?>
                            <div class="item col-4" >
                                <div>
                                    <a href='sanpham.php?ID_DM=<?=$row["id"]?>'> <img style="width:360px"; src="<?=$row["img_danh_mục"]?>" alt="anh <?=$row["ten_danh_muc"]?>"></a>
                                </div>
                                <div class="item_content">
                                    <h3><?=$row["ten_danh_muc"]?></h3>
                                </div>
                            </div>
                        <?php
                            $count++;
                        }
                            } else {
                                echo "Không có dữ liệu.";
                            }
                        ?>
                    </div>
                </div>
                <img src="./img/background3.png" width="100%" height="1000px">
            </li>
        </ul>
        
    </div>
<?php
include './footerweb.php'
?>
    <script src="style.js"></script>
</body>
</html>
<?php
    include_once 'connect.php'; // nạp file kết nối database để truy suất dữ liệu
?>
<?php
    include './navbarweb.php'
?>
<div class="body-web">
<div class="sanpham mt-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <!-- danhmucsanpham-->
                    <div class="danhmucsp">
                        <h3 style="font-size: 20px;color: #575757;font-weight: 700;">DANH MỤC SẢN PHẨM</h3>
                        <hr style="width: 70px; opacity: 5;">
                        <ul style="list-style: none;background-color: #F9F9F9;padding: 20px;">
                        <?php 
                        $sql = "SELECT * FROM danh_muc";
                        $result = $conn->query($sql);// đây là phần thực hiện truy vấn
                        if ($result->num_rows > 0) { // nếu dữ liệu có thì ta sử dụng while để duyệt qua từng hàng (có thể sử dụng foreach)
                            while ($row = $result->fetch_assoc()) 
                        { // Sử dụng biến $row 
                    ?>
                            <li style="line-height: 2.5;"><a style="text-decoration: none; padding: 12px; font-size: 18px; color: #575757;" href='trangsanpham.php?ID_DM=<?=$row["id"]?>'><?=$row["ten_danh_muc"]?></a></li>
                            <?php
                            }
                            } else {
                                echo "Không có dữ liệu.";
                            }
                        ?>
 
                           
                        </ul>

                    </div>
                    <!-- sanphambanchay -->
                    <div class="spbanchay">
                        <h3 style="font-size: 20px;color: #575757;font-weight: 700;margin-top: 50px;">SẢN PHẨM BÁN CHẠY</h3>
                        <hr style="width: 70px; opacity: 5;">
                        <div class="listspbanchay d-flex ">
                            <a href="#" ><img src="https://cdn.nanoweb.vn/mediacenter/media/images/945/products/945/1/s100_100/bgd-1809tresult-1569924272.png" alt="ghế xanh"></a>
                           <div>
                                <p><a href="#" style="text-decoration: none; color: black;">Ghế lưới xanh 12.000.000 Đ </a></p> 
                                <p><i style="color: #757575;">(Mã sản phẩm BV9917)</i></p>
                                <p style="color:red">300.000Đ</p>
                           </div>
                            
                        </div>
                        <div class="listspbanchay d-flex">
                            <a href="#"><img src="https://cdn.nanoweb.vn/mediacenter/media/images/945/products/945/1/s100_100/6-bgd2410f5result-1569924226.jpg" alt=""></a>
                            
                            <div>
                                <p> <a href="#" style="text-decoration: none; color: black;">Ghế lưới xanh 12.000.000 Đ </a></p> 
                                <p><i style="color: #757575;">(Mã sản phẩm BV9917)</i></p>
                                <p style="color:red">300.000Đ</p>
                           </div>
                        </div>
                    </div>
                </div>

                <!-- sanpham right -->
                <div class="col">
                    <!-- sanpham1 -->

                    <div id ="cars">
                        <select >
                            <option value="selected" selected>Sắp xếp theo</option>
                            <option value="saab">Giá tăng dần</option>
                            <option value="vw">Giá giảm dần</option>
                            <option value="audi">Tên sản phẩm A-Z</option>
                          </select>
                    </div>


                <div class="row mt-4 d-flex">
                        
                    <?php 
                     if(isset($_GET['Search'])) {
                        $search = $_GET['Search'];
                        $sql = "SELECT * FROM san_pham WHERE ten_san_pham  like '%$search%'";                     
                    }else if(isset($_GET['ID_DM']))
                    {
                        $sql = "SELECT * FROM san_pham WHERE ma_danh_muc = " .$_GET["ID_DM"];
                    }else
                    
                    {
                        $sql = "SELECT * FROM san_pham";
                    }
                        $result = $conn->query($sql);// đây là phần thực hiện truy vấn
                        if ($result->num_rows > 0) { // nếu dữ liệu có thì ta sử dụng while để duyệt qua từng hàng (có thể sử dụng foreach)
                            while ($row = $result->fetch_assoc()) 
                        { // Sử dụng biến $row 
                    ?>
                        <div class="col-4">
                            <a href='trangchitietsp.php?ID=<?=$row["id"]?>'><img class="imgsp" src="<?=$row["anh_thumbnail"]?>" alt="anh <?=$row["ten_san_pham"]?>"></a>
                            <p><?=$row["ten_san_pham"]?></p>
                            <p style="color:red"><?=$row["gia_ban"]?></p>
                        </div>
                        <?php
                            }
                            } else {
                                echo "Không có dữ liệu.";
                            }
                        ?>

                       
                </div>
                

            </div>
        </div>
    </div>
     </div>
</div>
<?php
    include './footerweb.php'
?>
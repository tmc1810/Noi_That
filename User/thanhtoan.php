<?php
    include './navbarweb.php'
?>
<div class="body-web">
    <div class="container-sm pt-5 border">
        <div style="width: 600px; padding-bottom: 20px;">
            <h4>THÔNG TIN KHÁCH HÀNG</h4>
            <hr style="margin-top:-5px;height:3px;background-color: rgb(0,0,0);">
            <input style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;" type="text" placeholder="Vui lòng nhập họ tên"><br>
            <input style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;" type="text" placeholder="Vui lòng nhập email"><br>
            <input style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;" type="text" placeholder="Vui lòng nhập số điện thoại"><br>
            <select style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;" id="city">
            <option value="" selected>Chọn tỉnh thành</option>           
            </select>
                    
            <select style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;" id="district">
            <option value="" selected>Chọn quận huyện</option>
            </select>

            <select style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;" id="ward">
            <option value="" selected>Chọn phường xã</option>
            </select>
            <input style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;" type="text" placeholder="Vui lòng nhập địa chỉ"><br>
            <input style="border: none; outline: none; border-bottom: 1px solid #adadad; width: 100%;height:300px;" type="text" placeholder="Ghi chú" >
        </div>
        <h3>Phương thức vận chuyển</h3>
        <div style="font-size: 18px;">
            <input type="radio">
            <label> Giao hàng toàn quốc</label>
            <br>
            <input type="radio">
            <label> Giao hàng nội địa</label>
        </div>
        <br>
        <a href="#"><button class="btn btn-warning text-white" style="font-weight: 700; width: 200px;">ĐẶT MUA</button></a>
    </div>
</div>
<div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
var citis = document.getElementById("city");
var districts = document.getElementById("district");
var wards = document.getElementById("ward");
var Parameter = {
  url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
  method: "GET", 
  responseType: "application/json", 
};
var promise = axios(Parameter);
promise.then(function (result) {
  renderCity(result.data);
});

function renderCity(data) {
  for (const x of data) {
    citis.options[citis.options.length] = new Option(x.Name, x.Id);
  }
  citis.onchange = function () {
    district.length = 1;
    ward.length = 1;
    if(this.value != ""){
      const result = data.filter(n => n.Id === this.value);

      for (const k of result[0].Districts) {
        district.options[district.options.length] = new Option(k.Name, k.Id);
      }
    }
  };
  district.onchange = function () {
    ward.length = 1;
    const dataCity = data.filter((n) => n.Id === citis.value);
    if (this.value != "") {
      const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

      for (const w of dataWards) {
        wards.options[wards.options.length] = new Option(w.Name, w.Id);
      }
    }
  };
}
</script>
<?php
    include './footerweb.php'
?>
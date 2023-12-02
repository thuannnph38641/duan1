<style>
    th {
        background-color: yellowgreen !important;
        color: black !important;
    }
    table td {
        font-size: 18px;
        border: 1px solid gray !important;
        color: black !important;
    }
    table th,
    table td {
        border: 1px solid gray;
    }
    table {
        position: relative;
        left: 100px;
    }
    h6 {
        color: black;
        margin-top: 10px;
        margin-left: 100px;
    }
    .giohang input {
        width: 180px;
        height: 25px;
        font-size: 14px;
        font-weight: 600;
        background-color: red;
        border: 1px solid gray;
        color: white;
        text-align: center;
    }
    form table td a :nth-child(1){
    width: 50px;
    background-color: yellowgreen;
    border: 1px solid white;
    height: 30px;
  }
</style>

<main>
    <form action="index.php?act=hoadon" method="post">
        <div class="thongtin">
            <table>
                <tr>
                    <th>Thông tin của bạn</th>
                </tr>
                <?php
               

                if (isset($_SESSION['taikhoan'])) {
                    $name = $_SESSION['taikhoan']['user'];
                    $email = $_SESSION['taikhoan']['email'];
                    $address = $_SESSION['taikhoan']['address'];
                    $tel = $_SESSION['taikhoan']['tel'];
                } else {
                    $name = "";
                    $email = "";
                    $address = "";
                    $tel = "";
                }
                ?>
                <tr>
                    <td>
                        <label for="name">Tên đăng nhập</label>
                        <input type="text" name="name" id="name" value="<?= $name ?>"><br>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?= $email ?>"><br>
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" value="<?= $address ?>"><br>
                        <label for="tel">Số điện thoại</label>
                        <input type="text" name="tel" id="tel" value="<?= $tel ?>">
                    </td>
                </tr>
            </table>
            
            <table>
                <tr>
                    <th>Phương thức thanh toán</th>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="pttt" id="pttt1">Trả tiền khi thanh toán
                        <input type="radio" name="pttt" id="pttt2">Thanh toán qua ngân hàng
                        <input type="radio" name="pttt" id="pttt3">Thanh toán online
                    </td>
                </tr>
            </table>
        </div>
        <div class="giohang">
            <h6>Chi tiết đơn hàng</h6>
            <table>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên SP</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                $img_path1 = ""; // Thay bằng đường dẫn hợp lệ
                $tong = 0;
                $i = 0;
                foreach ($_SESSION['giohang'] as $gh) {
                    $img = $img_path1 . $gh[2];
                    $ttien = $gh[4] * $gh[3];
                    $tong += $ttien ;
                    $xoagh = '<a href="index.php?act=xoagh&idgh=' . $i . '"><input type="button" value="Xóa"></a>';
                    $i += 1;
                ?>
                    <tr>
                        <td><img src="<?= $img ?>" alt="" width="130px" height="110px"></td>
                        <td><?= $gh[1] ?></td>
                        <td><?= $gh[3] . '$' ?></td>
                        <td><?= $gh[4] ?></td>
                        <td><?= $ttien . '$' ?></td>
                        <td><?= $xoagh ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="4">Tổng</td>
                    <td colspan="2"><?= $tong . '$' ?></td>
                </tr>
            </table><br>
            <input type="submit" name="dongydathang" value="Đồng ý đặt hàng">
        </div>
    </form>
   
</main>

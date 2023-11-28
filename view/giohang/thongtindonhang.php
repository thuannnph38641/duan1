<style>
    th{
    background-color: yellowgreen !important;
    color: black !important;

    }
    table td{
        font-size: 18px;
        border: 1px solid gray !important ;
        color: black !important;
        
    }
    table th, table td{
        border: 1px solid gray ; 
    }
    table{
        position: relative;
        left: 100px;
    }
    h6{
        color: black;
        margin-top: 10px;
        margin-left: 100px;

    }
    .giohang input {
        width: 180px;
        height:25px ;
        font-size: 14px;
        font-weight: 600;
        background-color: red;
        border: 1px solid gray;
        color: white;
        text-align: center;
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
                    if(isset($_SESSION['taikhoan'])){
                        $name = $_SESSION['taikhoan']['user'];
                        $email = $_SESSION['taikhoan']['email'];
                        $address = $_SESSION['taikhoan']['address'];
                        $tel = $_SESSION['taikhoan']['tel'];
                    }else{
                        $name ="";
                        $email ="";
                        $address = "";
                        $tel = "";
                    }
                    ?>
                    <tr>
                            <td>
                                <label for="">Tên đăng nhập</label> 
                                    <input type="text" name="name" value="<?= $name ; ?>"><br>
                                    <label for="">Email   </label>
                                    <input type="email" name="email" value="<?= $email ; ?>"><br>
                                    <label for="">Địa chỉ</label>
                                    <input type="text" name="address" value="<?= $address ; ?>"><BR>
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="tel" value="<?= $tel ; ?>">
                            </td>
                        
                    </tr>
                    
                </table>
                <table>
                    <tr>
                        <th>Phương thức thanh toán</th>
                    </tr>
                    <tr>
<td>
    <input type="radio" name="pttt" >Trả tiền khi thanh toán
    <input type="radio" name="pttt">Thanh toán qua ngân hàng
    <input type="radio" name="pttt">Thanh toán online
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
                 global $img_path1;
                $tong = 0;
                $i = 0 ;
                foreach($_SESSION['giohang'] as $gh){
                    $img = $img_path1.$gh[2];
                    $ttien = $gh[3] * $gh[4];
                    $tong += $ttien ;
                    $xoagh = '<a href="index.php?act=xoagh&idgh='.$i.'"><input type="button" value="Xoa"></a>';
                
                    
                $i += 1 ;
                ?>
                <tr>
                    
                    <td><img src="<?= $img ?>" alt="" width="130PX" height="110px"></td>
                    <td><?=$gh[1] ?></td>
                    <td><?=$gh[3].'$' ?></td>
                    <td><?=$gh[4] ?></td>
                    <td><?=$ttien.'$' ?></td>
                    <td><?= $xoagh ?></td>
                </tr>
                <?PHP } ?>
                <!-- <tr>
                    <td>2</td>
                    <td><img src="./img/manunited.png" alt="" width="130PX" height="110px"></td>
                    <td>Áo quần thi đấu Manchester United</td>
                    <td>250.000 VNĐ</td>
                    <td>1</td>
                    <td>250.000 VNĐ</td>
                    <td><BUTton>Xóa</BUTton></td>
                </tr> -->
                <tr>
                    <td colspan="5">Tổng</td>
                    <td colspan="2"><?=$tong.'$' ?> </td>
                </tr>
            </table><br>
            <input type="submit" name="dongydathang" value="Dong y dat hang">
        </div>
        </form>

            

       
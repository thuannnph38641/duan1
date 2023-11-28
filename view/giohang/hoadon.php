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
    ul li{
        list-style: none;
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
            <div class="hoadon">
                <table>
                </table>
                <table>
                    <?Php 
                    if(isset($hoadon) && (is_array($hoadon) )){
                        extract($hoadon);  
                        $ptttdh = get_pttt($hoadon['hd_pttt']);
                    }
                    ?>
                    <tr>
                        <th>Dơn hàng</th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li>Cam on ban da dat hang</li>
                                <li>Ma don hang cua ban la :#MAM-<?= $hoadon['id']?></li>
                                <li>Ngay dat hang:<?= $hoadon['ngaydathang']?></li>
                                <li>Tong:<?= $hoadon['tong']?></li>
                            </ul>
                            
                        </td>
                    </tr>
                </table>
            </div>
            <div class="thongtin">
                <table>
                    <tr>
                        <th>Thông tin của bạn</th>
                    </tr>
                    <tr>
                            <td>
                                <label for="">Tên đăng nhập</label> 
                                    <input type="text" value="<?= $hoadon['hd_name']?>"><br>
                                    <label for="">Email   </label>
                                    <input type="email" value="<?= $hoadon['hd_email']?>"><br>
                                    <label for="">Địa chỉ</label>
                                    <input type="text" value="<?= $hoadon['hd_address']?>"><BR>
                                    <label for="">Số điện thoại</label>
                                    <input type="text" value="<?= $hoadon['hd_tel']?>">
                            </td>
                        
                    </tr>
                    
                </table>
                <table>
                    <tr>
                        <th>Phương thức thanh toán</th>
                    </tr>
                    <tr>
<td>
    <p><?= $ptttdh ?></p>
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
                    
                </tr>
                <?php
                giohang_ct($giohang);
                ?>
            </table>
            
        </div>
            
            

        </main>
<style>
  th{
    background-color: yellowgreen !important;

    }
    table td{
        font-size: 18px;
        border: 1px solid gray !important ;
        
    }
    table th, table td{
        border: 1px solid gray ; 
    }
    table{
        position: relative;
        left: 100px;
    }
    .giohang a input {
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
        <div class="giohang">
            <p>Giỏ hàng</p>
           
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
                    $xoagh = '<a href="index.php?act=xoagh&idgh='.$i.'"><input type="button" value="Xoa" width="100px" height="25px" ></a>';
                
                    
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
            </table><BR>
            <a href="index.php?act=thongtinhd"><input type="button" name="dathang" value="Tien hanh dat hang"></a>
        </div>
            
        <h2>SẢN PHẨM CÙNG LOẠI</h2>
            <hr>
            <DIV class="sanpham2">
                
                <div class="cungloai">
                    <?php foreach($spcl as $sp){
                        extract($sp);
                        $img = $img_path.$img ;
                        $linksp="index.php?act=sanphamct&idsp=".$id;                       
                        ?>
                    <div class="spcl">
                        <a href=""><img src="<?= $img?>" alt="" srcset=""></a>
                        <div class="tensp">
                        <a href="<?= $linksp?>"><p><?= $name?></p></a>
                        <p><?='Giá:'. $price .'$'?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="spcl">
                        <a href=""><img src="./img/chelsea.png" alt="" srcset=""></a>
                        <div class="tensp">
                            <p>Tên sản phẩm</p>
                            <p>Giá</p>
                        </div>
                    </div>
                    <div class="spcl">
                        <a href=""><img src="./img/bayen.png" alt="" srcset=""></a>
                        <div class="tensp">
                            <p>Tên sản phẩm</p>
                            <p>Giá</p>
                        </div>
                    </div>
                    <div class="spcl">
                        <a href=""><img src="./img/brenford.png" alt="" srcset=""></a>
                        <div class="tensp">
                            <p>Tên sản phẩm</p>
                            <p>Giá</p>
                        </div>
                    </div>
                    <div class="spcl">
                        <a href=""><img src="./img/bvb.png" alt="" srcset=""></a>
                        <div class="tensp">
                            <p>Tên sản phẩm</p>
                            <p>Giá</p>
                        </div>
                    </div>
                    <div class="spcl">
                        <a href=""><img src="./img/roma.png" alt="" srcset=""></a>
                        <div class="tensp">
                            <p>Tên sản phẩm</p>
                            <p>Giá</p>
                        </div>
                    </div> -->
                </div>
                <div class="danhmuc">
                    <div class="spdm">
                        <h3>Danh Mục</h3>
                        <?php
                        foreach($dsdm as $dm){
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=". $id;
                        ?>
                        <a href="<?= $linkdm ?>"><p><?= $name ?></p></a>
                        
                        <?php } ?>
                    </div>
                    
                </div>

            </DIV>
            

        
            

        
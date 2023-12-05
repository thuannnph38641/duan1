<style>
    td{
        padding: 0 40px;
       position: relative;
       
       top: 20px;
    }
    table th{
        border: 1px solid white;
        position: relative;
        padding: 0 40px;
       
       
    }
    .contentanh form input{
        width: 180px;
        height:25px ;
        font-size: 14px;
        font-weight: 600;
        background-color: red;
        border: 1px solid gray;
        color: white;

    }
    .contentanh form input:nth-child(5){
        width: 70px;
        background-color: white;
        color: black;
        text-align: center;
        position: relative;
        top: -22px;
    }
    .contentanh form input:nth-child(8){
        position: relative;
        top: -30px;
        co
    }
    .sp-content-item>a{
        text-decoration: none;
        color: blue !important;
        font-size: 18px;
        font-weight: 600;
    }
    .binhluan{
        width: 500px;
    }
    .sp-content-item a{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .anhct>img{
        border-radius: 10px;
        
    }
</style>
<main>
            <div class="spct">
                <div class="tenspct">
                    <p>CHI TIẾT SẢN PHẨM</p>
                </div>
                
                <div class="boxct">
                    <?php
                    extract($sanpham);
                    $img = $img_path.$img;
                    ?>
                    <div class="anhct">
                        <img src="<?= $img ?>" alt="">
                    </div>
                    <div class="contentanh">
                        <p><?= $name ?></p>
                        <p><?= 'Giá:'. $price.'$' ?></p>
                        <p><?= $mota ?></p><br><br>
                        Số lượng:
                        <form action="index.php?act=addgiohang" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="name" value="<?= $name ?>">
                            <input type="hidden" name="img" value="<?= $img ?>">
                            <input type="hidden" name="price" value="<?= $price ?>">
                            <input type="number" name="soluong" value="1" min = 1> <br><br>
                            <input type="submit" name="themgiohang" value="Thêm vào giỏ hàng">
                        </form>
                    </div>

                    <div class="spcl1">
                        <p>SẢN PHẨM CÙNG LOẠI </p>
                        <hr>
                        <?php 
                        foreach($sanphamcl as $sp){
                            extract($sp);
                            $img = $img_path.$img;
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                        
                        ?>
                        <div class="sp-items">
                            <div class="sp-item">
                                <img src="<?= $img ?>" alt="">
                            </div>
                            <div class="sp-content-item">
                                <a href="<?= $linksp ?>"><p><?= $name ?></p></a>
                                <p><?='Giá:'. $price .'$'?></p>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="sp-items">
                            <div class="sp-item">
                                <img src="./img/aleticomarid.png" alt="">
                            </div>
                            <div class="sp-content-item">
                                <p>Quần áo thi đấu Beyern Muich mua giải 2023-2024</p>
                                <p>Giá: 220.000VNĐ</p>
                            </div>
                        </div>
                        <div class="sp-items">
                            <div class="sp-item">
                                <img src="./img/bvb.png" alt="">
                            </div>
                            <div class="sp-content-item">
                                <p>Quần áo thi đấu Beyern Muich mua giải 2023-2024</p>
                                <p>Giá: 220.000VNĐ</p>
                            </div>
                        </div>
                        <div class="sp-items">
                            <div class="sp-item">
                                <img src="./img/chelsea.png" alt="">
                            </div>
                            <div class="sp-content-item">
                                <p>Quần áo thi đấu Beyern Muich mua giải 2023-2024</p>
                                <p>Giá: 220.000VNĐ</p>
                            </div>
                        </div>
                        <div class="sp-items">
                            <div class="sp-item">
                                <img src="./img/bayen.png" alt="">
                            </div>
                            <div class="sp-content-item">
                                <p>Quần áo thi đấu Beyern Muich mua giải 2023-2024</p>
                                <p>Giá: 220.000VNĐ</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <h4>Bình Luận/Đánh Giá</h4>
            <div class="binhluan">
                <div class="userbl">
                <table>
                    <tr>
                        <th>USER</th>
                        <th>NỘI DUNG</th>
                        <th>NGÀY</th>
                    </tr>
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                    <td><?php echo $value['user']?></td>
                        <td><?php echo $value['noidung']?></td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                </div>

            </div>
            <div class="box_search">
                <form action="index.php?act=sanphamct&idsp=<?=$idSp?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$idSp?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>
        </main>
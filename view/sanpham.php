<style>
    .product-item a {
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
</style>
        <main>
            <div class="maincontainer">
                
            </div>
            <div class="product">
                <h1>PHỔ BIẾN</h1>
                <hr>
                <div class="production">
                    <?php 
                    foreach ($dssp as $sp) {
                        extract($sp);

                        $img = $img_path.$img;
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                    ?>
                    <div class="product-item">
                        <img src="<?= $img?>" alt="">
                        <div class="content">
                            <a href="<?= $linksp?>"><p><?= $name?></p></a>
                            <p><?='Giá:'. $price .'$'?></p>
                           
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="product-item">
                        <img src="./img/tuyenanh.jpg" alt="">
                        <div class="content">
                            <p>Tên</p>
                            <p>Giá</p>
                            <button>Mua Ngay</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="./img/italya.jfif" alt="">
                        <div class="content">
                            <p>Tên</p>
                            <p>Giá</p>
                            <button>Mua Ngay</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="./img/braxil.png" alt="">
                        <div class="content">
                            <p>Tên</p>
                            <p>Giá</p>
                            <button>Mua Ngay</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="./img/tuyenphap.jpg" alt="">
                        <div class="content">
                            <p>Tên</p>
                            <p>Giá</p>
                            <button>Mua Ngay</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="./img/tuyenduc.jpg" alt="">
                        <div class="content">
                            <p>Tên</p>
                            <p>Giá</p>
                            <button>Mua Ngay</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="./img/tuyenanh.jpg" alt="">
                        <div class="content">
                            <p>Tên</p>
                            <p>Giá</p>
                            <button>Mua Ngay</button>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="./img/tuyenanh.jpg" alt="">
                        <div class="content">
                            <p>Tên</p>
                            <p>Giá</p>
                            <button>Mua Ngay</button>
                        </div>
                    </div> -->
                </div>
            </div>
            <?php 
            include 'view/cungloai.php';?>

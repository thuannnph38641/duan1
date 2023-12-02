<style>
    .product-item a {
        text-decoration: none;
        color: black;
        font-weight: 600;
    }
    .product-item{
        border: 1px solid white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .product-item p:nth-child(2) {
        margin-right: 200px;
    }
    .content{
        margin-left: 20px;
    }
</style>
        <main>
            <div class="maincontainer">
                <div class="banner">
                    <?php foreach($banner as $bner){
                        extract($bner);
                        $img = $img_path.$img;
                    ?>
                    <div class="myslide">
                        <img src="<?= $img?>" >
                    </div>
                    <?PHP } ?>
                    <!-- <div class="myslide">
                        <img src="./img/banner2.jfif" alt="" srcset="">
                    </div>
                    <div class="myslide">
                        <img src="./img/banner3.jfif" alt="" srcset="">
                    </div>
                    <div class="myslide">
                        <img src="./img/banner4.jfif" alt="" srcset="">
                    </div>
                    <div class="myslide">
                        <img src="./img/banner5.jpg" alt="" srcset="">
                    </div> -->
                    <button class="pre" onclick="pre(-1)">&#10094;</button>
                    <button class="next" onclick="next(1)">&#10095;</button>
                </div>
            </div>
            <div class="product">
                <h2>PHỔ BIẾN</h2>
                <div class="production">
                    <?php 
                    foreach ($spnew as $sp) {
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

<style>
    .spcl p {        
        color: black;
        font-weight: 600;
    }
    .spcl{
    width: 200px;  
}
.cungloai{
    padding: 0 40px;
    position: relative;
    right: 50px;

}
.danhmuc{
    width: 330px;
    position: relative;
    right: 20px;
    border: 2px solid gray;

}
.spdm a{
text-decoration: none;
font-size: 20px;
font-weight: 600;

}
</style>
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
                        <a href="<?= $linksp?>"><img src="<?= $img?>" alt="" srcset=""></a>
                        <div class="tensp">
                        <p><?= $name?></p>
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
            

        </main>
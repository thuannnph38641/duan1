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
    right: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}
.danhmuc{
    width: 330px;
    position: relative;
    border: 2px solid gray;
    left: 30PX;

}
.spdm{
    margin-top: 15px;
}
h3{
    margin-top: -10px;
}
.spdm a{
text-decoration: none;
font-size: 16px;
font-weight: 600;
color: blue;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;


}
h2{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>
<h2>SẢN PHẨM YÊU THÍCH</h2>
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
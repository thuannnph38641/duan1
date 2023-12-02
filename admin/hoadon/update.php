<?php
foreach($hoadon as $hd) {
    extract($hoadon);
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT TRẠNG THÁI ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatehd&idhd=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>           
            <div class="row2 mb10">
                <label>TRẠNG THÁI</label> <br>
                <p>Nhập số để cập nhật đơn</p>
                <p>0.Đơn hàng mới</p>
                <p>1.Đang xử lý</p>
                <p>2.Đang giao</p>
                <p>3.Đã hoàn thành</p>
                <input type="text" name="trangthai" value="<?php echo $trangthai; ?>">
            </div>
            
            <div class="row mb10 ">
                <input type="submit" class="mr20" name="capnhat" value="Cập nhật">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=hoadon"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
        <?php 
        if(isset($thongbao8)&& $thongbao8!= "") {
            echo $thongbao8;
        }
        ?>
    </div>
</div>
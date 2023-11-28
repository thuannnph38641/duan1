<style>
    hr {
        width: 1500px;
        margin: auto;
    }
</style>
<?php
if (is_array($sanpham)) {
    extract($sanpham);

    // echo "<pre>";
    // print_r($sanpham);
    // die;

}

$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinhpath = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
} else {
    $hinhpath = "Lỗi";
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>UPDATE SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Danh mục </label> <br>
                <select name="iddm" id="">
                    <option value="0">Tất cả</option>
                    <?php foreach ($listdanhmuc as $key => $value) {

                        if ($iddm == $value['id']) {?>

                            <option value="<?php echo $value['id'] ?>" selected><?php echo $value['name']; ?></option>

                        <?php }

                        else{?>

                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
                        
                        <?php }?>
                        <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <hr>
            <div class="row2 mb10 form_content_container">
                <label> Tên sản phẩm </label> <br>
                <input type="text" name="tensanpham" value="<?php echo $name; ?>">
                <span style="color: red;"><?php echo isset($error['tensanpham']) ? $error['tensanpham'] : ""; ?></span>
            </div>
            <hr>
            <div class="row2 mb10">
                <label>Giá sản phẩm </label> <br>
                <input type="text" name="price" value="<?php echo $price; ?>">
                <span style="color: red;"><?php echo isset($error['price']) ? $error['price'] : ""; ?></span>
            </div>
            <hr>
            <div class="row2 mb10">
                <label>Hình ảnh </label> <br>
                <input type="file" name="img">
                <?php echo $hinhpath; ?>
            </div>
            <hr>
            <div class="row2 mb10">
                <label>Mô tả</label> <br>
                <textarea rows="10" cols="50" name="mota"><?php echo $mota; ?></textarea>
                <br>
                <span style="color: red;"><?php echo isset($error['mota']) ? $error['mota'] : ""; ?></span>
            </div>

            <hr>
            <br>
            <div class="row mb10 ">
                <input type="hidden" name="id"                      value="<?php echo $id; ?>">
                <input type="submit" class="mr20"   name="capnhat"  value="Cập nhật">
                <input type="reset"  class="mr20"                   value="NHẬP LẠI">
                <a href="index.php?act=list">
                    <input class="mr20" type="button" value="DANH SÁCH">
                </a>
            </div>
        </form>
    </div>
</div>
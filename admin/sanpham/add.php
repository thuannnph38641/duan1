<style>
    hr {
        width: 1500px;
        margin: auto;
    }
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Danh mục </label> <br>
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                    ?>
                        <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <hr>
            <div class="row2 mb10 form_content_container">
                <label> Tên sản phẩm </label> <br>
                <input type="text" name="tensanpham" placeholder="nhập vào tên sản phẩm">
                <span style="color: red;"><?php echo isset($error['tensanpham']) ? $error['tensanpham'] : ""; ?></span>
            </div>
            <hr>
            <div class="row2 mb10">
                <label>Giá sản phẩm </label> <br>
                <input type="text" name="price" placeholder="nhập vào giá sản phẩm">
                <span style="color: red;"><?php echo isset($error['price']) ? $error['price'] : ""; ?></span>
            </div>
            <hr>
            <div class="row2 mb10">
                <label>Hình ảnh </label> <br>
                <input type="file" name="img">
            </div>
            <hr>
            <div class="row2 mb10">
                <label>Mô tả</label> <br>
                <textarea rows="10" cols="50" name="mota" placeholder="nhập mô tả"></textarea>
                <br>
                <span style="color: red;"><?php echo isset($error['mota']) ? $error['mota'] : ""; ?></span>
            </div>

            <hr>
            <br>
            <div class="row mb10 ">
                <input class="mr20" type="submit" value="THÊM MỚI" name="themmoisp">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=list"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
        
    </div>
</div>
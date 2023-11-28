<style>
    hr {
        width: 1500px;
        margin: auto;
    }
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI DANH MỤC HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addlh" method="POST" enctype="multipart/form-data">
            <br>
            <hr>
            <div class="row2 mb10 form_content_container">
                <label> TÊN DANH MỤC </label> <br>
                <input type="text" name="tendanhmuc" placeholder="nhập vào tên danh mục hàng hóa">
                <!-- <span style="color: red;"><?php echo isset($error['tensanpham']) ? $error['tensanpham'] : ""; ?></span> -->
            </div>
            <hr>
            <br>
            <div class="row mb10 ">
                <input class="mr20" type="submit" value="THÊM MỚI" name="themmoidm">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=loaihang"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
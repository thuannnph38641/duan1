<style>
    hr {
        width: 1500px;
        margin: auto;
    }
</style>
<?php
if (is_array($khachhang)) {

    // echo "<pre>";
    // print_r($khachhang);
    // die;

    extract($khachhang);
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>UPDATE KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatekh&id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label>EMAIL</label> <br>
                <input type="text" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="row2 mb10 form_content_container">
                <label>TÊN ĐĂNG NHẬP</label> <br>
                <input type="text" name="user" value="<?php echo  $user; ?>">
            </div>
            <hr>
            <div class="row2 mb10">
                <label>PASSWORD</label> <br>
                <input type="text" name="pass" value="<?php echo  $pass; ?>">
            </div>
            <hr>
            <div class="row2 mb10">
                <label>ĐỊA CHỈ</label> <br>
                <input type="text" name="address" value="<?php echo  $address; ?>">
            </div>
            <hr>
            <div class="row2 mb10">
                <label>SỐ ĐIỆN THOẠI</label> <br>
                <input type="text" name="tel" value="<?php echo  $tel; ?>">
                <br>
            </div>
            <div class="row mb10 ">
                <input type="submit" class="mr20" name="capnhatkh" value="Cập nhật">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listkh"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
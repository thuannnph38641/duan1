<style>
    hr {
        width: 1500px;
        margin: auto;
    }
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addkh" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label>EMAIL</label> <br>
                <input type="text" name="email" placeholder="nhập vào giá sản phẩm">
            </div>
            <div class="row2 mb10 form_content_container">
                <label>TÊN ĐĂNG NHẬP</label> <br>
                <input type="text" name="user" placeholder="nhập vào tên sản phẩm">
            </div>
            <hr>
            <div class="row2 mb10">
                <label>PASSWORD</label> <br>
                <input type="text" name="pass" placeholder="nhập vào giá sản phẩm">
            </div>
            <hr>
            <div class="row2 mb10">
                <label>ĐỊA CHỈ</label> <br>
                <input type="text" name="address" placeholder="nhập vào giá sản phẩm">
            </div>
            <hr>
            <div class="row2 mb10">
                <label>SỐ ĐIỆN THOẠI</label> <br>
                <input type="text" name="tel" placeholder="nhập vào giá sản phẩm">
                <br>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" value="Thêm mới" name="addkh">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listkh"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
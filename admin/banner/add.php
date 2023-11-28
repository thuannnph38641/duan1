<style>
    hr {
        width: 1500px;
        margin: auto;
    }
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI BANNER</h1><br>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addbn" method="POST" enctype="multipart/form-data">
            <br>
            <hr>
            <div class="row2 mb10 form_content_container">
                
                <input type="hidden" name="id" >
                <label> Hình ảnh </label> <br>
                <input type="file" name="img" >
            </div>
            <hr>
            <br>
            <div class="row mb10 ">
                <input class="mr20" type="submit" value="THÊM MỚI" name="themmoibn">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=banner"><input class="mr20" type="button" value="DANH SÁCH" ></a>
            </div>
        </form>
    </div>
</div>
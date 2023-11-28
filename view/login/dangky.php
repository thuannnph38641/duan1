<div class="form1">
            <h1>Đăng ký tài khoản </h1>
            <form action="index.php?act=dangky" method="post">
                <label for="">Tên đăng nhập</label><BR> 
                <input type="text" name="user" placeholder="Nhập tài khoản"><br>
                <label for="">Mật khẩu</label><BR>
                <input type="password" name="pass" id="" placeholder="Nhập mật khẩu"><br>
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="Nhập email của bạn"><br>
                <label for="">Địa chỉ</label><br>
                <input type="text" name="address" placeholder="Nhập địa chỉ"><BR>
                <label for="">Số điện thoại</label><br>
                <input type="text" name="tel">       
                <input type="submit" value="Đăng Ký" name="dangky">
                
            </form>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </div>
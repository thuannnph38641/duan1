<style>
.form1 a>button {
    background-color: red !important;
    margin-top:20px;
    width: 150px;
    height: 30px;
    border: 1px solid gainsboro !important;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    font-weight: 600;
}
.form1 input:nth-child(12){
    width: 100px !important;
    color: white !important;
    background-color: red;
    border: 1px solid gray !important;
    border-radius: 5px;
}
</style>

<div class="form1">
    <h1>Đăng nhập tài khoản </h1>
    <?php if(!isset($_SESSION['taikhoan'])){ ?>
    <form action="index.php?act=dangnhap" method="post">
        <label for="">Tên đăng nhập</label><BR> 
        <input type="text" name="user" placeholder="Nhập tài khoản"><BR><br>
        <label for="">Mật khẩu</label><BR>
        <input type="password" name="pass" id="" placeholder="Nhập mật khẩu"><br>
       <a href="index.php?act=quenmk">Quên mật khẩu </a><br>
        <input type="submit" value="Đăng Nhâp" name="dangnhap">
        <p>Bạn chưa có tài khoản <a href="index.php?act=dangky">Đăng ký ngay</a></p>
    </form>
    <?php } else { ?>
    <p>Xin chào: <?php echo $_SESSION['taikhoan']['user']; ?></p>
    <a href="index.php?act=dangxuat"><button>Đăng xuất</button></a>
    <a href="index.php?act=mygh"><button>Giỏ hang cua toi</button></a>
    <?php
    if ($_SESSION['taikhoan']['role'] == 1) {
    ?>
        <a href="admin/index.php?act=trangchu"><button>Chuyển đến trang ADMIN</button></a>
    <?php } ?>
<?php } ?>
</div>
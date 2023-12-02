<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        crossorigin="anonymous">
    <script src="js.js"></script>
    <title>Dự Án 1</title>
</head>
<style>
    header{
        background-color: white;
        border: 1px solid black;
    }
   .headerr form input{
        width: 260px !important;
        height: 25px;
        border: 1px solid #ccc !important;
        border-radius: 5px;
        
    }
    .logo {
  animation: blink 1s infinite;
}

@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}
.menu ul li a {
  font-size: 16px;
  color: black;
  transition: all 0.3s ease;
  font-family: "Arial", sans-serif;
  border-radius: 50px;
}

.menu ul li a:hover {
  font-size: 20px;
  color: red;
  font-family: "Times New Roman", serif;
  border-radius: 100px;
}

</style>

<body onload="autoslide()">
    <div class="container">
        <header>
            <div class="headerr">
                <div class="logo">
                    <p>NT SPORT</p>
                </div>
                <DIV class="menu">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="">Liên Hệ</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li><a href="">Đặt Đồ</a></li>
                    </ul>
                </DIV>
                <form action="index.php?act=sanpham" method="post">
                    <input type="search" placeholder="Tìm kiếm" name="keyword">
                    
                </form>
                <div class="icon">
                    <a href="index.php?act=dangnhap"><i class="fa-solid fa-user"></i></a>
                    <a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a>
                    
                </div>
            </div>
        </header>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="../css/admin.css">
    
    
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .exit{
            color: white;
            height: 100%;
            font-size: 15px;
            text-decoration: none;
        }

        .exit:hover{
            color: red;
            background-color: aqua;
            height: 100%;
        }
        .menu {
            background-color: #EEE;
    border: 0px solid #000;
    padding: 5px;
    height: 33px;
    width: 800px;
    position: relative;
    top: -65px;
    left: 200px;
  
  }
  .header_admin{
height: 70px;
  }
  .menu ul {
    display: flex;
    align-items: center;
    gap: 30px;
  }
  
  .menu ul li {
    list-style: none;
  }
  
  .menu li a {
    font-size: 20px;
    font-weight: 600;
    color: red;
    text-decoration: none;
  }
    </style>
</head>

<body>
    <div class="boxcenter">
        <!-- BIGIN HEADER -->
        <header>
            <div class="row mb header_admin">
                <h1>ADMIN</h1>
            </div>
            <div style="justify-content: space-between;" class="row mb menu">
                <ul>

                    <li><a href="index.php?act=trangchu">Trang chủ</a></li>
                    <li><a href="index.php?act=loaihang">Danh mục</a></li>
                    <li><a href="index.php?act=list">Hàng hóa</a></li>
                    <li><a href="index.php?act=listkh">Khách hàng</a></li>
                    <li><a href="index.php?act=binhluan">Bình luận</a></li>
                    <li><a href="index.php?act=banner">Banner</a></li>
                    <li><a href="index.php?act=thongke">Thống kê</a></li>
                </ul>
            </div>
        </header>
        <!-- END HEADER -->
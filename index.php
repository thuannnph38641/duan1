<?php 
include 'model/ketnoi.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act=$_GET['act'];
    switch(act){
        case 'sanpham':
            load_all_main();
        
    }
}else{
    include 'view/main.php';
}
include 'view/footer.php';
?>
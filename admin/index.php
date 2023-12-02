<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/khachhang.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/giohang.php";
include "../model/banner.php";

include "header.php";
session_start();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {         
        case 'addsp':
            $listdanhmuc = loadall_danhmuc();
            if (isset($_POST['themmoisp']) && $_POST['themmoisp']) {
                $iddm           = $_POST['iddm'];
                $tensanpham     = $_POST['tensanpham'];
                $price          = $_POST['price'];
                $mota           = $_POST['mota'];
                $error = array();
                if (empty($tensanpham)) {
                    $error['tensanpham'] = "Bạn không được để trống tên sản phẩm";
                }
                if (empty($price)) {
                    $error['price'] = "Bạn không được để trống giá tiền";
                }
                if (empty($mota)) {
                    $error['mota'] = "Bạn không được để trống mô tả";
                }
        
                if (isset($_FILES['img']) && $_FILES['img']) {                   
                    $target_dir = "../upload/";                   
                    $name_img = $_FILES["img"]["name"];           
                    $target_file = $target_dir . $name_img;
                    move_uploaded_file($_FILES["img"]['tmp_name'], $target_file);
                }
                if (empty($error)) {
                    insert_sanpham($tensanpham, $price, $name_img, $mota, $iddm);
                    $themthanhcong = "thành công";
        
                    echo "<script>alert('Thêm sản phẩm thành công')</script>";
                }
            }
            include "sanpham/add.php";
            break;
        case 'suasp':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham = loadone_sanpham($_GET['idsp']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;


        case 'updatesp':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $iddm           =   $_POST['iddm'];
                $id             =   $_POST['idkh'];
                $tensanpham     =   $_POST['tensanpham'];
                $price          =   $_POST['price'];
                $mota           =   $_POST['mota'];
                $img            =   $_FILES['img']['name'];
                $target_dir     =   "../upload/";
                $target_file    =   $target_dir . basename($_FILES['img']['name']);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                updatesp($id, $iddm, $tensanpham, $price, $mota, $img);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;

        case 'hard_delete':
            if (isset($_GET['id'])) {
                hard_delete($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
            case "loaihang":
                $keywdm = isset($_POST['keywdm']) ? $_POST['keywdm'] : "";
                $list_danhmuc = loadall_danhmuc($keywdm);
                include "danhmuc/list.php";
                break;

        case 'addlh':
            if (isset($_POST['themmoidm']) && $_POST['themmoidm']) {
                if (empty($_POST['tendanhmuc'])) {
                    $error['chuanhapdanhmuc'] = 'chuanhap';
                } else {
                    $tendanhmuac = $_POST['tendanhmuc'];
                    insert_danhmuc($tendanhmuac);
                    header("Location: index.php?act=loaihang");
                }
            }
            include "danhmuc/add.php";
            break;
        case "xoadm":
            if (isset($_GET['iddm'])) {
               delete_danhmuc($_GET['iddm']);
            }

            $list_danhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case "hanghoa":
            include "hanghoa/list.php";
            break;

        case "listkh":
            $listkhachhang = loadall_khachhang();
            include "khachhang/list.php";
            break;

        case "addkh":
            if (isset($_POST['addkh']) && ($_POST['addkh'] != "")) {
                $user           = $_POST['user'];
                $email          = $_POST['email'];
                $pass           = $_POST['pass'];
                $address        = $_POST['address'];
                $tel            = $_POST['tel'];
                insert_taikhoan($email, $user, $pass, $address, $tel);
                // header("Location: index.php?act=addkh");
            }
            include "khachhang/add.php";
            break;

        case 'suakh':

            if (isset($_GET['idkh']) && $_GET['idkh'] > 0) {
                $khachhang = loadone_khachhang($_GET['idkh']);
            }
            include "khachhang/update.php";
            break;

        case 'updatekh':
            if (isset($_POST['capnhatkh']) && $_POST['capnhatkh']) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $id = $_GET['id'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                updatekh($id, $user, $email, $pass, $address, $tel);
                header("Location: index.php?act=listkh");
            }
            $listkhachhang = loadall_khachhang();
            include "sanpham/list.php";
            break;

        case 'xoakh':
            if(isset($_GET['idkh'])){
            $id = $_GET['idkh'];
           delete_khachhang($id);
             header("Location: index.php?act=listkh");
            }
            include "khachhang/list.php";
            break;
        case "binhluan":
            $listbinhluan = binhluan_sanpham();
            include "binhluan/list.php";
            break;
        case 'delete_binhluan':
            if (isset($_GET['id'])) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = binhluan_sanpham();
            include "binhluan/list.php";
            break;
        case "thongke":
            $ds_thongke = load_thongke_sanpham_danhmuc();
            $thongkeds = load_thongke_doanhthu_ngay();
            include "thongke/list.php";
            break;
            
            
            case 'trangchu':
                include "trangchu/list.php";
                break;
            case 'list':
                if (isset($_POST['timkiemsp']) && $_POST['timkiemsp']) {
                    $keyw = $_POST['keyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $keyw = "";
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($keyw, $iddm);
                include "sanpham/list.php";
                break;

       
            case "banner":
                $listbner = loadall_banner();
                include "banner/list.php";
                break;
                case "addbn":
                    if(isset($_POST["themmoibn"] )&& ($_POST['themmoibn'])) {
                        $id = $_POST['id'];
                        $img            =   $_FILES['img']['name'];
                        $target_dir     =   "../upload/";
                        $target_file    =   $target_dir . basename($_FILES['img']['name']);
                        if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                          echo "Thành công";
                    }else{
                        echo "ko thanh cong";
                    }
                    $bnerr = insert_banner($id, $img);
                }
                
                    include "banner/add.php";
                    break;
                    case 'xoabn':
                        if (isset($_GET['idbn'])) {
                            delete_banner($_GET['idbn']);
                        }
                        $listbner = loadall_banner();
                        include "banner/list.php";
                        break;
                        case "hoadon":
                            $listhoadon = loadall_ghofme(0);
                            include "hoadon/list.php";
                            break;
                            case 'suahd':
                                if(isset($_GET['idhd']) && ($_GET['idhd'])> 0) {
                                $hoadon = loadone_hoadon($_GET['idhd']);
                                }
                                include 'hoadon/update.php';
                                break;
                            case 'updatehd':
                                if(isset($_POST['capnhat']) ){
                                    $id = $_POST['id'];
                                    $trangthai = $_POST['trangthai'];
                                    update_hoadon($id, $trangthai);
                                    $thongbao8 = "cập nhật thành công";

                                }else{
                                    $thongbao8 = "ko dc";
                                }
                                $listhoadon = loadall_ghofme(0);
                                include 'hoadon/list.php';
                                break;
                                case 'xoahd':
                                    if(isset($_GET['idhd'])){
                                        delete_hoadon($_GET['idhd']);
                                        header('location: index.php?act=hoadon');
                                    }
                                include 'hoadon/list.php';
                                break;

    }
} else {
    include "sanpham/list.php";
}
include "footer.php";

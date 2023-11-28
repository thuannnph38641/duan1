<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/khachhang.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/banner.php";

include "header.php";
session_start();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

            // Trang chủ
        case 'trangchu':

            include "trangchu/list.php";
            break;

            // Danh sách
        case 'list':
            if (isset($_POST['clickok']) && $_POST['clickok']) {
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
        case 'addsp':
            $listdanhmuc = loadall_danhmuc();
            if (isset($_POST['themmoisp']) && $_POST['themmoisp']) {
                $iddm           = $_POST['iddm'];
                $tensanpham     = $_POST['tensanpham'];
                $price          = $_POST['price'];
                $mota           = $_POST['mota'];
                $error = "";
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
                if (!$error) {
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
            $list_danhmuc = loadall_danhmuc();
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
                $user           =   $_POST['user'];
                $email          =   $_POST['email'];
                $id             =   $_GET['id'];
                $pass           =   $_POST['pass'];
                $address        =   $_POST['address'];
                $tel            =   $_POST['tel'];
                updatekh($id, $user, $email, $pass, $address, $tel);
                header("Location: index.php?act=listkh");
            }
            $listkhachhang = loadall_khachhang();
            include "sanpham/list.php";
            break;

        case 'xoakh':
            include "khachhang/delete.php";
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
            include "thongke/list.php";
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

    }
} else {
    include "sanpham/list.php";
}
include "footer.php";

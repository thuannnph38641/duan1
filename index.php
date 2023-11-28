<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/banner.php";
include "model/giohang.php";
include "view/header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$spcl = loadall_sanpham_cungloai();
 $banner = loadall_banner() ;
 if(!isset($_SESSION['giohang'])){
    $_SESSION['giohang'] = [];
 }
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case "sanpham":
            if (isset($_POST['keyword']) &&  $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case "sanphamct":
            if (isset($_POST['guibinhluan'])) {
                if (isset($_SESSION['taikhoan'])) {
                    $thongtin = $_SESSION['taikhoan'];
                    extract($thongtin);
                    insert_binhluan($_POST['idpro'], $_POST['noidung'], $id);
                }
                else {
                    echo "<script>alert('Bạn phải đăng nhập trước')</script>";
                }
            }

            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $idSp = $_GET['idsp'];
                $sanpham = loadone_sanpham($idSp);
                $sanphamcl = load_sanpham_cungloai($idSp, $sanpham['iddm']);
                $binhluan = loadall_binhluan($idSp);
                include "view/chitietsp.php";
            } else {
                include "view/main.php";
            }
            break;

        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'] != "")) {
                $email          = $_POST['email'];
                $name           = $_POST['user'];
                $pass           = $_POST['pass'];
                $address        = $_POST['address'];
                $tel            = $_POST['tel'];
                insert_taikhoan($email, $name, $pass,$address,$tel);
                $thongbao = "Đăng ký thành công";
            }
            include "view/login/dangky.php";
            break;

        case "dangnhap": 
            if(isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $taikhoan = dangnhap($user, $pass);
                if(is_array($taikhoan)) {
                    $_SESSION['taikhoan'] = $taikhoan;
                    $thong_bao = "Dang nhap thanh cong";
                    if($taikhoan['role'] == 1) {
                        header("Location: admin/index.php?act=trangchu");
                    } 
                    else {
                        include "view/login/dangnhap.php";
                    } 
                } 
                else {
                    $thong_bao = "Thong tin dang nhap sai";
                    
                }
            }
            include "view/login/dangnhap.php";
            break;
        

        case "dangxuat":

            session_unset();
            include "view/main.php";
            break;

        case "quenmk":
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
            }
            include "view/login/quenmk.php";
            break;
            case 'addgiohang';
            if (isset($_POST['themgiohang']) && $_POST['themgiohang']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong =1 ;
                $ttien = $soluong * $price;
                $gh =[$id,$name,$img,$price,$soluong,$ttien];
                array_push($_SESSION['giohang'],$gh);
                
            }
            include 'view/giohang/mygiohang.php';
            break;
            case 'giohang';
            include 'view/giohang/mygiohang.php';
            break;
            case 'xoagh':
                if(isset($_GET['idgh'])){
                    array_splice($_SESSION['giohang'],$_GET['idgh'],1);
                }else{
                    $_SESSION['giohang']=[];
                }
                header('location: index.php?act=giohang');
            break;
            case 'thongtinhd':
                include 'view/giohang/thongtindonhang.php';
                break;
                case 'hoadon':
                    if(isset($_POST['dongydathang']) && $_POST['dongydathang']){
                        if(isset($_SESSION['taikhoan']) && $_SESSION['taikhoan']){
                            $iduser = $_SESSION['taikhoan']['id'];
                        } else {
                            $iduser = 0;
                        }
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $tel = $_POST['tel'];
                        $address = $_POST['address'];
                
                        if(isset($_POST['pttt'])){
                            $pttt = $_POST['pttt'];
                        } else {
                            $pttt = ''; 
                        }
                
                        $ngaydathang = date("h:i:sa d/m/Y");
                        $tong = tong();
                        $idhoadon = insert_hoadon($iduser, $name, $email, $tel, $address, $pttt, $ngaydathang, $tong);
                
                        foreach($_SESSION["giohang"] as $gh){
                            insert_giohang($iduser, $gh[0], $gh[2], $gh[1], $gh[3], $gh[4], $gh[5], $idhoadon);
                        }
                    }
                
                    $hoadon = loadone_hoadon($idhoadon);
                    $giohang = loadall_giohang($idhoadon);
                    include 'view/giohang/hoadon.php';
                    break;
                case 'mygh':
                    $listdh = loadall_ghofme($_SESSION['taikhoan']['id']);
                    include 'view/giohang/ghofme.php';
                    break;
    }
} else {
    include "view/main.php";
}

include "view/footer.php";

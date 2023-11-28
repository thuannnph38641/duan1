<?php
function loadall_khachhang_home()
{
    $sql = "select * from taikhoan where 1 order by id desc limit 0,9";
    $listkhachhang = pdo_query($sql);
    return  $listkhachhang;
}
function loadall_khachhang_top10()
{
    $sql = "select * from taikhoan where 1 order by luotxem desc limit 0,10";
    $listkhachhang = pdo_query($sql);
    return $listkhachhang;
}
function loadall_khachhang($keyw = "", $iddm = 0)
{
    $sql = "select * from taikhoan where 1";
    // where 1 tức là nó đúng
    if ($keyw != "") {
        $sql .= " and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listkhachhang = pdo_query($sql);
    return  $listkhachhang;
}

// 
function loadone_khachhang($id)
{
    $sql = "select * from taikhoan where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_khachhang_cungloai($id, $iddm)
{
    $sql = "select * from taikhoan where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}

function insert_khachang($email,$user,$pass,$address,$tel){
    $sql="INSERT INTO `taikhoan` ( `email`, `user`, `pass`, `address`, `tel`) VALUES ( '$email', '$user','$pass','$address', '$tel'); ";
    pdo_execute($sql);
}

function updatekh($id, $user, $email, $pass, $address, $tel)
{
        $sql = "UPDATE `taikhoan` SET `user` = '{$user}', `email` = '{$email}', `pass` = '{$pass}', `address` = '{$address}', `tel` = '{$tel}' WHERE `taikhoan`.`id` = '$id' ";
        pdo_execute($sql);
}

function delete_khachhang($id)
{
    $sql = "DELETE FROM `taikhoan` WHERE `taikhoan`.`id` = $id;";
    pdo_execute($sql);
}


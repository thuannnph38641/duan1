<?php
function loadall_binhluan($idsp)
{
    $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
    $result =  pdo_query($sql);
    return $result;
}
function insert_binhluan($idpro, $noidung, $iduser)
{
    $date = date('Y-m-d');
    $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
            VALUES ('$noidung','$iduser','$idpro','$date');
        ";
    //echo $sql;
    //die;
    pdo_execute($sql);
}

function binhluan_sanpham()
{
    $sql = "SELECT *, COUNT(binhluan.id) as soBinhLuan
        FROM sanpham 
        JOIN binhluan on binhluan.idpro = sanpham.id
        WHERE 1
        GROUP BY sanpham.id
        ORDER BY sanpham.id DESC;";
    return pdo_query($sql);
}

// Xóa Bình luận
function delete_binhluan($id){
    $sql = "DELETE FROM `binhluan` WHERE `binhluan`.`id` = $id;";
    pdo_execute($sql);
}
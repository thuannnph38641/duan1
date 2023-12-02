<?php
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,8";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_cungloai()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,6";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    // where 1 tức là nó đúng
    if ($keyw != "") {
        $sql .= " and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}

function insert_sanpham($tensanpham, $price, $img, $mota, $iddm)
{
    $sql = "INSERT INTO `sanpham` (`name`, `price`, `img`, `mota`, `iddm`) VALUES ('$tensanpham', '$price', '$img', '$mota', '$iddm')";
    pdo_execute($sql);
}

function updatesp($id, $iddm, $tensanpham, $price, $mota, $img)
{
    
    if ($_FILES['img']['name'] != "") {
        $sql = "UPDATE `sanpham` SET `name` = '{$tensanpham}', `price` = '{$price}', `iddm` = '{$iddm}', `mota` = '{$mota}', `img` = '{$img}' WHERE `sanpham`.`id` = '$id' ";
        pdo_execute($sql);
    } else {
        $sql = "UPDATE `sanpham` SET `name` = '{$tensanpham}', `price` = '{$price}', `iddm` = '{$iddm}', `mota` = '{$mota}' WHERE `sanpham`.`id` = '$id' ";
        pdo_execute($sql);
    }
}


function hard_delete($id)
{
    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`id` = $id;";
    pdo_execute($sql);
}


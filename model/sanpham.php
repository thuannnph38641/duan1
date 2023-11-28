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
// function loadall_sanpham($keyw = "", $iddm = 0)
// {
//     $sql = "SELECT *, COUNT(binhluan.id) as soBinhLuan
//             FROM sanpham 
//             JOIN binhluan on binhluan.idpro = sanpham.id
//             WHERE trangthai = 0
//             GROUP BY sanpham.id
//             ORDER BY sanpham.id DESC; ";
//     // where 1 tức là nó đúng
//     if ($keyw != "") {
//         $sql .= " and name like '%" . $keyw . "%'";
//     }
//     if ($iddm > 0) {
//         $sql .= " and iddm ='" . $iddm . "'";
//     }
//     $sql .= " order by id desc";
//     $listsanpham = pdo_query($sql);
//     return  $listsanpham;
// }
// 
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
    // Kiểm tra xem người dùng đã chọn hình ảnh mới hay không
    if ($_FILES['img']['name'] != "") {
        // Nếu họ đã chọn hình ảnh mới, thực hiện việc tải lên và cập nhật hình ảnh mới
        // $new_image = uploadImage(); // Hàm uploadImage() là hàm để tải lên hình ảnh mới
        // Thực hiện truy vấn SQL để cập nhật thông tin sản phẩm với đường dẫn hình ảnh mới
        $sql = "UPDATE `sanpham` SET `name` = '{$tensanpham}', `price` = '{$price}', `iddm` = '{$iddm}', `mota` = '{$mota}', `img` = '{$img}' WHERE `sanpham`.`id` = '$id' ";
        pdo_execute($sql);
    } else {
        // Nếu họ không chọn hình ảnh mới, sử dụng đường dẫn hình ảnh cũ để cập nhật
        $sql = "UPDATE `sanpham` SET `name` = '{$tensanpham}', `price` = '{$price}', `iddm` = '{$iddm}', `mota` = '{$mota}' WHERE `sanpham`.`id` = '$id' ";
        pdo_execute($sql);
    }
}

// Câu truy vấn xóa cứng
function hard_delete($id)
{
    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`id` = $id;";
    pdo_execute($sql);
}

// Câu truy vấn xóa mềm
function soft_delete($id)
{
    $sql = "UPDATE `sanpham` SET `trangthai` = 1 WHERE `sanpham`.`id` = '$id';";
    pdo_execute($sql);
}

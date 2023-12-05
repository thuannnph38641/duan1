<?php
function loadall_danhmuc($keywdm = ""){
    $sql = "SELECT * FROM danhmuc WHERE 1";
    if ($keywdm != "") {
        $sql .= " and name like '%" . $keywdm . "%'";
    }
    
    $sql .= " order by id desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_dm($iddm) {
    if ($iddm > 0) {
        $sql = "select * from sanpham where id=" . $iddm;
        $dm = pdo_query_one($sql);
        
        if ($dm) {
            extract($dm);
            return $name;
        }
    }
    
    return "";
}


function insert_danhmuc($tendanhmuc)
{
    $sql = "INSERT INTO `danhmuc` (`name`) VALUES ('$tendanhmuc')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "delete from danhmuc where id='$id'";
    pdo_execute($sql);
}
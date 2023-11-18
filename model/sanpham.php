<?php
function load_all_main(){
$sql = "select * from sanpham where 1 order by id desc limit 8";
$listsanpham = pdo_query($sql);
return $listsanpham ;
}
?>
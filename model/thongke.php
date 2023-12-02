<?php
// Câu lệnh thống kê
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id, dm.name,
            COUNT(*) 'soluong', MIN(price) 'gia_min',
            MAX(price) 'gia_max', AVG(price) 'gia_avg'
            FROM danhmuc dm JOIN sanpham sp on dm.id=sp.iddm 
            GROUP BY dm.id, dm.name
            ORDER BY soluong DESC ";
    return pdo_query($sql);
}
function load_thongke_doanhthu_ngay() {
    $sql = "SELECT hoadon.id as mahd, hoadon.ngaydathang AS ngay, COUNT(giohang.soluong) AS soluong, SUM(giohang.thanhtien) AS tong
            FROM hoadon
            INNER JOIN giohang ON hoadon.id = giohang.idhoadon               
            GROUP BY hoadon.id";      
    $result = pdo_query($sql);
    return $result;
}
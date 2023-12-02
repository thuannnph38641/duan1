<?php
function giohang_ct($ghct){
    global $img_path1;
    $tong = 0;
    $i = 0 ;
    foreach($ghct as $gh){
        $img = $img_path1.$gh['img'];
        
        if (isset($gh['soluong'])) {
            $soluong = $gh['soluong'];
            // Tiếp tục xử lý
        } else {
            // Xử lý khi khóa 'soluong' không tồn tại
        }
        $thanhtien = floatval($gh['price']) * intval($soluong);
        $tong += $thanhtien ;

       
    echo'
    <tr>
        
        <td><img src="'. $img .'" alt="" width="130PX" height="110px"></td>
        <td>'.$gh['name'].'</td>
        <td>'.$gh['price'].'$'.'</td>
        <td>'. $soluong .'</td>
        <td>'.$thanhtien . '$</td>
        
    </tr>';
    $i += 1 ;
    } 
    echo'
    <tr>
        <td colspan="4">Tổng</td>
        <td colspan="2">'.$tong.'$'.' </td>
    </tr>';
}
function tong(){
   
    $tong = 0;
    foreach($_SESSION['giohang'] as $gh){
        
        $ttien = $gh[3] * $gh[4];
        $tong += $ttien ;
    }
    return $tong;
}
function soluong(){
    $soluong = 1;
    foreach($_SESSION['giohang'] as $gh){
        $soluong = '<input type="number" value="'.$gh[4].' name="soluong">';
    }
    return $soluong;
}
function insert_hoadon($iduser,$name, $email, $tel, $address, $pttt, $ngaydathang, $tong){
    $sql = "INSERT INTO hoadon (iduser,hd_name,hd_email,hd_address,hd_tel,hd_pttt,ngaydathang,tong) VALUES('$iduser','$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tong')";
    return pdo_execute_Id($sql);
}
function insert_giohang($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idhoadon){
    $sql = "insert into giohang (iduser,idpro,img,name,price,soluong,thanhtien,idhoadon) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idhoadon')";
    pdo_execute($sql);
}
function loadone_hoadon($id){
    $sql = "select * from hoadon where id='$id'";
    $result = pdo_query_one($sql);
    return $result;
}
function loadall_giohang($idhoadon){
    $sql = "select * from giohang where idhoadon='$idhoadon'";
    $result = pdo_query($sql);
    return $result;
}
function loadall_giohang_soluong($idhoadon){
    $sql = "select * from giohang where idhoadon='$idhoadon'";
    $result = pdo_query($sql);
    return sizeof($result);
}
function loadall_ghofme($iduser){
    $sql = "select * from hoadon where 1 ";
   if($iduser > 0){ $sql .= " AND iduser='$iduser'";
      $sql .= "order by id desc";}
    $result = pdo_query($sql);
    return $result;
}
function delete_hoadon($id){
    $sql = "delete from hoadon where id='$id'";
    pdo_execute($sql);
}
function get_ttdh($n){
    switch($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
            case '1':
                $tt = "Đang xử lý";
                break;
                case '2':
                    $tt = "Đang giao";
                    break;
                    case '3':
                        $tt = "Đã hoàn thành";
                        break;
    }
    return $tt;

}
function get_pttt($n){
    switch($n) {
        case '0':
            $tt = "Trả tiền khi nhận hàng";
            break;
            case '1':
                $tt = "Chuyển tiền qua ngân hàng";
                break;
                case '2':
                    $tt = "Thanh toán online";
                    break;
                    
    }
    return $tt;

}
function update_hoadon($id,$trangthai){
    $sql = "UPDATE `hoadon` SET `trangthai` = '{$trangthai}' WHERE `hoadon`.`id` = '$id'; ";
    pdo_execute($sql);
}
?>
<?php
function giohang_ct($ghct){
    global $img_path1;
    $tong = 0;
    $i = 0 ;
    foreach($ghct as $gh){
        $img = $img_path1.$gh['img'];
        $tong += $gh['thanhtien'] ;
       
    echo'
    <tr>
        
        <td><img src="'. $img .'" alt="" width="130PX" height="110px"></td>
        <td>'.$gh['name'].'</td>
        <td>'.$gh['price'].'$'.'</td>
        <td>'. $gh['soluong'] .'</td>
        <td>'.$gh['thanhtien'].'$'.' </td>
        
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
    $sql = "select * from hoadon where iduser='$iduser'";
    $result = pdo_query($sql);
    return $result;
}
function get_ttdh($n){
    switch($n) {
        case '0':
            $tt = "Don hang moi";
            break;
            case '1':
                $tt = "Dang xu ly";
                break;
                case '2':
                    $tt = "Dang giao";
                    break;
                    case '3':
                        $tt = "Da hoan thanh";
                        break;
    }
    return $tt;

}
function get_pttt($n){
    switch($n) {
        case '0':
            $tt = "Tra tien khi nhan hang";
            break;
            case '1':
                $tt = "Chuyen khoan ngan hang";
                break;
                case '2':
                    $tt = "Thanh toan online";
                    break;
                    
    }
    return $tt;

}
?>
<?php 
function loadall_banner(){
    $sql = "select * from banner where 1";
    $result = pdo_query($sql);
    return $result;
}
function insert_banner($id,$img){
    $sql = "insert into banner(id,img) values('$id','$img')";
    pdo_execute($sql);
}
function delete_banner($id){
    $sql = "delete from banner where id='$id'";
    pdo_execute($sql);
}
?>
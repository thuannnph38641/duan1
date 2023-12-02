<style>
  th {
    background-color: yellowgreen !important;
    color: black;
  }
  table td {
    font-size: 18px;
    border: 1px solid gray !important;
    color: black;
  }
  table th,
  table td {
    border: 1px solid gray;
  }
  table {
    position: relative;
    left: 100px;
  }
  .giohang input:nth-child(4) {
    width: 180px;
    height: 25px;
    font-size: 14px;
    font-weight: 600;
    background-color: red;
    border: 1px solid gray;
    color: white;
    text-align: center;
  }
  form table td a :nth-child(1){
    width: 50px;
    background-color: yellowgreen;
    border: 1px solid white;
    height: 30px;
  }
  form table td input:nth-child(1){
    width: 50px;
    text-align: center;
  }
  p{
    color: black;
  }
  .spcl p {        
        color: black;
        font-weight: 600;
    }
    .spcl{
    width: 200px;  
}
.cungloai{
    padding: 0 40px;
    position: relative;
    right: 30px;

}
.danhmuc{
    width: 330px;
    position: relative;
    border: 2px solid gray;
    left: 30PX;

}
.spdm a{
text-decoration: none;
font-size: 20px;
font-weight: 600;

}
</style>

<main>
<form action="index.php?act=thongtinhd" method="post">
  <div class="giohang">
    <p>Giỏ hàng</p>
    <table>
      <tr>
        <th>Ảnh</th>
        <th>Tên SP</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Thao tác</th>
      </tr>
      <?php
      global $img_path1;
      $i = 0;
      foreach ($_SESSION['giohang'] as $gh) {
        $img = $img_path1 . $gh[2];

        $xoagh = '<a href="index.php?act=xoagh&idgh='.$i.'"><input type="button" value="Xóa" width="40px" height="25px"></a>';
        $i += 1;
        $thanhtien = $gh[3] * $gh[4];
       
      ?>
        <tr>
          <td><img src="<?= $img ?>" alt="" width="130PX" height="110px"></td>
          <td><?= $gh[1] ?></td>
          <td><?= $gh[3] . '$' ?></td>
          <td><input type="number" name="soluong" value="<?= $gh[4] ?>" min="1"></td>
          <td>
            <span id="thanhtien-<?= $i ?>"><?= $thanhtien ?>$</span>
            <input type="hidden" name="thanhtien" value="<?= $thanhtien ?>">
          </td>
          <td><?= $xoagh ?></td>
        </tr>
      <?php } ?>
    </table>
    <br>
    <input type="submit" name="dathanghd" value="Tiến hành đặt hàng">
  </div>
</form>
<h2>SẢN PHẨM YÊU THÍCH</h2>
<hr>
            <DIV class="sanpham2">
                <div class="cungloai">
                
                    <?php foreach($spcl as $sp){
                        extract($sp);
                        $img = $img_path.$img ;
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        ?>
                    <div class="spcl">
                        <a href="<?= $linksp?>"><img src="<?= $img?>" alt="" srcset=""></a>
                        <div class="tensp">
                        <p><?= $name?></p>
                        <p><?='Giá:'. $price .'$'?></p>
                        </div>
                    </div>
                    <?php } ?>
                   
                </div>
                <div class="danhmuc">
                    <div class="spdm">
                        <h3>Danh Mục</h3>
                        <?php
                        foreach($dsdm as $dm){
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=". $id;
                        ?>
                        <a href="<?= $linkdm ?>"><p><?= $name ?></p></a>
                        
                        
                        <?php } ?>
                        
                    </div>
                    
                </div>

            </DIV>
            

        </main>
  
  
</main>

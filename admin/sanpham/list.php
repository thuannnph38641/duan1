<style>
  th{
    background-color: yellowgreen !important;

    }
    table td{
        font-size: 18px;
        font-weight: 600;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        border: 1px solid gray !important ;
        background-color: wheat;
        
    }
    table th, table td{
        border: 1px solid gray ; 
    }
    table{
        position: relative;
        left: 10px;
    }
    form input {
      background-color: yellowgreen !important;
      color: white;
      font-size: 16px;
      font-weight: 600;
    }
    form a>input{
      background-color: red !important;
      color: white;
      font-size: 16px;
      font-weight: 600;
    }
    h1{
      color: darkcyan;
    }
    .font_title {
      margin-top: -50px;
    background-color: #EEE;
    border: 1px #CCC solid;
    color: #666
    border-radius: 5px;
    padding: 10px 20px;
  }
</style>
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
  </div><br>
  <div class="row2 form_content ">
    <form action="#" method="POST">
      <div class="row2 mb10 formds_loai">
        <form action="index.php?act.listsp.php" method="post">
          <input type="text" name="keyw">
          <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
            ?>
              <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
            <?php } ?>
          </select>
          <input type="submit" name="clickok" value="Tìm kiếm">
        </form>
        <table border="1">
          <tr>
            <th style="padding: 20px 10px 20px 10px;"></th>
            <th>MÃ SẢN PHẨM</th>
            <th>TÊN SẢN PHẨM</th>
            <th>GIÁ</th>
            <th>HÌNH ẢNH</th>
            <th>LƯỢT XEM</th>
            <!-- <th>SỐ BÌNH LUẬN</th> -->
            <th>CHỨC NĂNG</th>
          </tr>

          <?php foreach ($listsanpham as $sanpham) {
            extract($sanpham); ?>
            <tr>
              <td><input type="checkbox" name="" id=""></td>
              <td><?php echo $id; ?></td>
              <td><?php echo $name; ?></td>
              <td><?php echo $price; ?></td>
              <td><img src="../upload/<?php echo $img; ?>" alt="" width="100px" height="100px"></td>
              <!-- <td><?php echo $mota; ?></td> -->
              <td><?php echo $luotxem; ?></td>
              <!-- <td><?php echo $soBinhLuan; ?></td> -->
              <td>
                <a href="index.php?act=suasp&idsp=<?php echo $id;?>"><input type="button" value="Sửa"></a>
                <a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?act=hard_delete&id=<?php echo $id;?>"><input type="button" value="Xóa" name="xoasp"></a>
                
              </td>
            </tr>
          <?php } ?>

        </table>
      </div>

      <div class="row mb10 ">
        <input class="mr20" type="button" value="Chọn tất cả">
        <input class="mr20" type="button" value="Bỏ chọn tất cả">
        
        <a href="index.php?act=addsp"><input class="mr20" type="button" value="Nhập thêm"></a>
        
      </div>
    </form>
  </div>
</div>
</div>
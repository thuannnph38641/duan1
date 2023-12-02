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
    <h1>DANH SÁCH KHÁCH HÀNG</h1><br>
  </div>
  <div class="row2 form_content ">
    <form action="#" method="POST">
      <div class="row2 mb10 formds_loai">
        <table border="1">
          <tr>
            <th style="padding: 20px 10px 20px 10px;"></th>
            <th>MÃ KHÁCH HÀNG</th>
            <th>HỌ VÀ TÊN</th>
            <th>ĐỊA CHỈ EMAIL</th>
            <th>ĐỊA CHỈ</th>
            <th>SỐ ĐIỆN THOẠI</th>
            <th>VAI TRÒ</th>
            <th>CHỨC NĂNG</th>
          </tr>
          <?php foreach ($listkhachhang as $khachhang) {
            extract($khachhang); ?>
            <tr>
              <td><input type="checkbox" name="" id=""></td>
              <td><?php echo $id; ?></td>
              <td><?php echo $user; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $address; ?></td>
              <td><?php echo $tel; ?></td>
              <td><?php echo $role; ?></td>
              <td>
                <a href="index.php?act=suakh&idkh=<?php echo $id; ?>"><input type="button" value="Sửa"></a>
                <a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?act=xoakh&idkh=<?php echo $id; ?>"><input type="button" value="Xóa" name="xoakh"></a>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>

      <div class="row mb10 ">
        <input class="mr20" type="button" value="Chọn tất cả">
        <input class="mr20" type="button" value="Bỏ chọn tất cả">
        <!-- <input class="mr20" type="button" value="Xóa các mục chọn"> -->
        <a href="index.php?act=addkh"><input class="mr20" type="button" value="Nhập thêm"></a>
      </div>
    </form>
  </div>
</div>
</div>
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
  .form2 input:nth-child(1){
    width: 200px;
    background-color: white !important;
    color: black;
  }
</style>
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH LOẠI DANH MỤC</h1>
  </div>
  <div class="row2 form_content ">
    <form action="#" method="POST">
      <div class="row2 mb10 formds_loai">
        <br><div class="form2">
        <form action="index.php?act=loaihang" method="post">
          <input type="text" name="keywdm">
          
          <input type="submit" name="timkiemdm" value="Tìm kiếm">
        </form>
        </div>
      <br>
        <table border="1">
          <tr>
            <th style="padding: 20px 10px 20px 10px;"></th>
            <th>MÃ DANH MỤC</th>
            <th>TÊN DANH MỤC</th>
            <th>CHỨC NĂNG</th>
          </tr>

          <?php foreach ($list_danhmuc as $danhmuc) {
            extract($danhmuc); ?>
            <tr>
              <td><input type="checkbox" name="" id=""></td>
              <td><?php echo $id; ?></td>
              <td><?php echo $name; ?></td>
              <td>
                <a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?act=xoadm&iddm=<?php echo $id;?>"><input type="button" value="Xóa" name="xoadm"></a>
              </td>
            </tr>
          <?php } ?>

        </table>
      </div>

      <div class="row mb10 ">
        <input class="mr20" type="button" value="Chọn tất cả">
        <input class="mr20" type="button" value="Bỏ chọn tất cả">
        <a href="index.php?act=addlh"><input class="mr20" type="button" value="Nhập thêm"></a>        
      </div>
    </form>
  </div>
</div>
</div>
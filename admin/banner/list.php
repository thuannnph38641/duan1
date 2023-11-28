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
          <h1>DANH SÁCH BANNER</h1>
         </div><br>
         <div class="row2 form_content ">
          <form action="index.php?act=banner" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 formds_loai">
           <table border="1">
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>Hình ảnh</th>
                <th>Chức năng</th>
            </tr>
            <tr>
                <?php
                foreach($listbner as $bn){
                    extract($bn);
                
                 ?>
                <td><input type="checkbox" name="" id=""></td>
                <td><?= $id ?></td>
                <td><img src="../upload/<?php echo $img; ?>" alt="" width="400px" height="200px"></td>
               <td><a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?act=xoabn&idbn=<?php echo $id;?>"><input type="button" value="Xóa" name="xoabn"></a></td> 
            </tr>
            <?PHP } ?>           
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
<a href="index.php?act=addbn"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    
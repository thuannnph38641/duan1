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
        <h1>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h1>
    </div><br>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ NHỎ NHẤT</th>
                        <th>GIÁ LỚN NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                        <th></th>
                    </tr>
                    <?php 
                    foreach ($ds_thongke as $thongke) {
                        extract($thongke);
                        ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $soluong; ?></td>
                        <td>$ <?php echo $gia_min; ?></td>
                        <td>$ <?php echo $gia_max; ?></td>
                        <td>$ <?php echo number_format($gia_avg,2); ?></td>
                        <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </form>
    </div>
</div>
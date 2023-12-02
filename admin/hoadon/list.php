<style>
  th{
    background-color: yellowgreen !important;
  }
  table td{
    font-size: 18px;
    font-weight: 600;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    border: 1px solid gray !important;
    background-color: wheat;
  }
  table th, table td{
    border: 1px solid gray; 
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
    color: #666;
    border-radius: 5px;
    padding: 10px 20px;
  }
</style>
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH HÓA ĐƠN</h1>
  </div><br>
  <div class="row2 form_content ">
    <form action="index.php?act=hoadon" method="POST">
      <div class="row2 mb10 formds_loai">
        <table>
          <tr>
            <th>MÃ ĐƠN HÀNG</th>
            <th>THÔNG TIN KHÁCH HÀNG</th>
            <TH>NGÀY ĐẶT HÀNG</TH>
            <th>SỐ LƯỢNG</th>
            <TH>TỔNG TIỀN</TH>
            <TH>TRẠNG THÁI</TH>
            <th>CHỨC NĂNG</th>
          </tr>
          <?php 
          foreach($listhoadon as $hd){
            extract($hd);
            $soluong = loadall_giohang_soluong($hd['id']);
            $ttdh = get_ttdh($hd['trangthai']);
          ?>
          <tr>
            <td>#MAM-<?= $hd['id'] ?></td>
            <td>
              <ul>
                <li>Tên:<?=$hd['hd_name'] ?></li>
                <li>Email:<?= $hd['hd_email'] ?></li>
                <li>Địa chỉ:<?= $hd['hd_address'] ?></li>
                <li>SĐT:<?= $hd['hd_tel'] ?></li>
              </ul>
            </td>
            <TD><?= $hd['ngaydathang'] ?></TD>
            <TD><?= $soluong ; ?></TD>
            <TD><?= $hd['tong'] ?>$</TD>
            <TD><?= $ttdh ; ?></TD>
            <td>
              <a href="index.php?act=suahd&idhd=<?php echo $id; ?>"><input type="button" value="Trạng Thái"></a>
              <a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?act=xoahd&idhd=<?php echo $id; ?>"><input type="button" value="Hủy Đơn" name="xoahd"></a>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <div class="row mb10 ">
      </div>
    </form>
  </div>
</div>
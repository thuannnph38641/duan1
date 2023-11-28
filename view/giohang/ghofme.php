<style>
  th{
    background-color: yellowgreen !important;

    }
    table td{
        font-size: 18px;
        border: 1px solid gray !important ;
        
    }
    table th, table td{
        border: 1px solid gray ; 
    }
    table{
        position: relative;
        left: 150px;
    }
    

</style>
<main>
    <div class="giohang">
        <p>Giỏ hàng của bạn</p>
       
        <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th>Trạng thái</th>
            </tr>
            <?php
            if (is_array($listdh)) {
                foreach ($listdh as $dh) {
                    extract($dh);
                    $ttdh = get_ttdh($dh['trangthai']);
                    $soluongdh = loadall_giohang_soluong($dh['id']);
                    ?>
                    <tr>
                        <td>#MAM-<?= $dh['id'] ?></td> 
                        <td><?= $dh['ngaydathang'] ?></td>
                        <td><?= $soluongdh ?></td>
                        <td><?= $dh['tong'] . '$' ?></td>                                     
                        <td><?= $ttdh ?></td>
                    </tr>
                <?php
                }
            }
            ?>
            
            <tr>
                <td colspan="3">Tổng</td>
                <td colspan="2"><?= $dh['tong'] . '$' ?></td>
            </tr>
        </table>
    </div>
</main>
<style>
.form1 a>button {
    background-color: red !important;
    margin-top:20px;
    width: 150px;
    height: 30px;
    border: 1px solid gainsboro !important;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    font-weight: 600;
}
.form1 input:nth-child(5){
    width: 100px !important;
    color: white !important;
    background-color: red;
    border: 1px solid gray !important;
    border-radius: 5px;
}
</style>
<div class="form1">
            <h1>QUÊN MẬT KHẨU</h1>
            <form action="index.php?act=quenmk" method="post">
                <label for="">EMAIL</label><BR>
                <input type="email" name="email"  placeholder="Nhập email"><br>
                <input type="submit" value="GỬI EMAIL" name="guiemail">
            </form>
            <?php if (isset($guimk) && $guimk != '') {
          echo $guimk;
        } ?>
        </div>
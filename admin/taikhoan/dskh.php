<div class="row">
    <div class="row formtitle">
        <h1>DANH SACH KHACH HANG</h1>
    </div>
    <div class="row formtk">
        <div class="row mb10 formdstk">
            <table>
                <tr>
                    <th></th>
                    <th>MA KH</th>
                    <th>TEN DANG NHAP</th>
                    <th>MAT KHAU</th>
                    <th> EMAIL</th>
                    <th> DIA CHI</th>
                    <th> DIEN THOAI</th>
                    <th>VAI TRO?</th>
                    <th></th>
                </tr>

                <?php
                foreach ($dstk as $tk) {
                    extract($tk);
                    $suatk = "index.php?act=suatk&id_tk=" . $id_tk;
                    $xoatk = "index.php?act=xoatk&id_tk=" . $id_tk;
                    echo '<tr>
            <td><input type="checkbox" name="cb" id="" /></td>
            <td>' . $id_tk . '</td>
            <td>' . $username . '</td>
         <td>' . $password . '</td>
         <td>' . $email . '</td>
         <td>' . $address . '</td>
         <td>' . $tel . '</td>
         <td>' . $role . '</td>
        <td> <a href="' . $suatk . '"><input type="button" value="sua" /></a> 
      <a href="' . $xoatk . '"> <input type="button" value="xoa" /></a>  </td>
                        </tr>';
                }
                ?>
            </table>
        </div>

       
        <div class=" mb10">
            <input type="submit" value="CHON TAT CA" />
            <input type="submit" value="BO CHON TAT CA" />
            <input type="submit" value="XOA CAC MUC DA CHON" />
            <a href="index.php?act=addtk"><input type="button" value="Nhap them" /></a>
        </div>
    </div>
</div>
</div>
</body>

</html>
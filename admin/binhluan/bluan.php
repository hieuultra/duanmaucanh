<div class="row">
    <div class="row formtitle">
        <h1>DANH SACH BINH LUAN</h1>
    </div>
    <div class="row formtk">
        <div class="row mb10 formdstk">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NOI DUNG</th>
                    <th>ID_USER</th>
                    <th> ID_SP</th>
                    <th> NGAY BINH LUAN</th>
                    <th></th>
                </tr>

                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    // $suabl = "index.php?act=suabl&id_bl=" . $id_bl;
                    $xoabl = "index.php?act=xoabl&id_bl=" . $id_bl;
                    echo '<tr>
            <td><input type="checkbox" name="cb" id="" /></td>
            <td>' . $id_bl . '</td>
            <td>' . $noidung . '</td>
         <td>' . $id_tk . '</td>
         <td>' . $id_sp . '</td>
         <td>' . $ngaybl . '</td>
        <td> 
      <a href="' . $xoabl . '"> <input type="button" value="xoa" /></a>  </td>
                        </tr>';
                }
                ?>
            </table>
        </div>


        <div class=" mb10">
            <input type="submit" value="CHON TAT CA" />
            <input type="submit" value="BO CHON TAT CA" />
            <input type="submit" value="XOA CAC MUC DA CHON" />
        </div>
    </div>
</div>
</div>
</body>

</html>
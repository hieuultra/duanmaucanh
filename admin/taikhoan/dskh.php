<div class="row">
    <div class="row formtitle">
        <h1>DANH SACH KHACH HANG</h1>
    </div>
    <div class="tbao" style="color: red;">
        <?php
        if (isset($tbao) && ($tbao) != "") {
            echo $tbao;
        }
        ?>
    </div>
    <div class="row formtk">
        <div class="row mb10 formdstk">
            <table>
                <tr>
                    <th></th>
                    <th>MA KH</th>
                    <th>TEN DANG NHAP</th>
                    <th>MAT KHAU</th>
                    <th>HINH</th>
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
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='70'>";
                    } else {
                        $hinh = "No photo";
                    }
                    // Kiểm tra vai trò
                    if ($role == 2) {
                        $xoatk = ''; // Không hiển thị nút xóa cho admin
                    } else {
                        $xoatk = '<a href="' . $xoatk . '"> <input type="button" value="xoa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>';
                    }
                    echo '<tr>
            <td><input type="checkbox" name="cb" id="" /></td>
            <td>' . $id_tk . '</td>
            <td>' . $username . '</td>
         <td>*********</td>
         <td>' . $hinh . '</td>
         <td>' . $email . '</td>
         <td>' . $address . '</td>
         <td>' . $tel . '</td>
         <td>' . $name_role . '</td>
        <td> <a href="' . $suatk . '"><input type="button" value="sua" id="s" /></a> 
                 ' . $xoatk . '</td>
                        </tr>';
                }
                ?>
            </table>
        </div>
        <!-- <a href="' . $xoatk . '"> <input type="button" value="xoa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a> -->

        <div class=" mb10">
            <input type="submit" value="CHON TAT CA" id="t"/>
            <input type="submit" value="BO CHON TAT CA" id="t" />
            <input type="submit" value="XOA CAC MUC DA CHON" id="t" />
            <a href="index.php?act=addtk"><input type="button" value="Nhap them" id="t"/></a>
        </div>
    </div>
</div>
</div>
</body>

</html>
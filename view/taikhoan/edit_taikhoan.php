<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">CAP NHAP TAI KHOAN</div>
            <div class="row boxcontent formdky">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data">
                    USERNAME: <input type="text" name="username" value="<?= $username ?>">
                    PASSWORD: <input type="password" name="password" value="<?= $password ?>">
                    HO TEN: <input type="text" name="hoten" value="<?= $ho_ten ?>">
                    <!-- HINH:<input type="file" name="hinh" value="<?= $hinh ?>"> -->
                    EMAIL: <input type="email" name="email" value="<?= $email ?>">
                    ADDRESS:<input type="text" name="address" value="<?= $address ?>">
                    TEL:<input type="text" name="tel" value="<?= $tel ?>">
                    <input type="hidden" name="id_tk" value="<?= $id_tk ?>">
                    <input type="submit" value="CAP NHAP" name="capnhap">
                    <input type="reset" value="Nhap lai">
                </form>
            </div>
            <h2 class="tbao">
                <?php
                if (isset($tbao) && ($tbao) != "") {
                    echo $tbao;
                }
                ?>
            </h2>
        </div>


    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>
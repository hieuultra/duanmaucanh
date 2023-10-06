<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">DANG KY THANH VIEN</div>
            <div class="row boxcontent formdky">
                <form action="index.php?act=dky" method="post" enctype="multipart/form-data">
                    USERNAME: <input type="text" name="username" id="">
                    PASSWORD: <input type="password" name="password" id="">
                    HO TEN: <input type="text" name="hoten" id="">
                    <!-- HINH:<input type="file" name="hinh" id=""> -->
                    EMAIL: <input type="email" name="email" id="">
                    ADDRESS:<input type="text" name="address" id="">
                    TEL:<input type="text" name="tel" id="">
                    <input type="submit" value="Dang ky" name="dangky">
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
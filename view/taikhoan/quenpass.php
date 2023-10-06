<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">QUEN MAT KHAU</div>
            <div class="row boxcontent formdky">
                <form action="index.php?act=quenmk" method="post">
                    EMAIL: <input type="email" name="email" id="">
                    <input type="submit" value="GUI" name="guiemail">
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
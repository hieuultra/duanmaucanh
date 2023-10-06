<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent">
                <?php
                $tt = $price - (($price * $discount) / 100);
                $image = $img_path . $image;
                echo '<div class="row mb spct"><img src="' . $image . '"></div>';
                echo '<li>' . "MA SP:" . $id_sp . '</li>';
                echo '<li>' . "TEN SP:" . $name . '</li>';
                echo '<li>' . "DON GIA:" . number_format($tt, 0, ",", ".") . '</li>';
                echo '<li>' . "GIAM GIA:" . $discount . "%" . '</li>';
                echo  $mo_ta;
                ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#bl").load("view/binhluan/binhluanform.php", {
                    id_sp: <?= $id_sp ?>
                });
            });
        </script>
        <div class="row mb" id="bl">
            <div class="boxtitle">BINH LUAN</div>
            <div class="row boxcontent">

            </div>

        </div>
        <div class="row mb">
            <div class="boxtitle">SAN PHAM CUNG LOAI</div>
            <div class="row boxcontent">
                <?php
                foreach ($spcl as $cl) {
                    extract($cl);
                    $linksp = "index.php?act=ctietsp&id_sp=" . $id_sp;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>
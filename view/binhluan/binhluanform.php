<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$id_sp = $_REQUEST['id_sp'];
$dsbl = loadall_bl($id_sp);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="row mb">
        <div class="boxtitle">Binh Luan</div>
        <div class="boxcontent2 menudoc bluan">
            <table>
                <ul>
                    <?php

                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $id_tk . '</td>';
                        echo '<td>' . $ngaybl . '</td></tr>';
                    }
                    ?>
                </ul>
            </table>
        </div>
        <div class="boxft search">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="$id_sp" value="<?= $id_sp ?>">
                <input type="text" name="noidung" />
                <input name="guibl" type="submit" value="GUI BINH LUAN" class="gbl">
            </form>
        </div>
        <?php
        if (isset($_POST['guibl']) && ($_POST['guibl'])) {
            $noidung = $_POST['noidung'];
            $id_sp = $_POST['$id_sp'];
            $id_tk = $_SESSION['user']['id_tk'];
            // $ngaybl = date("h:i:sa d/m/Y");
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $ngaybl = date("Y-m-d H:i:s", time());
            insert_bl($noidung, $id_tk, $id_sp, $ngaybl);
            header("location:" . $_SERVER['HTTP_REFERER']);
        }

        ?>
    </div>
</body>

</html>
<div class="row">
  <div class="row formtitle">
    <h1>QUAN LY LOAI HANG</h1>
  </div>
  <div class="row formct">
  <div style="color: red;">
            <?php
            if (isset($tbao) && $tbao != "")
                echo $tbao;
            ?>
        </div>

    <form action="index.php?act=adddm" method="post">
      <div class="row mb10">
        Ma loai <br />
        <input type="text" name="idloai" disabled placeholder="auto number" />
      </div>
      <div class="row mb10">
        Ten loai <br />
        <input type="text" name="nameloai" />
      </div>

      <input type="submit" value="THEM" name="them">

      <input type="submit" value="NHAP LAI" name="nl">
       <a href="index.php?act=dslh">
        <input class="btn" type="button" value="DANH SACH">
      </a>
      <br>
    </form>
   
  </div>
</div>
</div>
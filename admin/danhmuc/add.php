<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
    $().ready(function() {
        $("#demoForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "nameloai": {
                    required: true,
                    nameloai:true
                }

            },
            messages: {

                "nameloai": {
                    required: "Bắt buộc nhập tên danh mục ",
                    nameloai: "Không được trùng tên danh mục đã có"
                }
            }
        });
    });
</script>
<style>
    label.error {
        color: red;
    }
</style>
<div class="row">
  <div class="row formtitle">
    <h1>QUAN LY LOAI HANG</h1>
  </div>
  <div class="row formct">
    <form action="index.php?act=adddm" method="post" id="demoForm">
      <div class="row mb10">
        Ma loai <br />
        <input type="text" name="idloai" disabled placeholder="auto number" />
      </div>
      <div class="row mb10">
        Ten loai <br />
        <input type="text" name="nameloai" />
      </div>

      <input type="submit" value="THEM" name="them" id="t">

      <input type="submit" value="NHAP LAI" name="nl" id="t">
      <a href="index.php?act=dslh">
        <input class="btn" type="button" value="DANH SACH" id="t">
      </a>
      <br>
    </form>

  </div>
</div>
</div>
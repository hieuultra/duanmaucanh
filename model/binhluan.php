<?php
function insert_bl($noidung, $id_tk, $id_sp, $ngaybl)
{
    $sql = "insert into binhluan(noidung,id_tk,id_sp,ngaybl) values('$noidung','$id_tk','$id_sp','$ngaybl')";
    pdo_execute($sql);
}

function delete_bl($id_bl)
{
    $sql = "delete from binhluan where id_bl=" . $id_bl;
    pdo_execute($sql);
}
function loadall_bl($id_sp)
{
    $sql = "select *from binhluan  where 1";
    if ($id_sp > 0)
        $sql .= " and id_sp='" . $id_sp . "'";
    $sql .= "  order by id_bl desc ";

    $dsbl = pdo_query($sql);
    return $dsbl; //co ket qua tra ve phai return
}
// function loadone_dm($id_dm)
// {
//     $sql = "select * from danhmuc where id_dm=" . $id_dm;
//     $suadm = pdo_query_one($sql);
//     return $suadm; //co ket qua tra ve phai return
// }
// function update_dm($nameloai, $id_dm)
// {
//     $sql = "update danhmuc set name='" . $nameloai . "' where id_dm=" . $id_dm;
//     pdo_execute($sql);
// }

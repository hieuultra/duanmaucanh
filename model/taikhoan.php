<?php
function insert_tk($username, $password, $ho_ten, $email, $address, $tel)
{
    $sql = "insert into taikhoan(username,password,ho_ten,email,address,tel) values('$username','$password','$ho_ten','$email','$address','$tel')";
    pdo_execute($sql);
}
function check_user($username, $password)
{
    $sql = "select * from taikhoan where username='" . $username . "' AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
    // return pdo_query_all($sql); //co ket qua tra ve phai return
}
function update_taikhoan($id_tk, $username, $password, $ho_ten, $email, $address, $tel)
{
    $sql = "update taikhoan set username='" . $username . "',password='" . $password . "',
        ho_ten='" . $ho_ten . "',email='" . $email . "',
        address='" . $address . "',tel='" . $tel . "' where id_tk=" . $id_tk;
    pdo_execute($sql);
}
function check_email($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
    // return pdo_query_all($sql); //co ket qua tra ve phai return
}
function loadall_tk()
{
    $sql = "select * from taikhoan order by id_tk desc";
    $dstk = pdo_query($sql);
    return $dstk; //co ket qua tra ve phai return
}
function delete_tk($id_tk)
{
    $sql = "delete from taikhoan where id_tk=" . $id_tk;
    pdo_execute($sql);
}
function loadone_tk($id_tk)
{
    $sql = "select * from taikhoan where id_tk=" . $id_tk;
    $suasp = pdo_query_one($sql);
    return $suasp; //co ket qua tra ve phai return
}
function  update_tk($id_tk, $username, $password, $email, $address, $tel)
{
    $sql = "update taikhoan set username='" . $username . "',password='" . $password . "',email='" . $email . "',
        address='" . $address . "',tel='" . $tel . "' where id_tk=" . $id_tk;
    pdo_execute($sql);
}
function insert_taikhoan($username, $password, $ho_ten, $email, $address, $tel)
{
    $sql = "insert into taikhoan(username,password,ho_ten,email,address,tel) values('$username','$password','$ho_ten','$email','$address','$tel')";
    pdo_execute($sql);
}
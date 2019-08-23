<?php
/*
 * thiết lập kết nối cơ sở dữ liệu
 */
define("DB_SERVER","localhost");
define("DB_SERVER_USERNAME","root");
define("DB_SERVER_PASSWORD","");
define("DB_SERVER_NAME","demoapplogin");

$connection = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_SERVER_NAME);
/*
 * kiểm tra kết nối có thành công hay không
 */
if($connection==false){
    die("errors kết nối không thành công").mysqli_connect_error();
}
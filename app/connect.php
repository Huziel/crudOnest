<?php
function conn()
{
    $host = "localhost";
    $user = "root";
    $pass = '123456789';
    $db = "crudonest";
    return new MySQLi("$host", "$user", "$pass", "$db");
}

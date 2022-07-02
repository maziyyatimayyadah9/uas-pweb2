<?php
    header('Access-Control-Allow-Origin: *');
    require_once('../connection.php');
    $sql = "select * from laptop";
    $result = pg_query($sql);
    echo json_encode(pg_fetch_all($result));

?>
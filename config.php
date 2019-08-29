<?php

define("DB_NAME","phpDemo");
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");


$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


function selectItem(){
    global $db;
    $sql = "SELECT * FROM cart WHERE itemStatus=0";
    // default status for each item is 0
    //when the status changes, then the user should not see it again

    $result = mysqli_query($db, $sql);

    return $result;
}



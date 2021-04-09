<?php
require_once 'connectdb.php';
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = "";
    if(isset($_GET["id"]) && $_GET["id"] !=''){
    $id = $_GET["id"];
    $strSQL = "DELETE FROM user WHERE id=".$id;
    $result = $myconn->query($strSQL);
    // echo $strSQL ."<br>";
    // echo $result;
    if ($result) {
        echo "ลบมูลสำเร็จ";
    } else {
        echo "ไม่สามารถลบข้อมูลได้";
    }
    }else{
        echo"id is null";
    }
    
}
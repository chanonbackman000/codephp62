<?php
include 'template\header.html';
require_once 'connectdb.php';

$id="";
$username="";
$status="";
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = "";
    if(isset($_GET["ID"]) && $_GET["ID"] !='') {
    $id = $_GET["ID"];
    $username=$_GET["usermane"];
    $status= $_GET["status"];
    
    }else{
        echo"id is null";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username =  $status= "";
    $id = $_GET["ID"];
    $username= $_POST["username"];
    $status= $_POST["status"];

    if ($username && $status){
        $strSQL = "UPDATE user SET usermane='".$username ."',status=".$status." WHERE ID=".$id;
        if (($username=="") && ($status == "")){
        echo "ไม่สามารถเพิ่มข้อมูลได้1";
        }else{
        echo $strSQL;
        $result = $myconn->query($strSQL);

        if ($result){
                 echo "เพิ่มข้อมูลสำเร็จ";
        } else {
                 echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
        }
        }
   }
    ?>
<body>
<form action="update.php?ID=<?=$id?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?= $username ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">status</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="status" value="<?= $status ?>">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
    <?php
    include 'template\header.html';
    ?>
</body>

</body>
</html>


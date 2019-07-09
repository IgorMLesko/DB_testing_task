<?php


    $dbconnect = mysqli_connect("localhost", "igor", "test777") or die ("Couldn't connect to database");
    mysqli_select_db($dbconnect, "testingtaskdb") or die ("Couldn't locate database");



    $MySQLRecordSet = mysqli_query($dbconnect,'SELECT * FROM persons');
        while($Result = mysqli_fetch_assoc($MySQLRecordSet)) {
            foreach($Result as $k => $val) {
                echo $k . " = " . $val . ".......";
            }
        echo "<br>";
        }
        echo "<hr>";

    if(isset($_POST['delete'])) {
//        include "list.php";
        $id = strip_tags(trim($_POST['id']));
        $del_res = mysqli_query($dbconnect, "DELETE FROM persons WHERE id='$id'");
        if (!$del_res) {
            exit('Delete error');
        } else {
            exit("<meta http-equiv='refresh' content='0; url= $_SERVER[PHP_SELF]'>");
        }
    }
mysqli_close($dbconnect);
?>
<!DOCTYPE html>
<html>
<head>
    <title>LIST</title>
</head>
<body>
<form name="form" action="list.php" method="post">
    <label>Enter ID</label>
    <input type="text"  name="id">
    <input type="submit" name="delete" value="DELETE">
</form>
</body>
</html>
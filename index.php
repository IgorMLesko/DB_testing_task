
<?php

        $dbhost = "localhost";
        $dbname = "testingtaskdb";
        $dbusername = "igor";
        $dbpass = "test777";

$dbconnect = mysqli_connect("localhost","igor","test777") or die ("Couldn't connect to database");
mysqli_select_db($dbconnect,"testingtaskdb") or die ("Couldn't locate database");


    if(isset($_POST["add"])){
        $fname = strip_tags(trim($_POST['fname']));
        $lname = strip_tags(trim($_POST['lname']));
        $bdate = strip_tags(trim($_POST['bdate']));
        $email = strip_tags(trim($_POST['persemail']));
        $phone = strip_tags(trim($_POST['phone']));
        $description = strip_tags(trim($_POST['description']));
        $error_fname = "";
        $error_lname = "";
        $error_email = "";
        $error = false;
        if($fname == ""){
            $error_fname = "enter your first name";
            $error = true;
        }
        if($lname == ""){
            $error_lname = "enter your last name";
            $error = true;
        }
        if($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error_email = "enter the correct email";
            $error = true;
        }
        if(!$error){
            $mysqli_query = "INSERT INTO persons (firstName, lastName, birthDate, email, phone, description) 
                                VALUES ('$fname', '$lname', '$bdate', '$email', '$phone', '$description')";
            if (mysqli_query($dbconnect, $mysqli_query)) {
                echo "New record created successfully";
                mysqli_close($dbconnect);
            } else {
                echo "Error: " . $mysqli . "<br>" . mysqli_error($dbconnect);
            }

        }
    }


?>


<!DOCTYPE html>
<html>
<head>
    <title>FORM</title>
</head>
<body>
    <h2>Form for registration of persons</h2>
    <form name="form" action="index.php" method="post">
        <label>FIRST NAME</label><br/>
        <input type="text" name="fname">
        <span style="color:red"><?=$error_fname?></span><br/>
        <label>LAST NAME</label><br/>
        <input type="text" name="lname">
        <span style="color:red"><?=$error_lname?></span><br/>
        <label>BIRTH DATE</label><br/>
        <input type="date" name="bdate"><br/>
        <label>EMAIL</label><br/>
        <input type="email" name="persemail">
        <span style="color:red"><?=$error_email?></span><br/>
        <label>PHONE</label><br/>
        <input type="text"  name="phone"
                      pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                      required><br/>
        <label>DISCRIPTION(ABOUT)</label><br/>
        <textarea name="description" cols="30" rows="5"></textarea><br/>
        <input type="submit" name="add" value="ADD">
    </form>
    <a href="list.php" target="_blank">Go to list of all persons</a>
</body>
</html>
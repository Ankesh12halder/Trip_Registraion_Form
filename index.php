<?php
$insert= false;

$server="localhost";
$username="root";
$password= "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to " . mysqli_connect_error());
}
//echo "success";    //for this connection with database is done


// now we have to pass the entered values in redirected index.php page after submission
$name=$_POST['name'];
$gender= $_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
//$other=$_POST['other'];
//here trip is the database name and table name is also trip, so to select the database we have to write this syntax
$sql="INSERT INTO `trip`.`trip`(`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)    
 VALUES ('$name', '$age', '$gender', '$email', '9999999999', 'other',current_timestamp());";

//echo $sql;


// now the inserted data should to be excuted or entered in database
 
if($con->query($sql) == true){
    //echo "susccessfully inserted";
    $insert= true;
 }
 else{
    echo "ERROR: $sql <br> $con->error";
    $not_insert;
 }
 $con-> close();


?>

<!-- here we have pasted the html code also , both php nad html code in a single file-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">     <!-- css file tag-->
</head>
<body>
<img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>

        <form action="index.php" method="post">        <!--making form-->
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>        <!--submit button-->
            <button class="btn">Reset</button>        <!--reset button-->
                                                      <!--id basically uniquely identify an element-->
    <!--we can use same class in different elements, we can use multiple class in an element
        and we can also add same class in multiple element-->
        </form>

    </div>
    <script src="index.js"></script>                    <!--js file tag-->
</body>
</html>
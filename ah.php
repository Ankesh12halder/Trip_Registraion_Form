<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
          echo"hii " ;          //echo print in the screen
          ?>
           <?php
          $variable1=34;
          $variable2=45;        // no data type declaration required
      
//operators
//arithmatic operator
echo $variable1+$variable2;
echo"<br>";           //for new line
    
//Assignment operator

echo"the new variable";
$newVar=$variable1;
$newVar+=1;
// $newVar-=1;
// $newVar*=1;
// $newVar/=1;
echo $newVar;
echo"<br>";


// Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

// Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;

    
// Logical Operator
    // and (&&)
    // or (||)
    // xor 
    // !

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);


?>


          
          
    </div>
</body>
</html>
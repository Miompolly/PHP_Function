<?php 
$x=$_GET['num1'];
$y=$_GET['num2'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work</title>
    <style>
.cont{
    width: 400px;
    height: 500px;
    border: 1px solid;
    font-size: 20px;
    background-color: whitesmoke;
    padding-left: 20px;
    margin-left: 20%;
}

    </style>
</head>
<body>
    <div class="cont">
    <form action="index.php" method="get">
    <u> <h1>Calculation form</h1></u>
    Number x : <input type="number" name="num1" value="<?php echo $x;?>"><br><br>
    Number y : <input type="number" name="num2" value="<?php echo $y;?>"><br><br>
    <input type="submit" value="Calculate">
    <hr>
    </form>

   <u> <h1>Results</h1></u>

 
<?php 


echo "1. Sum of |x+y| : ".abs($x+$y)."<br>";
echo "2. Sum of |x|+|+y| : ".abs($x)+abs($y)."<br>";


echo "3. X^3 / x+y:".pow($x,3)/($x+$y)."<br>";

echo "4. √ x^6 + y^5  :".sqrt(pow($x,6))+pow($y,5)."<br>";
echo "5. ( 𝑥 + √𝑦)7 : ".pow($x+sqrt($y),7);



?>

</div>
</body>
</html>



<!-- CREATE TABLE AFS (
    REGID int NOT NULL,
    Names varchar(50) NOT NULL,
    DEp varchar(20),
   
    PRIMARY KEY (REGID)
); -->

<!-- 
CREATE TABLE STUD (
    STUDID int NOT NULL,
     STUDNAME varchar(20) NOT NULL,
    REGID int NOT null,

    PRIMARY KEY (STUDID),
    FOREIGN KEY (REGID) REFERENCES AFS(REGID)
); -->



<!-- CREATE TABLE tableName (
    col1 int NOT NULL,
    col2 varchar(50) NOT NULL,
    col3 int,
    …………….
    PRIMARY KEY (col1)
); -->




<!-- CREATE TABLE childTable (
    col1 int NOT NULL,
    col2 int NOT NULL,
    col3 int,
    ………...
    PRIMARY KEY (col1),
    FOREIGN KEY (col3) REFERENCES parentTable(parent_Primary_key)
); -->
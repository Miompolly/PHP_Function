<?php 
$width=$_GET['width'];
$height=$_GET['height'];


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
    <form action="rectangle.php" method="get">
    <u> <h1>Rectangle</h1></u>
    Width : <input type="number" name="width" value="<?php echo $width;?>"><br><br>
    Height : <input type="number" name="height" value="<?php echo $height;?>"><br><br>
    <input type="submit" value="Calculate">
    <hr>
    </form>

   <u> <h1>Results</h1></u>

 
<?php 


echo "1. Perimeter of Rectangle : ".(($width+$height)*2)."<br>";
echo "2. Area of Rectangle : ".($width*$height)."<br>";






?>

</div>
</body>
</html>

<?php
$num1 = $_GET["number1"];
$num2 = $_GET["number2"];
$op = $_GET["op"];

if(empty($num1)){
    $result = "First number is empty";
}
elseif(empty($num2)){
    $result = "Second number is empty";
}
elseif(empty($op)){
    $result = "Operation is empty";
}
else{
    if($op == "+"){
        $result = $_GET["number1"] + $_GET["number2"];
    }
    elseif($op == "-"){
        $result = $_GET["number1"] - $_GET["number2"];
    }
    elseif($op == "*"){
        $result = $_GET["number1"] * $_GET["number2"];
    }
    elseif($op == "/"){
        $result = $_GET["number1"] / $_GET["number2"];
    }
}

?>

<body>
    
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>Enter Number 1:</label>
                <input type="number" name="number1">
            </div>
            <div>
                <label>Enter Number 2:</label>
                <input type="number" name="number2">
            </div>
            <div>
                <label>Enter Operation:</label>
                <input type="text" name="op">
            </div>
            <div>
                <?php echo $result ?>
            </div>
            <br>
            <input type="submit">
        </form>

    </div>
</body>

